<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    protected function successResponse($data, $statusCode = 200, $message = null): JsonResponse
    {
        return response()->json([
            'status' => "successful",
            'data' => $data,
            'message' => $message,
        ], $statusCode);
    }

    protected function errorResponse($message, $statusCode = 400): JsonResponse
    {
        return response()->json([
            'status' => "failed",
            'message' => $message,
        ], $statusCode);
    }

    protected function noContentResponse(): JsonResponse
    {
        return response()->json(null, 204);
    }
}
