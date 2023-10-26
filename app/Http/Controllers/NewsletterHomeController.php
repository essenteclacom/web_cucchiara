<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsletterRequest;
use App\Models\Newsletter;

class NewsletterHomeController extends Controller {
    public function __invoke (CreateNewsletterRequest $request) {
        $save = Newsletter::create($request->all());
        if($save){
            return redirect('/#newsletter')->with('status', 'Se guardo la informacion correctamente');
        }
        return redirect('/#newsletter')->withErrors('No se pudo insertar su registro');
    }
}