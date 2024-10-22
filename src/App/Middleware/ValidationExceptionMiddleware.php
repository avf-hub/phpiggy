<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use Framework\Exceptions\ValidationException;

class ValidationExceptionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        try {
            $next();
        } catch (ValidationException $exception) {
            $_SESSION['errors'] = $exception->errors;
            $referer = $_SERVER['HTTP_REFERER'];
            redirectTo($referer);
        }
    }
}