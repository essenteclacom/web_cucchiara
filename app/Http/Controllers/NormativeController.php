<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormativeController extends Controller {
    public function __invoke() {
        return view('normative');
    }
}