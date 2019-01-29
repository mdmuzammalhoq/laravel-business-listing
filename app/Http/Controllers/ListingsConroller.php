<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;


class ListingsConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
        ]); 

        //Create Listings

        $listings = new Listing;

        $listings->name = $request->input('name');
        $listings->email = $request->input('email');  
        $listings->phone = $request->input('phone'); 
        $listings->address = $request->input('address');  
        $listings->website = $request->input('website');  
        $listings->bio = $request->input('bio');
        $listings->user_id = auth()->user()->id;

        $listings->save();

        return redirect('/dashboard')->with('success', 'Listing Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editlisting')->with('listing', $listing);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
        ]); 

        //Create Listings

        $listings = Listing::find($id);

        $listings->name = $request->input('name');
        $listings->email = $request->input('email');  
        $listings->phone = $request->input('phone'); 
        $listings->address = $request->input('address');  
        $listings->website = $request->input('website');  
        $listings->bio = $request->input('bio');
        $listings->user_id = auth()->user()->id;

        $listings->save();

        return redirect('/dashboard')->with('success', 'Listing Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
