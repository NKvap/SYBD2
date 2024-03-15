<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('films', [
           'films' => Film::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = new Film();
        $categories = Category::all();
        return view('film_create',[
           'categories' => $categories, 'film' => $film
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_film' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $film= new Film;
        $film->name_film = $request->name_film;
        $film->category_id = $request->category_id;
        $film->save();
        return redirect()->route('film.index')->with(['Success' => 'Фильм создан']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('film', [
            'film' => Film::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::find($id);

        if (!$film) {
            // Обработка случая, когда фильм не найден
            return redirect()->route('home')->with('error', 'Фильм не найден');
        }

        return view('film_edit', ['film' => $film]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name_film' => 'required|string',
        ]);

        $film = Film::findOrFail($id);
        $film->update([
            'name_film' => $validatedData['name_film']
        ]);

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Film::destroy($id);
        return redirect('/film');
    }
}
