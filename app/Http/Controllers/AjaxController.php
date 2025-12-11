<?php

namespace App\Http\Controllers;
use App\Models\Ajax;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
    'name'     => 'required|string|max:255',
    'author'   => 'required|string',
    'quantity' => 'required|integer|min:1',
        ],

        [
            'name.required'=>'Book name is required',   
            'name.unique'=>'Book name already exists',
            'author.required'=>'Author name is required',
            'quantity.required'=>'Quantity name is required',

        ]
    
    );

       $books= Ajax::create([

           'name'=> $request->name,
           'author'=> $request->author,
           'quantity'=> $request->quantity,
        //    $books->save()


        ]);

        return response()->json([
        'status'=>'success']);

      

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
