<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Hero;
use App\Models\Services;
use Illuminate\Http\Request;
use File;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $hero = Hero::first();
        $services = Services::first();
         $career = Career::first();
       
        return view('admin.edit', compact('hero', 'services', 'career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'     => ['required', 'max:200'],
            'description' => ['required', 'max:3000'],
            'image'     => ['max:3000', 'image'],
            'btn_text' => ['required', 'max:500'],
        ]);

        $hero = Hero::find($id); // düzeltildi

        if ($request->hasFile('image')) {
            if ($hero && File::exists(public_path($hero->image))) {
                File::delete(public_path($hero->image));
            }
            $image = $request->file('image');
            $imageName = rand() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        Hero::updateOrCreate(
            ['id' => $id],
            [
                'title'     => $request->title,
                'description' => $request->description,
                'btn_text'  => $request->btn_text,             
                'image'     => isset($imagePath) ? $imagePath : ($hero ? $hero->image : null),
            ]
        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
