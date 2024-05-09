<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store(ContactRequest $request) {

        return response()->json([
            'result' => true
        ]);
    }
}
