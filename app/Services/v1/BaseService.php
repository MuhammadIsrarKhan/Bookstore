<?php

namespace App\Services\v1;

use Illuminate\Support\Facades\Log;
use Throwable;

class BaseService
{
    public function sendSuccessResponse($data, $message = 'Success',  $success = true, $errors = null, $status = 200)
    {
        return response()->json([
            'success' => $success,
            'data'    => $data,
            "message" => $message,
            'errors' => $errors
        ], $status);
    }

    public function sendErrorResponse($message = 'Server Error', $status = 500)
    {
        return response()->json([
            'success' => false,
            'data'    => null,
            "message" => $message,
            'errors' => null
        ], $status);
    }

    public function handleException(Throwable $e, $method)
    {
        $this->generateLogs($method . ' - Catch Exception', [
            "Exception" => get_class($e),
            "Message" => $e->getMessage(),
            "File" => $e->getFile(),
            "Line" => $e->getLine(),
        ], 'error');

        return [
            'success' => false,
            'message' => "{$e->getMessage()} File: {$e->getFile()} Line: {$e->getLine()}",
        ];
    }

    public function generateLogs($apiName, $data, $type = "info")
    {
        Log::$type($apiName, $data);
    }
}
