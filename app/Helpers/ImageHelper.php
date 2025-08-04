<?php

namespace App\Helpers;

class ImageHelper
{
    public static function getImageUrl($path)
    {
        // Türkçe karakterleri ve boşlukları URL encode et
        $encodedPath = urlencode($path);
        
        // URL encode edilmiş yolu döndür
        return asset('images/' . $encodedPath);
    }
    
    public static function getEncodedImagePath($path)
    {
        // Sadece dosya yolunu encode et, asset() fonksiyonunu kullanma
        return urlencode($path);
    }
} 