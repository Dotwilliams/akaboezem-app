<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AppController extends Controller
{
    public function update(){

        $output = shell_exec('git pull');

        // You can return a response or redirect as needed
        // return response()->json(['output' => $output]);



        return back()->with('msg', $output);
    }
}
