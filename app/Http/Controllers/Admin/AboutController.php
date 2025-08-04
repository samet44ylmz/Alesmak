<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use File;
use Stichoza\GoogleTranslate\GoogleTranslate;

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
            'title'       => ['required', 'max:200'],
            'title_2'     => ['required', 'max:200'],
            'description' => ['required', 'max:3000'],
            'description_2' => ['required', 'max:3000'],
            'btn_text'    => ['required', 'max:500'],
            'image'       => ['nullable', 'image', 'max:3000'],
        ]);

        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($about->image && file_exists(public_path($about->image))) {
                unlink(public_path($about->image));
            }
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $imagePath = '/uploads/' . $imageName;
        }

        $trTitle = $this->getTrValue($request->input('title'));
        $enTitle = GoogleTranslate::trans($trTitle, 'en', 'tr');
        $arTitle = GoogleTranslate::trans($trTitle, 'ar', 'tr');
        $trTitle2 = $this->getTrValue($request->input('title_2'));
        $enTitle2 = GoogleTranslate::trans($trTitle2, 'en', 'tr');
        $arTitle2 = GoogleTranslate::trans($trTitle2, 'ar', 'tr');
        $trDesc = $this->getTrValue($request->input('description'));
        $enDesc = GoogleTranslate::trans($trDesc, 'en', 'tr');
        $arDesc = GoogleTranslate::trans($trDesc, 'ar', 'tr');
        $trDesc2 = $this->getTrValue($request->input('description_2'));
        $enDesc2 = GoogleTranslate::trans($trDesc2, 'en', 'tr');
        $arDesc2 = GoogleTranslate::trans($trDesc2, 'ar', 'tr');
        $trBtn = $this->getTrValue($request->input('btn_text'));
        $enBtn = GoogleTranslate::trans($trBtn, 'en', 'tr');
        $arBtn = GoogleTranslate::trans($trBtn, 'ar', 'tr');

        $about->update([
            'title'       => json_encode(['tr' => $trTitle, 'en' => $enTitle, 'ar' => $arTitle]),
            'title_2'     => json_encode(['tr' => $trTitle2, 'en' => $enTitle2, 'ar' => $arTitle2]),
            'description' => json_encode(['tr' => $trDesc, 'en' => $enDesc, 'ar' => $arDesc]),
            'description_2' => json_encode(['tr' => $trDesc2, 'en' => $enDesc2, 'ar' => $arDesc2]),
            'btn_text'    => json_encode(['tr' => $trBtn, 'en' => $enBtn, 'ar' => $arBtn]),
            'image'       => $imagePath ?? $about->image,
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
