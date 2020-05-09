<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex() {
        // clients ordenen naar gelang toevoegen
        $clients = Client::orderBy('id', 'desc')->get();
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function getCreate() {
        return view('clients.edit', [
            // null waarde aan klant geven voor isset te vermijden
            'client' => null
        ]);
    }

    public function getEdit(Client $client) {
// iets displayen binnen een view-> array
        return view('clients.edit', [
            'client'=>$client
        ]);
    }

    public function postSave(Request $r) {
        // dd('We zijn hier aangekomen');
        // dd($request->title);

        $validationrules=[
            'title' => 'required|in:mr,mw,juf,dr',
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'address' => 'required|max:100',
            'postal_code' => 'required|max:10',
            'city' => 'required|max:50',
            'province' => 'required|max:100'
        ];

        // controle inbouwen
        if($r->id){
            // klant updaten (id controleren)
            $validationrules['email'] = 'required|email|max:255|unique:clients,email,' . $r->id;

        } else {
            // nieuwe klant
            $validationrules['email'] = 'required|email|max:255|unique:clients,email';
        };

        $r->validate($validationrules);

        // dd('test succesvol');

        $data = [
            'title' => $r->title,
            'email' => $r->email,
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'address' => $r->address,
            'postal_code' => $r->postal_code,
            'city' => $r->city,
            'province' => $r->province,
        ];

        if ($r->id) {
            // klant updaten 1. client opvragen + id en dan updaten van data
            $client = Client::where('id', $r->id)->first();
            $client->update($data);
        } else {
            // in de clients tabel steken
            $client = Client::create($data);
        };


        // dd($client);

        return redirect()->route('clients');
    }
    public function destroy(Client $client){

        dd($client);
        //redirect()->route('clients');

        //return view('clients', [
            //'client' => $clientDelete,
        //]);
    }
}
