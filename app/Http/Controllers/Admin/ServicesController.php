<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Services;
use Illuminate\Http\Request;
use File;
use Stichoza\GoogleTranslate\GoogleTranslate;

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
            'title_1' => ['required', 'max:200'],
            'image_1' => ['nullable', 'image', 'max:3000'],
            'title_2' => ['required', 'max:200'],
            'image_2' => ['nullable', 'image', 'max:3000'],
            'title_3' => ['required', 'max:200'],
            'image_3' => ['nullable', 'image', 'max:3000'],
            'title_4' => ['required', 'max:200'],
            'image_4' => ['nullable', 'image', 'max:3000'],
        ]);

        $service = Services::findOrFail($id);

        $imagePaths = [
            'image_1' => $service->image_1,
            'image_2' => $service->image_2,
            'image_3' => $service->image_3,
            'image_4' => $service->image_4,
        ];

        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $imgField) {
            if ($request->hasFile($imgField)) {
                if ($service->$imgField && file_exists(public_path($service->$imgField))) {
                    unlink(public_path($service->$imgField));
                }
                $image = $request->file($imgField);
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $imagePaths[$imgField] = '/uploads/' . $imageName;
            }
        }

        $trTitle1 = $this->getTrValue($request->input('title_1'));
        $enTitle1 = GoogleTranslate::trans($trTitle1, 'en', 'tr');
        $arTitle1 = GoogleTranslate::trans($trTitle1, 'ar', 'tr');
        $trTitle2 = $this->getTrValue($request->input('title_2'));
        $enTitle2 = GoogleTranslate::trans($trTitle2, 'en', 'tr');
        $arTitle2 = GoogleTranslate::trans($trTitle2, 'ar', 'tr');
        $trTitle3 = $this->getTrValue($request->input('title_3'));
        $enTitle3 = GoogleTranslate::trans($trTitle3, 'en', 'tr');
        $arTitle3 = GoogleTranslate::trans($trTitle3, 'ar', 'tr');
        $trTitle4 = $this->getTrValue($request->input('title_4'));
        $enTitle4 = GoogleTranslate::trans($trTitle4, 'en', 'tr');
        $arTitle4 = GoogleTranslate::trans($trTitle4, 'ar', 'tr');

        $service->update([
            'title_1' => json_encode(['tr' => $trTitle1, 'en' => $enTitle1, 'ar' => $arTitle1]),
            'image_1' => $imagePaths['image_1'],
            'title_2' => json_encode(['tr' => $trTitle2, 'en' => $enTitle2, 'ar' => $arTitle2]),
            'image_2' => $imagePaths['image_2'],
            'title_3' => json_encode(['tr' => $trTitle3, 'en' => $enTitle3, 'ar' => $arTitle3]),
            'image_3' => $imagePaths['image_3'],
            'title_4' => json_encode(['tr' => $trTitle4, 'en' => $enTitle4, 'ar' => $arTitle4]),
            'image_4' => $imagePaths['image_4'],
        ]);

        return redirect()->back()->with('success', 'Güncelleme başarılı.');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
