<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'     => ['required', 'max:200'],
              'title_2'     => ['required', 'max:200'],
            'description' => ['required', 'max:3000'],
             'description_2' => ['required', 'max:3000'],
            'image'     => ['max:3000', 'image'],
            'btn_text' => ['required', 'max:500'],
        ]);

        $about = About::find($id); // düzeltildi

        if ($request->hasFile('image')) {
            if ($about && File::exists(public_path($about->image))) {
                File::delete(public_path($about->image));
            }
            $image = $request->file('image');
            $imageName = rand() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        About::updateOrCreate(
            ['id' => $id],
            [
                'title'     => $request->title,
                'title_2'     => $request->title_2,
                'description' => $request->description,
                'description_2' => $request->description_2,
                'btn_text'  => $request->btn_text,             
                'image'     => isset($imagePath) ? $imagePath : ($about ? $about->image : null),
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
