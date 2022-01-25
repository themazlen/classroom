<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal {
    use HasFactory;
    public function iAmWhat(){
        echo 'Hello, I am a';
    }
}
