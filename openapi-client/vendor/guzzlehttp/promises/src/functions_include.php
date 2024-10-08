<?php

namespace Axytos\FinancialServices;

// Don't redefine the functions if included multiple times.
if (!\function_exists('Axytos\FinancialServices\GuzzleHttp\Promise\promise_for')) {
    require __DIR__ . '/functions.php';
}
