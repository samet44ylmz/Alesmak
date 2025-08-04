<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Ürünler ana sayfası
     */
    public function index()
    {
        return view('frontend.products.index');
    }

    /**
     * Bant Çekici sayfası
     */
    public function bantCekici()
    {
        return view('frontend.products.bant-cekici');
    }

    /**
     * Ekstruder sayfası
     */
    public function ekstruder()
    {
        return view('frontend.products.ekstruder');
    }

    /**
     * CO Ekstruder-Çizgi Makinası sayfası
     */
    public function coEkstruderCizgiMakinasi()
    {
        return view('frontend.products.co-ekstruder-cizgimakinasi');
    }

    /**
     * Vakum Tankı sayfası
     */
    public function vakumTanki()
    {
        return view('frontend.products.vakum-tanki');
    }

    /**
     * Sprey Tankı sayfası
     */
    public function spreyTanki()
    {
        return view('frontend.products.sprey-tanki');
    }

    /**
     * Çekici Palet sayfası
     */
    public function cekiciPalet()
    {
        return view('frontend.products.cekici-palet');
    }

    /**
     * Kesici sayfası
     */
    public function kesici()
    {
        return view('frontend.products.kesici');
    }

    /**
     * Devirme Sehpası sayfası
     */
    public function devirmeSehpasi()
    {
        return view('frontend.products.devirme-sehpasi');
    }

    /**
     * Sarıcı Makinası sayfası
     */
    public function sariciMakinasi()
    {
        return view('frontend.products.sarici-makinasi');
    }

    /**
     * Yazı Makinası sayfası
     */
    public function yaziMakinasi()
    {
        return view('frontend.products.yazi-makinasi');
    }

    /**
     * PVC Makinaları sayfası
     */
    public function pvcMakinalari()
    {
        return view('frontend.products.pvc-makinalari');
    }

    /**
     * Granül Makinaları sayfası
     */
    public function granulMakinalari()
    {
        return view('frontend.products.granul-makinalari');
    }

    /**
     * PVC Fitil Havuzu sayfası
     */
    public function pvcFitilHavuzu()
    {
        return view('frontend.products.pvc-fitil-havuzu');
    }

    /**
     * Yedek Ekipmanlar sayfası
     */
    public function yedekEkipmanlar()
    {
        return view('frontend.products.yedekekipmanlari');
    }

    // Boru Hatları Method'ları
    /**
     * PP Atık Su Boru Hattı sayfası
     */
    public function ppAtikSuBoruHatti()
    {
        return view('frontend.products.pp-atik-su-boru-hatti');
    }

    /**
     * PE Boru Hattı sayfası
     */
    public function peBoruHatti()
    {
        return view('frontend.products.pe-boru-hatti');
    }

    /**
     * PPRC-Cam Elyaf Kompozit Boru Hattı sayfası
     */
    public function pprcCamElyafKompozitBoruHatti()
    {
        return view('frontend.products.pprc-cam-elyaf-kompozit-boru-hatti');
    }

    // Kalıplar Method'ları
    /**
     * Kafa-PE-PP-RC Kalıpları sayfası
     */
    public function kafaPePpRcKaliplari()
    {
        return view('frontend.products.kafa-pe-pp-rc-kaliplari');
    }

    /**
     * PVC Kalıpları sayfası
     */
    public function pvcKaliplari()
    {
        return view('frontend.products.pvc-kaliplari');
    }

    /**
     * Yumuşak PVC Kalıpları sayfası
     */
    public function yumusakPvcKaliplari()
    {
        return view('frontend.products.yumusak-pvc-kaliplari');
    }

    /**
     * Kalipreler sayfası
     */
    public function kalipreler()
    {
        return view('frontend.products.kalipreler');
    }
}
