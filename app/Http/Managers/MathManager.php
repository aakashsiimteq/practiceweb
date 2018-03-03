<?php

namespace App\Http\Managers;

use App\Math;

class MathManager {

    public function add(array $inputs) {
        $math = new Math();
        $math->fill(['params' => $inputs]);
        return $math->add();
    }

    public function sub(array $inputs) {
        $math = new Math();
        $math->fill(['params' => $inputs]);
        return $math->sub();
    }
    public  function mul(array $inputs) {
        $math = new Math();
        $math->fill(['params' => $inputs]);
        return $math->mul();
    }
    public function div(array $inputs) {
        $math = new Math();
        $math->fill(['params' => $inputs]);
        return $math->div();
    }

}
