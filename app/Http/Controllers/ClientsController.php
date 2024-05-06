<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('prenom', 'asc')->paginate(3);
        //$clients = Client:orderBy
        //$clients = Client::all();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation de données
        $validatedData = $request->validate([ 
            'nom' => 'required|string|max:255', 
            'prenom' => 'required|string|max:255', 
            'adresse' => 'required|string|max:255', 
            'datenaiss' => 'required|date', 
            'tel' => 'required|string|max:20', 
            ]);
            //création d' un nouvel clients
            $client = new Client(); 
            $client->nom = $validatedData['nom']; 
            $client->prenom = $validatedData['prenom']; 
            $client->adresse = $validatedData['adresse']; 
            $client->datenaiss = $validatedData['datenaiss']; 
            $client->tel = $validatedData['tel']; 
            $client->save(); // Enregistrement du post dans la base de données
            return redirect('/clients')->with('success','Client ajouté');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'datenaiss' => 'required',
            'tel' => 'required',
    ]);
    $client = Client::findOrFail($id);
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->adresse = $request->get('adresse');
        $client->datenaiss = $request->get('datenaiss');
        $client->tel = $request->get('tel');

        $client->save();
        return redirect()->route('clients.index')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::findOrFail($id);
        $client->delete();
    

    
        return redirect()->route('clients.index')->with('success', 'Deleted successfully');



    }
}
