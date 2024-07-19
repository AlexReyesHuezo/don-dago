<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();

        // return view('characters.index', ['characters' => $characters]);
        // The above line can be written as below using compact() function
        // compact() function creates an array from the variable names passed to it, in this way:
        // compact('characters') is equivalent to ['characters' => $characters]
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Character::create($request->all());
        // redirect to the characters index page
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $character = Character::find($id);
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
