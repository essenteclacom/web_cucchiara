<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundsController extends Controller {
    public function __invoke() {
        return view('founds');
    }
}