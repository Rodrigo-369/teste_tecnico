<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('register-contact');
    }

    public function store(Request $request)
    {
        Contacts::create($request->all());
    }

    public function queryContact()
    {
        $cont = Contacts::get();

        return view('query-contact');
    }

    public function show(Request $req){
        //dd("pesquisando por {$req->busca}");

        $cep = Contacts::where('Cont_cep', "=", "$req->busca")->get();

        return view('query-contact', compact('cep'));
    }
}
