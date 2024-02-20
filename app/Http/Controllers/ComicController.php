<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function show($id)
    {
        // findOrFail se non trova il file dà errore invece che null
        $comic = Comic::findOrFail($id); 
        return view('dettaglio_fumetto', compact('comic'));
    }

    public function create()
    {
        $comics = Comic::all();
        return view('create_comic', compact('comics'));
    }
}
