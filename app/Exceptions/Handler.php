<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        // dd(request()->is('api/*'));
        $this->reportable(function (Throwable $e) {
            // if (request()->is('api/*')) {
            //     return response()->json($e->__toString(), $e->status);
            // }
            // return response()->json($e->__toString(), $e->status);
        });
        // $this->renderable(function (ValidationException $e, $request) {
        //     if ($request->is('api/*')) {
        //         $response = [
        //             'message' => $e->getMessage(),
        //             'status' => $e->status,
        //             'errors' => $e->errors()
        //         ];
        //         return response()->json($response, $e->status);
        //     }
        // });

        // $this->renderable(function (Throwable $e, $request) {
        //     if (env('APP_DEBUG') == true){
        //     if ($request->is('api/*')) {
        //         if($e instanceof Exception){
        //             // dd(['test']);
        //             // return response()->json(['test'],500);
        //             return response()->json($e->__toString(),500);
        //         }
        //         return response()->json($e->__toString(), $e->status);
        //     }
        //     return response()->json($e->__toString(), $e->status);
        // }
        // });
    }
}
