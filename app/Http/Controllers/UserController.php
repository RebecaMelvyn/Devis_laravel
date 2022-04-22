<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(User $user){
        return view('users.show', ['user' => $user]);
    }
    function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }


   // function update(UpdateClientRequest $request, Client $client){
   //     $input = $request->only(['name', 'address', 'siret', 'ref', 'email', 'phone']);
//
 //       $client->update($input);
//
 //       return redirect()->route('clients.show', $client);
//    }
}
