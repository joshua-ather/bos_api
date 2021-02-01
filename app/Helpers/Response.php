<?php

// To get response message as global functioon
function responseJSON($code, $data, $message)
{
    ($code === 3) ? $request = 'success' :
      (($code === 2) ? $request = 'warning' :
        $request = 'error');

    $response = [
      'data'   => $data,
      'status' => [
        'code'    => $code,
        'request' => $request,
        'message' => $message,
      ],
    ];

    return $response;
}