<?php

namespace App\Models;
use app\Models\Hello;

class Bear extends Animal
{
    use Hello\Hello;

    public function iAmWhat()
    {
        echo "Bear!";
    }
}
