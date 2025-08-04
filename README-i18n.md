# Laravel Çoklu Dil (i18n) Sistemi: Statik ve Dinamik İçerik İçin Tam Kapsamlı Rehber

Bu rehberde, Laravel projesinde hem **statik** (sabit metinler) hem de **dinamik** (veritabanı içerikleri) için Türkçe, İngilizce ve Arapça dillerini destekleyen, otomatik çeviri ve kolay yönetim sağlayan bir çoklu dil sistemi kurulumunu adım adım bulacaksınız.

---

## 1. Statik İçeriklerde Çoklu Dil Desteği

### 1.1. Dil Dosyalarını Oluşturma

`lang/` klasörü altında her dil için bir klasör ve ilgili dosyaları oluşturun:

```
lang/
  ├── tr/
  │   └── app.php
  ├── en/
  │   └── app.php
  └── ar/
      └── app.php
```

**Örnek: `lang/tr/app.php`**
```php
return [
    'welcome' => 'Hoşgeldiniz',
    'contact' => 'İletişim',
];
```

**Örnek: `lang/en/app.php`**
```php
return [
    'welcome' => 'Welcome',
    'contact' => 'Contact',
];
```

### 1.2. Blade'de Kullanımı

```blade
<h1>{{ __('app.welcome') }}</h1>
<a href="#">{{ __('app.contact') }}</a>
```

---

## 2. Dinamik İçeriklerde Çoklu Dil (Veritabanı)

### 2.1. Veritabanı Kolonlarını JSON'a Çevirme

İçeriği çoklu dilde saklamak için ilgili kolonları `json` tipine çevirin.

**Migration Örneği:**
```php
$table->json('title')->nullable();
$table->json('description')->nullable();
```

**Mevcut tabloyu değiştirmek için:**
```sql
ALTER TABLE abouts MODIFY title JSON NULL;
ALTER TABLE abouts MODIFY description JSON NULL;
```

### 2.2. Modelde getTranslation Fonksiyonu

Her modelde, JSON içeriği locale'a göre döndüren bir fonksiyon ekleyin:

```php
public function getTranslation($field, $locale = null)
{
    $locale = $locale ?: app()->getLocale();
    $value = $this->{$field};
    if (is_string($value) && $this->isJson($value)) {
        $arr = json_decode($value, true);
        return $arr[$locale] ?? ($arr['tr'] ?? reset($arr));
    }
    return $value;
}

private function isJson($string)
{
    json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE);
}
```

### 2.3. Blade'de Kullanımı

```blade
<h2>{{ $about->getTranslation('title') }}</h2>
<p>{{ $about->getTranslation('description') }}</p>
```

---

## 3. Admin Panelde Otomatik Çeviri

### 3.1. Google Translate Paketini Kurun

```bash
composer require stichoza/google-translate-php
```

### 3.2. Controller'da Otomatik Çeviri

Admin panelde sadece Türkçe girildiğinde, diğer diller otomatik çevrilsin:

```php
use Stichoza\GoogleTranslate\GoogleTranslate;

$trTitle = $request->input('title');
$enTitle = GoogleTranslate::trans($trTitle, 'en', 'tr');
$arTitle = GoogleTranslate::trans($trTitle, 'ar', 'tr');

$model->title = json_encode([
    'tr' => $trTitle,
    'en' => $enTitle,
    'ar' => $arTitle,
]);
```

---

## 4. Dil Değiştirme (Locale Switch)

### 4.1. Route ve Middleware

`routes/web.php`:
```php
Route::get('language/{locale}', function($locale){
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');
```

`app/Http/Middleware/SetLocale.php`:
```php
public function handle($request, Closure $next)
{
    app()->setLocale(session('locale', config('app.locale')));
    return $next($request);
}
```
Ve bu middleware'i `web` grubuna ekleyin.

### 4.2. Blade'de Dil Seçici

```blade
<li><a href="{{ route('locale', 'tr') }}">Türkçe</a></li>
<li><a href="{{ route('locale', 'en') }}">English</a></li>
<li><a href="{{ route('locale', 'ar') }}">العربية</a></li>
```

---

## 5. Örnek: İletişim Sayfası

**Model:**
```php
// app/Models/Contact.php
public function getTranslation($field, $locale = null) { ... }
```

**Blade:**
```blade
<input type="text" placeholder="{{ __('contact.name') }}">
<strong>{{ $contact->getTranslation('phone_title') }}</strong>
```

---

## 6. Sık Karşılaşılan Sorunlar

- **JSON ham veri görünüyor:** Blade'de doğrudan `$model->field` yerine `$model->getTranslation('field')` kullanın.
- **Çeviri eksikse:** JSON'da ilgili dil yoksa Türkçe veya ilk bulunan dil gösterilir.
- **Statik metinler çevrilmiyor:** `__('...')` fonksiyonunu kullanmayı unutmayın.

---

## 7. Sonuç

Bu sistem ile:
- Tüm statik ve dinamik içerikler çoklu dilde yönetilebilir.
- Admin panelde tek dil girişiyle otomatik çeviri sağlanır.
- Frontend'de seçilen dile göre içerik otomatik değişir.

---

## Ekstra: Daha Temiz Kod İçin

- Her modelde aynı `getTranslation` fonksiyonunu kullanmak yerine bir trait yazabilirsiniz.
- Çeviri anahtarlarını ve JSON yapısını standartlaştırmak için helper fonksiyonlar ekleyebilirsiniz.

---

**Sorunsuz, sürdürülebilir ve geliştirilebilir bir çoklu dil sistemi için yukarıdaki adımları uygulayabilirsiniz!**

---

Başarılar! 🎉  
Her türlü sorunda veya geliştirme önerisinde bana ulaşabilirsin. 