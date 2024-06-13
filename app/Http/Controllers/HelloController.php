<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $message = new \App\Models\HelloModel();
        $helloMessage = $message->getMessage();
        
        return view('hello', ['message' => $helloMessage]);
    }
}
