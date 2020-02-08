<?php


namespace App\Libraries;


use App\Mail\activation;
use App\Mail\register;
use App\Models\Button;
use App\Models\Error;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class Utilities
{
    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    function SendPassword(User $user, $Password)
    {
        Mail::to($user)->queue(new register('Notificación de credenciales',"Bienvenido $user->name","$user->user",$Password));
    }
    function Saveerrors(\Exception $exception)
    {
        $Error = new Error();
        $Error->trace = json_encode($exception->getTrace());
        $Error->code = $exception->getCode();
        $Error->message = $exception->getMessage();
        $Error->line = $exception->getLine();
        $Error->save();
    }
    public function acciones()
    {
        $route  = substr(Route::currentRouteName(), 0, 5);
        $Botones = Button::where('route',"like","%$route%")->orderBy('id_action', 'DESC')->get();
        return $Botones;
    }
}