<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {

        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        // Handle 404 errors
        if ($this->isHttpException($exception) && $exception->getCode() == 404) {
            return response()->view('errors.404', [], 404);
        }

        if ($this->isHttpException($exception) && $exception->getCode() == 500) {
            // Custom response or view for 500 error
            return response()->view('errors.500', [], 500);
        }


        return parent::render($request, $exception);
    }
}
