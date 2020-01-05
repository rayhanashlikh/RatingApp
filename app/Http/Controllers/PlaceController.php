<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use Ramsey\Uuid\Uuid;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = Place::get();
        return view('admin.places.index', compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'place_name' => 'required|string',
            'location' => 'required|string',
            'date_opened' => 'required|date',
            'description' => 'required|string',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $places = new Place();

        if ($request->hasFile('picture')){
            $image = $request->file('picture');
            $uuid4 = Uuid::uuid4();
            $name = $uuid4->toString().'.'.$image->getClientOriginalExtension();
            $destinationPath = storage_path('/app/public/img');
            $imagePath = $destinationPath. "/". $name;
            $image->move($destinationPath, $name);
            $places->picture = $name;
        }

        $places->place_name = $request->place_name;
        $places->location = $request->location;
        $places->date_opened = $request->date_opened;
        $places->description = $request->description;
        $places->save();

        return redirect('admin/places')->with('status', 'Succesfully added');
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
        $places = Place::find($id);
        return view('admin.places.edit', compact('places'));
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
        $this->validate($request,[
            'place_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date_opened' => 'required|date',
            'description' => 'required|string|max:255',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp'
        ]);
        
        $places = Place::find($id);

        if ($request->hasFile('picture')){
            $image = $request->file('picture');
            $uuid4 = Uuid::uuid4();
            $name = $uuid4->toString().'.'.$image->getClientOriginalExtension();
            $destinationPath = storage_path('/app/public/img');
            $imagePath = $destinationPath. "/". $name;
            $image->move($destinationPath, $name);
            $places->picture = $name;
        } else {
            $places->picture = $places->picture;
        }

        $places->place_name = $request->place_name;
        $places->location = $request->location;
        $places->date_opened = $request->date_opened;
        $places->description = $request->description;
        $places->save();
        return redirect('/admin/places')->with('status', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $places = Place::find($id);
        $places->delete();
        return redirect('/admin/places')->with('status', 'successfully deleted');
    }
}
