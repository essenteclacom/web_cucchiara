<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends Controller {
    public function __invoke() {
        return view('menus');
    }
}