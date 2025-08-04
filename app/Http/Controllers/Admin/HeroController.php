<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Hero;
use App\Models\Services;
use Illuminate\Http\Request;
use File;
use Stichoza\GoogleTranslate\GoogleTranslate;

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
            'title'       => ['required', 'max:200'],
            'description' => ['required', 'max:3000'],
            'btn_text'    => ['required', 'max:500'],
            'image'       => ['nullable', 'image', 'max:3000'],
        ]);

        $hero = Hero::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($hero->image && file_exists(public_path($hero->image))) {
                unlink(public_path($hero->image));
            }
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $imagePath = '/uploads/' . $imageName;
        }

        $trTitle = $this->getTrValue($request->input('title'));
        $enTitle = GoogleTranslate::trans($trTitle, 'en', 'tr');
        $arTitle = GoogleTranslate::trans($trTitle, 'ar', 'tr');
        $trDesc = $this->getTrValue($request->input('description'));
        $enDesc = GoogleTranslate::trans($trDesc, 'en', 'tr');
        $arDesc = GoogleTranslate::trans($trDesc, 'ar', 'tr');
        $trBtn = $this->getTrValue($request->input('btn_text'));
        $enBtn = GoogleTranslate::trans($trBtn, 'en', 'tr');
        $arBtn = GoogleTranslate::trans($trBtn, 'ar', 'tr');

        $hero->update([
            'title'       => json_encode(['tr' => $trTitle, 'en' => $enTitle, 'ar' => $arTitle]),
            'description' => json_encode(['tr' => $trDesc, 'en' => $enDesc, 'ar' => $arDesc]),
            'btn_text'    => json_encode(['tr' => $trBtn, 'en' => $enBtn, 'ar' => $arBtn]),
            'image'       => $imagePath ?? $hero->image,
        ]);

        return redirect()->back()->with('success', 'Güncelleme başarılı.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function getTrValue($value) {
        if (is_array($value)) return $value['tr'] ?? '';
        if (is_string($value) && $this->isJson($value)) {
            $arr = json_decode($value, true);
            return $arr['tr'] ?? '';
        }
        return $value;
    }

    private function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
