<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;

use PHPUnit\Runner\InvalidOrderException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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


      public function register()
      {
          $this->renderable(function (InvalidOrderException $e, $request) {

                if($e->getCode() == 500) {
                    return response()->view('errors.500', [], 500);
                }else if ($e->getCode() == 503) {
                    return response()->view('errors.503', [], 503);
                }else if ($e->getCode() == 403) {
                    return response()->view('errors.403', [], 403);
                }else if ($e->getCode() == 404) {
                    return response()->view('errors.404', [], 404);
                }
          });
      }
}
