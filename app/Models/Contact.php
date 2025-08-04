<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title',
        'description',
        'adres_title',
        'adres_description',
        'phone_title',
        'phone_description',
        'hour_title',
        'hour_description',
        'name',
        'email',
        'phone',
        'message',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'adres_title' => 'array',
        'adres_description' => 'array',
        'phone_title' => 'array',
        'phone_description' => 'array',
        'hour_title' => 'array',
        'hour_description' => 'array',
    ];

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $value = $this->{$field};
        
        if (is_array($value)) {
            return $value[$locale] ?? $value[array_key_first($value)] ?? '';
        }
        
        if (is_string($value) && $this->isJson($value)) {
            $arr = json_decode($value, true);
            return $arr[$locale] ?? $arr[array_key_first($arr)] ?? '';
        }
        
        return $value;
    }

    protected function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
