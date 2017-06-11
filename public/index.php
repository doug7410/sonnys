<?php

use Illuminate\Http\JsonResponse;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Laravel\Lumen\Application();


$app->post('/login', function (\Illuminate\Http\Request $request){
    header("Access-Control-Allow-Origin: *");
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username == 'u' && $password == 'p') {
         return JsonResponse::create([
             'success' =>
                 ['message' => 'successful login']
         ]);
    } else {
         return JsonResponse::create([
             'error' =>
                 ['message' => 'invalid username or password']
         ], 500);
    }

});

$app->run();
