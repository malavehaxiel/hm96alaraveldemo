<?php

namespace App\Traits;

use Illuminate\Http\Response;


trait HttpApiResponser
{
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    public function successCreatedResponse($data)
    {
        return $this->successResponse($data, Response::HTTP_CREATED);
    }

    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    public function errorUnprocessableEntityResponse($message)
    {
        return $this->errorResponse($message, Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
