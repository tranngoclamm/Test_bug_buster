<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelloModel extends Model
{
    public function getMessage()
    {
        return "Hello, World!";
    }
}