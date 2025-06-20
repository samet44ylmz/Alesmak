<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use File;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $career = Career::first();
        return view('admin.career.index', compact('career'));
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
            'description' => ['required', 'max:3000'],
            'image'     => ['max:3000', 'image'],
            'btn_text' => ['required', 'max:500'],
        ]);

        $career = Career::find($id);

        if ($request->hasFile('image')) {
            if ($career && File::exists(public_path($career->image))) {
                File::delete(public_path($career->image));
            }
            $image = $request->file('image');
            $imageName = rand() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        Career::updateOrCreate(
            ['id' => $id],
            [
                'title'     => $request->title,
                'description' => $request->description,
                'btn_text'  => $request->btn_text,             
                'image'     => isset($imagePath) ? $imagePath : ($career ? $career->image : null),
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
