<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsletterRequest;
use App\Models\Newsletter;

class NewsletterResearchController extends Controller {
    public function __invoke (CreateNewsletterRequest $request) {
        $save = Newsletter::create($request->all());
        if($save){
            return redirect('/research/#newsletter')->with('status', 'Se guardo la informacion correctamente');
        }
        return redirect('/research/#newsletter')->withErrors('No se pudo insertar su registro');
    }
}