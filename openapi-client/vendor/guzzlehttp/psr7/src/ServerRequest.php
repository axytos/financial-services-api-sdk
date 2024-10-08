<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use InvalidArgumentException;
use Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
use Axytos\FinancialServices\Psr\Http\Message\UploadedFileInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * Server-side HTTP request
 *
 * Extends the Request definition to add methods for accessing incoming data,
 * specifically server parameters, cookies, matched path parameters, query
 * string arguments, body parameters, and upload file information.
 *
 * "Attributes" are discovered via decomposing the request (and usually
 * specifically the URI path), and typically will be injected by the application.
 *
 * Requests are considered immutable; all methods that might change state are
 * implemented such that they retain the internal state of the current
 * message and return a new instance that contains the changed state.
 */
class ServerRequest extends Request implements ServerRequestInterface
{
    /**
     * @var array
     */
    private $attributes = [];
    /**
     * @var array
     */
    private $cookieParams = [];
    /**
     * @var array|object|null
     */
    private $parsedBody;
    /**
     * @var array
     */
    private $queryParams = [];
    /**
     * @var array
     */
    private $serverParams;
    /**
     * @var array
     */
    private $uploadedFiles = [];
    /**
     * @param string                               $method       HTTP method
     * @param string|UriInterface                  $uri          URI
     * @param (string|string[])[]                  $headers      Request headers
     * @param string|resource|StreamInterface|null $body         Request body
     * @param string                               $version      Protocol version
     * @param array                                $serverParams Typically the $_SERVER superglobal
     */
    public function __construct($method, $uri, array $headers = [], $body = null, $version = '1.1', array $serverParams = [])
    {
        $method = (string) $method;
        $version = (string) $version;
        $this->serverParams = $serverParams;
        parent::__construct($method, $uri, $headers, $body, $version);
    }
    /**
     * Return an UploadedFile instance array.
     *
     * @param array $files An array which respect $_FILES structure
     *
     * @throws InvalidArgumentException for unrecognized values
     * @return mixed[]
     */
    public static function normalizeFiles($files)
    {
        $normalized = [];
        foreach ($files as $key => $value) {
            if ($value instanceof UploadedFileInterface) {
                $normalized[$key] = $value;
            } elseif (is_array($value) && isset($value['tmp_name'])) {
                $normalized[$key] = self::createUploadedFileFromSpec($value);
            } elseif (is_array($value)) {
                $normalized[$key] = self::normalizeFiles($value);
                continue;
            } else {
                throw new InvalidArgumentException('Invalid value in files specification');
            }
        }
        return $normalized;
    }
    /**
     * Create and return an UploadedFile instance from a $_FILES specification.
     *
     * If the specification represents an array of values, this method will
     * delegate to normalizeNestedFileSpec() and return that return value.
     *
     * @param array $value $_FILES struct
     *
     * @return UploadedFileInterface|UploadedFileInterface[]
     */
    private static function createUploadedFileFromSpec(array $value)
    {
        if (is_array($value['tmp_name'])) {
            return self::normalizeNestedFileSpec($value);
        }
        return new UploadedFile($value['tmp_name'], (int) $value['size'], (int) $value['error'], $value['name'], $value['type']);
    }
    /**
     * Normalize an array of file specifications.
     *
     * Loops through all nested files and returns a normalized array of
     * UploadedFileInterface instances.
     *
     * @return UploadedFileInterface[]
     */
    private static function normalizeNestedFileSpec(array $files = [])
    {
        $normalizedFiles = [];
        foreach (array_keys($files['tmp_name']) as $key) {
            $spec = ['tmp_name' => $files['tmp_name'][$key], 'size' => isset($files['size'][$key]) ? $files['size'][$key] : null, 'error' => isset($files['error'][$key]) ? $files['error'][$key] : null, 'name' => isset($files['name'][$key]) ? $files['name'][$key] : null, 'type' => isset($files['type'][$key]) ? $files['type'][$key] : null];
            $normalizedFiles[$key] = self::createUploadedFileFromSpec($spec);
        }
        return $normalizedFiles;
    }
    /**
     * Return a ServerRequest populated with superglobals:
     * $_GET
     * $_POST
     * $_COOKIE
     * $_FILES
     * $_SERVER
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public static function fromGlobals()
    {
        $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
        $headers = getallheaders();
        $uri = self::getUriFromGlobals();
        $body = new CachingStream(new LazyOpenStream('php://input', 'r+'));
        $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? str_replace('HTTP/', '', $_SERVER['SERVER_PROTOCOL']) : '1.1';
        $serverRequest = new ServerRequest($method, $uri, $headers, $body, $protocol, $_SERVER);
        return $serverRequest->withCookieParams($_COOKIE)->withQueryParams($_GET)->withParsedBody($_POST)->withUploadedFiles(self::normalizeFiles($_FILES));
    }
    /**
     * @param string $authority
     * @return mixed[]
     */
    private static function extractHostAndPortFromAuthority($authority)
    {
        $authority = (string) $authority;
        $uri = 'http://' . $authority;
        $parts = parse_url($uri);
        if (\false === $parts) {
            return [null, null];
        }
        $host = isset($parts['host']) ? $parts['host'] : null;
        $port = isset($parts['port']) ? $parts['port'] : null;
        return [$host, $port];
    }
    /**
     * Get a Uri populated with values from $_SERVER.
     * @return \Axytos\FinancialServices\Psr\Http\Message\UriInterface
     */
    public static function getUriFromGlobals()
    {
        $uri = new Uri('');
        $uri = $uri->withScheme(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http');
        $hasPort = \false;
        if (isset($_SERVER['HTTP_HOST'])) {
            list($host, $port) = self::extractHostAndPortFromAuthority($_SERVER['HTTP_HOST']);
            if ($host !== null) {
                $uri = $uri->withHost($host);
            }
            if ($port !== null) {
                $hasPort = \true;
                $uri = $uri->withPort($port);
            }
        } elseif (isset($_SERVER['SERVER_NAME'])) {
            $uri = $uri->withHost($_SERVER['SERVER_NAME']);
        } elseif (isset($_SERVER['SERVER_ADDR'])) {
            $uri = $uri->withHost($_SERVER['SERVER_ADDR']);
        }
        if (!$hasPort && isset($_SERVER['SERVER_PORT'])) {
            $uri = $uri->withPort($_SERVER['SERVER_PORT']);
        }
        $hasQuery = \false;
        if (isset($_SERVER['REQUEST_URI'])) {
            $requestUriParts = explode('?', $_SERVER['REQUEST_URI'], 2);
            $uri = $uri->withPath($requestUriParts[0]);
            if (isset($requestUriParts[1])) {
                $hasQuery = \true;
                $uri = $uri->withQuery($requestUriParts[1]);
            }
        }
        if (!$hasQuery && isset($_SERVER['QUERY_STRING'])) {
            $uri = $uri->withQuery($_SERVER['QUERY_STRING']);
        }
        return $uri;
    }
    /**
     * @return mixed[]
     */
    public function getServerParams()
    {
        return $this->serverParams;
    }
    /**
     * @return mixed[]
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }
    /**
     * @param mixed[] $uploadedFiles
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function withUploadedFiles($uploadedFiles)
    {
        $new = clone $this;
        $new->uploadedFiles = $uploadedFiles;
        return $new;
    }
    /**
     * @return mixed[]
     */
    public function getCookieParams()
    {
        return $this->cookieParams;
    }
    /**
     * @param mixed[] $cookies
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function withCookieParams($cookies)
    {
        $new = clone $this;
        $new->cookieParams = $cookies;
        return $new;
    }
    /**
     * @return mixed[]
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }
    /**
     * @param mixed[] $query
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function withQueryParams($query)
    {
        $new = clone $this;
        $new->queryParams = $query;
        return $new;
    }
    /**
     * @return array|object|null
     */
    public function getParsedBody()
    {
        return $this->parsedBody;
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function withParsedBody($data)
    {
        $new = clone $this;
        $new->parsedBody = $data;
        return $new;
    }
    /**
     * @return mixed[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    /**
     * @return mixed
     */
    public function getAttribute($attribute, $default = null)
    {
        if (\false === array_key_exists($attribute, $this->attributes)) {
            return $default;
        }
        return $this->attributes[$attribute];
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function withAttribute($attribute, $value)
    {
        $new = clone $this;
        $new->attributes[$attribute] = $value;
        return $new;
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function withoutAttribute($attribute)
    {
        if (\false === array_key_exists($attribute, $this->attributes)) {
            return $this;
        }
        $new = clone $this;
        unset($new->attributes[$attribute]);
        return $new;
    }
}
