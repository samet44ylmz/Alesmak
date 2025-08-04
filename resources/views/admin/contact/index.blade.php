@extends('admin.layouts.layout')

@section('content')
<div class="container py-4">
    <div class="mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-link p-0" style="font-size: 1.2rem;">
            <i class="fa fa-arrow-left"></i>
        </a>
        <span class="h5 align-middle ml-2">İletişim Ayarları</span>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Başarılı!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hata!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hata!</strong> Lütfen aşağıdaki hataları düzeltin:
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <h6 class="text-primary mb-4" style="font-weight: 600;">İletişim Bilgilerini Güncelle</h6>
         <form action="{{ route('admin.contact.update', 1) }}" method="POST">

                @csrf
                @method('PUT')
                <!-- Genel Bilgi -->
                <div class="mb-4 p-3 border rounded bg-white">
                    <div class="mb-3" style="font-weight: 600; font-size: 1.1rem;">Genel Bilgi</div>
                    <div class="form-group mb-3">
                        <label for="general_title" style="font-weight: 500;">Genel Başlık</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $contact ? $contact->getTranslation('title', 'tr') : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="general_description" style="font-weight: 500;">Genel Açıklama</label>
                        <textarea class="form-control" id="description" name="description" rows="2">{{ $contact ? $contact->getTranslation('description', 'tr') : '' }}</textarea>
                    </div>
                </div>
                <!-- Adres Bilgisi -->
                <div class="mb-4 p-3 border rounded bg-white">
                    <div class="mb-3" style="font-weight: 600; font-size: 1.1rem;">Adres Bilgisi</div>
                    <div class="form-group mb-3">
                        <label for="address_title" style="font-weight: 500;">Adres Başlığı</label>
                        <input type="text" class="form-control"  name="adres_title" value="{{ $contact ? $contact->getTranslation('adres_title', 'tr') : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="address_description" style="font-weight: 500;">Adres Açıklaması</label>
                        <textarea class="form-control" name="adres_description" rows="2">{{ $contact ? $contact->getTranslation('adres_description', 'tr') : '' }}</textarea>
                    </div>
                </div>
                <!-- İletişim Numarası -->
                <div class="mb-4 p-3 border rounded bg-white">
                    <div class="mb-3" style="font-weight: 600; font-size: 1.1rem;">İletişim Numarası</div>
                    <div class="form-group mb-3">
                        <label for="phone_title" style="font-weight: 500;">Numara Başlığı</label>
                        <input type="text" class="form-control"  name="phone_title" value="{{ $contact ? $contact->getTranslation('phone_title', 'tr') : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="phone_description" style="font-weight: 500;">Numara Açıklaması</label>
                        <textarea class="form-control"  name="phone_description" rows="2">{{ $contact ? $contact->getTranslation('phone_description', 'tr') : '' }}</textarea>
                    </div>
                </div>
                <!-- Açılış Saatleri -->
                <div class="mb-4 p-3 border rounded bg-white">
                    <div class="mb-3" style="font-weight: 600; font-size: 1.1rem;">Açılış Saatleri</div>
                    <div class="form-group mb-3">
                        <label for="opening_title" style="font-weight: 500;">Açılış Saatleri Başlığı</label>
                        <input type="text" class="form-control" name="hour_title" value="{{ $contact ? $contact->getTranslation('hour_title', 'tr') : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="opening_description" style="font-weight: 500;">Açılış Saatleri Açıklaması</label>
                        <textarea class="form-control"  name="hour_description" rows="2">{{ $contact ? $contact->getTranslation('hour_description', 'tr') : '' }}</textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4" style="background: #6C63FF; border: none;">Güncelle</button>
                </div>
            </form>
        </div>
    </div>
</div>


<section class="section mt-5">
    <div class="section-header">
      <h4>Bize Ulaşın Mesajları</h4>
      <form action="{{ route('admin.contact.destroyAll') }}" method="POST" style="display:inline; margin-left: auto;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tüm mesajları silmek istediğinize emin misiniz?')">Tümünü Sil</button>
      </form>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Ad Soyad</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Service</th>
                <th>Message</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
              @foreach($messages as $message)
                <tr>
                  <td>{{ $message->name }}</td>
                  <td>{{ $message->email }}</td>
                  <td>{{ $message->phone }}</td>
                  <td>-</td>
                  <td>{{ $message->message }}</td>
                  <td>
                    <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Teklif Talepleri Bölümü -->
    <div class="card mt-4">
      <div class="card-header">
        <h6 class="text-primary mb-0" style="font-weight: 600;">Teklif Talepleri</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Ad Soyad</th>
                <th>Şirket</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Hizmet</th>
                <th>Mesaj</th>
                <th>Tarih</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
              @foreach($quotes as $quote)
                <tr>
                  <td>{{ $quote->name }}</td>
                  <td>{{ $quote->company_name ?? '-' }}</td>
                  <td>{{ $quote->email }}</td>
                  <td>{{ $quote->phone }}</td>
                  <td>{{ $quote->service ?? '-' }}</td>
                  <td>{{ $quote->message ?? '-' }}</td>
                  <td>{{ $quote->created_at->format('d.m.Y H:i') }}</td>
                  <td>
                    <form action="{{ route('admin.quote.destroy', $quote->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
