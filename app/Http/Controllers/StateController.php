<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public $var;
    public function __construct($var = null) {
        $this->var = $var;
    }
}
