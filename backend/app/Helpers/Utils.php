<?php 
  // Code within app\Helpers\Utils.php
/*  

  1. CREATE ALIAS config/app.php

   'aliases' => [
    ...
       'Helper' => App\Helpers\Utils::class,
    ...
 2. Run composer dump-autoload

*/
namespace App\Helpers;

use Carbon\Carbon;

class Utils
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function randomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function getName($prefix){
        return $prefix.'_'.Carbon::now()->timestamp . '_' . uniqid();
    }

    public static function getHashName(){
        return substr(md5(uniqid()), 0, 15);
    }

    public static function uploadFile($file, $path, $fname){
       // $fileName = $fname.'.'.$file->getClientOriginalExtension();
        $fileName = $fname;
        $file->move(public_path($path), $fileName);
        return $fileName;
    }

    public static function exportSuccessResponse($errors, $records){
        return response()->json(['error'=> $errors, 'records' =>  $records], 401);
    }

  
}