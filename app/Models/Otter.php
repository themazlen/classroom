<?php

namespace App\Models;
use app\Models\Hello;
use app\Models\Animal;

class Otter extends Animal
{
    use Hello\Hello;
    public function iAmWhat()
    {
        echo "Otter!";
    }
}
