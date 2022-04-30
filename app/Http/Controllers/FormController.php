<?php

namespace App\Http\Controllers;

use App\Mail\Form;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function send(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required|string',
            'title' => 'required|string',
            'message' => 'required',
            'phone' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }

        Mail::to(env('MAIL_TO'))->send(new Form($request));

        return new JsonResponse(
            [
                'success' => true, 
                'message' => "E-mail sent!"
            ], 
            200
        );
    }
}
