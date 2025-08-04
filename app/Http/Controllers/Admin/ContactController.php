<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Quote;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::find(1);
        $messages = Contact::whereNotNull('message')->where('id', '!=', 1)->orderByDesc('created_at')->get();
        $quotes = Quote::orderByDesc('created_at')->get();
        return view('admin.contact.index', compact('contact', 'messages', 'quotes'));
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
        // Debug için log ekleyelim
        Log::info('Contact form submitted', $request->all());
        
        $request->validate([
            'name'    => 'required|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|max:20',
            'message' => 'required|max:1000',
        ]);

        try {
            $contact = Contact::create([
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'message' => $request->message,
            ]);
            
            Log::info('Contact message saved successfully', ['id' => $contact->id]);
            
            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
        } catch (\Exception $e) {
            Log::error('Contact message save failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Mesaj gönderilirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    /**
     * Quote form için store method
     */
    public function storeQuote(Request $request)
    {
        $request->validate([
            'name'         => 'required|max:100',
            'company_name' => 'nullable|max:100',
            'phone'        => 'required|max:20',
            'email'        => 'required|email',
            'service'      => 'nullable|max:100',
            'message'      => 'nullable|max:1000',
        ]);

        Quote::create([
            'name'         => $request->name,
            'company_name' => $request->company_name,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'service'      => $request->service,
            'message'      => $request->message,
        ]);

        return redirect()->back()->with('success', 'Teklif talebiniz başarıyla gönderildi.');
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
     * Quote silme
     */
    public function destroyQuote($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();
        return redirect()->back()->with('success', 'Teklif talebi silindi.');
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
            'title'             => ['required', 'max:200'],
            'description'       => ['required', 'max:500'],
            'adres_title'       => ['required', 'max:200'],
            'adres_description' => ['required', 'max:500'],
            'phone_title'       => ['required', 'max:200'],
            'phone_description' => ['required', 'max:500'],
            'hour_title'        => ['required', 'max:200'],
            'hour_description'  => ['required', 'max:500'],
        ]);

        $contact = Contact::findOrFail(1);

        // Basit JSON formatında kaydet - şimdilik sadece Türkçe
        $contact->title = json_encode([
            'tr' => $request->input('title'),
            'en' => $request->input('title'),
            'ar' => $request->input('title')
        ]);
        
        $contact->description = json_encode([
            'tr' => $request->input('description'),
            'en' => $request->input('description'),
            'ar' => $request->input('description')
        ]);
        
        $contact->adres_title = json_encode([
            'tr' => $request->input('adres_title'),
            'en' => $request->input('adres_title'),
            'ar' => $request->input('adres_title')
        ]);
        
        $contact->adres_description = json_encode([
            'tr' => $request->input('adres_description'),
            'en' => $request->input('adres_description'),
            'ar' => $request->input('adres_description')
        ]);
        
        $contact->phone_title = json_encode([
            'tr' => $request->input('phone_title'),
            'en' => $request->input('phone_title'),
            'ar' => $request->input('phone_title')
        ]);
        
        $contact->phone_description = json_encode([
            'tr' => $request->input('phone_description'),
            'en' => $request->input('phone_description'),
            'ar' => $request->input('phone_description')
        ]);
        
        $contact->hour_title = json_encode([
            'tr' => $request->input('hour_title'),
            'en' => $request->input('hour_title'),
            'ar' => $request->input('hour_title')
        ]);
        
        $contact->hour_description = json_encode([
            'tr' => $request->input('hour_description'),
            'en' => $request->input('hour_description'),
            'ar' => $request->input('hour_description')
        ]);
        
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

