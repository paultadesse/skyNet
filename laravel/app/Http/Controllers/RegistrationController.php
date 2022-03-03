<?php

namespace App\Http\Controllers;

use App\Actions\CreateRegistrationAction;
use App\Http\Requests\Registration\CreateRegistrationRequest;
use App\Http\Resources\RegistrationResource;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::all();

        if($registrations != null)
        {

            $registration_resource = RegistrationResource::collection($registrations);
            return $registration_resource;

        }else {
            return response()->json([ 'message' => 'No Record Found !']);
        }
    }
    public function store(CreateRegistrationRequest $request, CreateRegistrationAction $createRegistrationAction)
    {
        $registration = $createRegistrationAction->create($request);

        if ($registration->wasRecentlyCreated) 
        {
            return response()->json($registration, 201);    
        }else{
            return response()->json([ 'message' => 'some error occured']);
        }
    }
}
