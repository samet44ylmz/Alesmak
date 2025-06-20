@extends('admin.layouts.layout')
@section('content')

<div class="section">
    <div class="section-header">
        <h1>Anasayfa Kısmı</h1>
    </div>
    <div class="section-body">
        <div class="table-responsive mt-4">
            <h5 class="mb-3">Hero Kısmı</h5>
            <table class="table table-bordered" style="border: 1px solid #343a40;">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Buton Metni</th>
                        <th>Görsel</th>
                        <th style="width: 120px;">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $hero->title ?? '' }}</td>
                        <td>{{ $hero->description ?? '' }}</td>
                        <td>{{ $hero->btn_text ?? '' }}</td>
                        <td>
                            @if(!empty($hero->image))
                                <img src="{{ asset($hero->image) }}" alt="Hero Görsel" style="max-width:120px;max-height:80px;">
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.hero.index') }}" class="btn btn-primary btn-sm">Düzenle</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="section">
    <div class="section-body">
        <div class="table-responsive mt-4">
            <h5 class="mb-3">Services Kısmı</h5>
            <table class="table table-bordered" style="border: 1px solid #343a40;">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Görsel</th>
                        <th style="width: 120px;">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $services->title_1 ?? '' }}</td>
                        <td>
                            @if(!empty($services->image_1))
                                <img src="{{ asset($services->image_1) }}" alt="Servis 1 Görsel" style="max-width:120px;max-height:80px;">
                            @endif
                        </td>
                        <td class="text-end" rowspan="4">
                            <a href="{{ route('admin.services.index') }}" class="btn btn-primary btn-sm">Düzenle</a>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $services->title_2 ?? '' }}</td>
                        <td>
                            @if(!empty($services->image_2))
                                <img src="{{ asset($services->image_2) }}" alt="Servis 2 Görsel" style="max-width:120px;max-height:80px;">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $services->title_3 ?? '' }}</td>
                        <td>
                            @if(!empty($services->image_3))
                                <img src="{{ asset($services->image_3) }}" alt="Servis 3 Görsel" style="max-width:120px;max-height:80px;">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $services->title_4 ?? '' }}</td>
                        <td>
                            @if(!empty($services->image_4))
                                <img src="{{ asset($services->image_4) }}" alt="Servis 4 Görsel" style="max-width:120px;max-height:80px;">
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="section">
    <div class="section-body">
        <div class="table-responsive mt-4">
            <h5 class="mb-3">Career Kısmı</h5>
            <table class="table table-bordered" style="border: 1px solid #343a40;">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Buton Metni</th>
                        <th>Görsel</th>
                        <th style="width: 120px;">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $career->title ?? '' }}</td>
                        <td>{{ $career->description ?? '' }}</td>
                        <td>{{ $career->btn_text ?? '' }}</td>
                        <td>
                            @if(!empty($career->image))
                                <img src="{{ asset($career->image) }}" alt="Career Görsel" style="max-width:120px;max-height:80px;">
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.career.index') }}" class="btn btn-primary btn-sm">Düzenle</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection