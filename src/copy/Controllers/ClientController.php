<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return $clients;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Client::create($request->all());

        return true;
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $client = Client::find($request->id);

        $client->update($request->all());
        return true;
    }


    public function destroy(Request $request)
    {
        $client = Client::find($request->id);
        $client->delete();
        return true;
    }
}
