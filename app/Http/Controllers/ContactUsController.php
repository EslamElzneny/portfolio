<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class ContactUsController extends Controller
{
    public function create(Request $req){

        $validation = Validator::make($req->all(),
            [
                "name" => "required|min:3",
                "email" => "required|email",
                "phone" => "required",
                "message" => "required|min:10"
            ]
        );

        if($validation->fails()){
            return Response::make(['error' => $validation->errors(),"Success"=>false], 400);
        }

        ContactUs::create($req->all());

        return response()->json(["success"=>true,"message"=>"Sent message successfully"]);

    }
}
