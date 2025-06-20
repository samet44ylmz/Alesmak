<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::find(1); // id'yi 1'e sabitledik
        $messages = Contact::whereNotNull('message')->where('id', '!=', 1)->orderByDesc('created_at')->get();
        return view('admin.contact.index', compact('contact', 'messages'));
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
            'name'    => 'required|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|max:20',
            'message' => 'required|max:1000',
        ]);

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
    }

    /**
     * Toplu mesaj silme.
     */
    public function destroyAll()
    {
        Contact::whereNotNull('message')->delete();
        return redirect()->back()->with('success', 'Tüm mesajlar başarıyla silindi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('success', 'Mesaj silindi.');
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
        // id parametresini kullanma, doğrudan 1 olarak al
        $request->validate([
            'title'             => ['required', 'max:200'],
            'description'       => ['required', 'max:500'],
            'adres_title'       => ['required', 'max:200'],
            'adres_description' => ['required', 'max:500'],
            'phone_title'       => ['required', 'max:200'],
            'phone_description' => ['required', 'max:500'],
            'hour_title'        => ['required', 'max:200'],
            'hour_description'  => ['required', 'max:500'],
            'name'              => ['nullable', 'max:200'],
            'email'             => ['nullable', 'email', 'max:200'],
            'phone'             => ['nullable', 'max:200'],
            'message'           => ['nullable', 'max:500'],
        ]);

        $contact = Contact::findOrFail(1); // id'yi 1'e sabitledik

        $contact->title             = $request->input('title');
        $contact->description       = $request->input('description');
        $contact->adres_title       = $request->input('adres_title');
        $contact->adres_description = $request->input('adres_description');
        $contact->phone_title       = $request->input('phone_title');
        $contact->phone_description = $request->input('phone_description');
        $contact->hour_title        = $request->input('hour_title');
        $contact->hour_description  = $request->input('hour_description');
        $contact->save();

        return redirect()->back()->with('success', 'İletişim ayarları güncellendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}

