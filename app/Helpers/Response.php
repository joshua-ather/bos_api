<?php

// To get response message as global functioon
function responseJSON($key, $data, $message, $code)
{
    ($key === 3) ? $request = 'success' :
      (($key === 2) ? $request = 'warning' :
        $request = 'error');

    $response = [
      'data'   => $data,
      'status' => [
        'code'    => $key,
        'request' => $request,
        'message' => $message,
      ],
    ];

    return response()->json($response, $code);
}

// To get company picture as global function
function getCompanyPicture($value)
{
    return env('APP_URL') . $value;
}