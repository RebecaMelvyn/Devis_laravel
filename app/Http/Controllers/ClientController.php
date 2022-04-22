<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    function create()
    {
        return view('createClients');
    }

    function store(StoreUserRequest $request, Client $client)
    {
        $input = $request->only(['name', 'address', 'siret', 'ref', 'email', 'phone']);
        $githubUser = Auth::user()->id;
        $client = Client::create(
            ['user_id' => $githubUser],
            [$input]
        );
        $client->update($input);
        return redirect()->route('dashboard');
    }

    function show(Client $client){
        return view('clients.show', ['client' => $client]);
    }

    function destroy(Client $client){
        $client->delete();
        return redirect()->route('dashboard');
    }
    function edit(Client $client){
        return view('clients.edit', ['client' => $client]);
    }

    function update(UpdateClientRequest $request, Client $client){
        $input = $request->only(['name', 'address', 'siret', 'ref', 'email', 'phone']);

        $client->update($input);

        return redirect()->route('clients.show', $client);
    }
}
