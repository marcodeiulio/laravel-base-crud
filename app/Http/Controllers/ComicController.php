<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['bail', 'required', 'string', 'min:1'],
            'thumb' => ['bail', 'required', 'url'],
            'price' => ['bail', 'required', 'numeric'],
            'series' => 'bail|required|string',
            'sale_date' => 'bail|required|date',
            'type' => 'bail|required|string'
        ], [
            'required' => 'The  attribute :attribute is required.',
            'min:1' => 'The :attribute string must be at least 1 character long.',
            'string' => 'The attribute :attribute must be a string',
            'numeric' => 'The attribute :attribute must be numeric'
        ]);

        //# Either this
        // $data = $request->all();
        // $comic = new Comic();
        // $comic->fill($data);
        // $comic->save();

        //# Or this
        $comic = Comic::create($request->all());

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['bail', 'required', 'string', 'min:1'],
            'thumb' => ['bail', 'required', 'url'],
            'price' => ['bail', 'required', 'numeric'],
            'series' => 'bail|required|string',
            'sale_date' => 'bail|required|date',
            'type' => 'bail|required|string'
        ], [
            'required' => 'The  attribute :attribute is required.',
            'min:1' => 'The :attribute string must be at least 1 character long.',
            'string' => 'The attribute :attribute must be a string',
            'numeric' => 'The attribute :attribute must be numeric'
        ]);

        //# either this
        // $comic->fill($request->all());
        // $comic->save();

        //# or this
        $comic->update($request->all());

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
