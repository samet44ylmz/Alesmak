<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::updateOrCreate(['id' => 1], [
            'title' => json_encode([
                'tr' => 'İletişim',
                'en' => 'Contact',
                'ar' => 'اتصال'
            ]),
            'description' => json_encode([
                'tr' => 'Bizimle iletişime geçin ve sorularınızı sorun.',
                'en' => 'Contact us and ask your questions.',
                'ar' => 'اتصل بنا واسأل أسئلتك.'
            ]),
            'adres_title' => json_encode([
                'tr' => 'Adres',
                'en' => 'Address',
                'ar' => 'عنوان'
            ]),
            'adres_description' => json_encode([
                'tr' => 'Güldallar 11. Sanayi Sitesi, İstanbul, Türkiye',
                'en' => 'Güldallar 11. Industrial Site, Istanbul, Turkey',
                'ar' => 'غولدالار 11. الموقع الصناعي، اسطنبول، تركيا'
            ]),
            'phone_title' => json_encode([
                'tr' => 'Telefon',
                'en' => 'Phone',
                'ar' => 'هاتف'
            ]),
            'phone_description' => json_encode([
                'tr' => '+90 530 470 26 53',
                'en' => '+90 530 470 26 53',
                'ar' => '+90 530 470 26 53'
            ]),
            'hour_title' => json_encode([
                'tr' => 'Çalışma Saatleri',
                'en' => 'Working Hours',
                'ar' => 'ساعات العمل'
            ]),
            'hour_description' => json_encode([
                'tr' => 'Pazartesi - Cuma: 08:00 - 18:00',
                'en' => 'Monday - Friday: 08:00 - 18:00',
                'ar' => 'الاثنين - الجمعة: 08:00 - 18:00'
            ])
        ]);
    }
}
