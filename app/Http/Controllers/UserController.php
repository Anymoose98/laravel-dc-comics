<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dei dati del form
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
        ]);

        // mando i dati
        $user = new Comic();
        $user->title = $request->title;
        $user->description = $request->description;
        $user->thumb = $request->thumb;
        $user->price = $request->price;
        $user->series = $request->series;
        $user->sale_date = $request->sale_date;
        $user->type = $request->type;
        $user->save();

        return redirect()->route('home');
    }
}