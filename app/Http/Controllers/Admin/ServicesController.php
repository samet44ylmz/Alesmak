<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use File;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::first();

        return view('admin.services.index', compact('services'));
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
         $request->validate([
            'title_1'       => ['required', 'max:200'],
            'image_1'     => ['nullable', 'max:3000', 'image'],
             'title_2'       => ['required', 'max:200'],
            'image_2'     => ['nullable', 'max:3000', 'image'],
            'title_3'       => ['required', 'max:200'],
            'image_3'     => ['nullable', 'max:3000', 'image'],
             'title_4'       => ['required', 'max:200'],
            'image_4'     => ['nullable', 'max:3000', 'image'],
        ]);

        $imagePaths = [];
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $imgField) {
            $imagePaths[$imgField] = null;
            if ($request->hasFile($imgField)) {
                $image = $request->file($imgField);
                $imageName = rand() . $image->getClientOriginalName();
                $image->move(public_path('/uploads'), $imageName);
                $imagePaths[$imgField] = '/uploads/' . $imageName;
            }
        }

         Services::Create(
            
            [
                'title_1'       => $request->title_1,               
                'image_1'     => $imagePaths['image_1'],
                'title_2'       => $request->title_2,               
                'image_2'     => $imagePaths['image_2'],
                'title_3'       => $request->title_3,               
                'image_3'     => $imagePaths['image_3'],
                'title_4'       => $request->title_4,               
                'image_4'     => $imagePaths['image_4'],
            ]
        );
       
        return redirect()->back()->with('success', 'About kaydı başarıyla eklendi.');
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
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'title_1'       => ['required', 'max:200'],
            'image_1'     => ['nullable', 'max:3000', 'image'],
             'title_2'       => ['required', 'max:200'],
            'image_2'     => ['nullable', 'max:3000', 'image'],
            'title_3'       => ['required', 'max:200'],
            'image_3'     => ['nullable', 'max:3000', 'image'],
             'title_4'       => ['required', 'max:200'],
            'image_4'     => ['nullable', 'max:3000', 'image'],
        ]);

        $services = Services::find($id);
        $imagePaths = [
            'image_1' => $services ? $services->image_1 : null,
            'image_2' => $services ? $services->image_2 : null,
            'image_3' => $services ? $services->image_3 : null,
            'image_4' => $services ? $services->image_4 : null,
        ];

        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $imgField) {
            if ($request->hasFile($imgField)) {
                if ($services && !empty($services->$imgField) && File::exists(public_path($services->$imgField))) {
                    File::delete(public_path($services->$imgField));
                }
                $image = $request->file($imgField);
                $imageName = rand() . $image->getClientOriginalName();
                $image->move(public_path('/uploads'), $imageName);
                $imagePaths[$imgField] = '/uploads/' . $imageName;
            }
        }

        Services::updateOrCreate(
            ['id' => $id],
            [
                'title_1'       => $request->title_1,               
                'image_1'     => $imagePaths['image_1'],
                'title_2'       => $request->title_2,               
                'image_2'     => $imagePaths['image_2'],
                'title_3'       => $request->title_3,               
                'image_3'     => $imagePaths['image_3'],
                'title_4'       => $request->title_4,               
                'image_4'     => $imagePaths['image_4'],
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
