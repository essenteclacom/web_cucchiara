<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineOperationController extends Controller {
    public function __invoke() {
        return view('onlineoperation');
    }
}