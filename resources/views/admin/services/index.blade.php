@extends('admin.layouts.layout')
@section('content')

<style>
/* Service sayfası için özel CSS */
.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  cursor: pointer;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Gözat";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

/* Mobilde file input iyileştirmesi */
@media (max-width: 768px) {
  .custom-file-label {
    font-size: 16px; /* iOS'ta zoom'u engeller */
    padding: 0.75rem 1rem;
  }
  
  .custom-file-label::after {
    padding: 0.75rem 1rem;
    font-size: 16px;
  }
  
  /* Form grupları arası boşluk */
  .form-group {
    margin-bottom: 2rem;
  }
  
  /* Resim önizleme alanları */
  .img-fluid {
    margin-bottom: 1rem;
  }
}

/* File input focus durumu */
.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Dosya seçildiğinde label rengi */
.custom-file-input:lang(tr) ~ .custom-file-label::after {
  content: "Dosya Seçildi";
  background-color: #28a745;
  color: white;
}
</style>


 <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{ route('admin.hero.edit',1) }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Services Section </h1>
            
          </div>

          <div class="section-body">
          

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Services Section</h4>
                  </div>
                  <div class="card-body">

                    <form action="{{ route('admin.services.update',1) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      @if($services->image_1)
                      <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">1. Ürün</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="img-fluid w-100" style="max-width: 300px;" src="{{ asset($services->image_1) }}" alt="">
                    </div>
                </div>
                @endif
            

                     
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Resim</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                          <input type="file" name="image_1" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Resim Seç </label>
                        </div>
                      </div>
                    </div>
                  
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title_1" class="form-control" value="{{ $services->title_1  }}">
                      </div> 
                    </div>



@if ($services->image_2)                       
               <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">2. Ürün</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="img-fluid w-100" style="max-width: 300px;" src="{{ asset($services->image_2) }}" alt="">
                    </div>
                </div>
            @endif

                     
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Resim</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                          <input type="file" name="image_2" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Resim Seç </label>
                        </div>
                      </div>
                    </div>
                  
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title_2" class="form-control" value="{{ $services->title_2 }}">
                      </div> 
                    </div>




@if ($services->image_3)
                     <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">3. Ürün</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="img-fluid w-100" style="max-width: 300px;" src="{{ asset($services->image_3) }}" alt="">
                    </div>
                </div>
                @endif
            

                     
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Resim</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                          <input type="file" name="image_3" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Resim Seç </label>
                        </div>
                      </div>
                    </div>
                  
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title_3" class="form-control" value="{{ $services->title_3  }}">
                      </div> 
                    </div>





@if ($services->image_4)
    

                     <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">4. Ürün</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="img-fluid w-100" style="max-width: 300px;" src="{{ asset($services->image_4) }}" alt="">
                    </div>
                </div>
                @endif
            

                     
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Resim</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                          <input type="file" name="image_4" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Resim Seç </label>
                        </div>
                      </div>
                    </div>
                  
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title_4" class="form-control" value="{{ $services->title_4  }}">
                      </div> 
                    </div>



                    

                  
                

                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update </button>
                      </div>
                    </div>

                    </form>

                     
                    



                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<script>
$(document).ready(function() {
  // File input iyileştirmeleri
  $('.custom-file-input').on('change', function() {
    var fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').html(fileName || 'Resim Seç');
    
    // Dosya seçildiğinde sayfanın üste atmasını engelle
    if ($(window).width() <= 768) {
      var $formGroup = $(this).closest('.form-group');
      var currentScroll = $(window).scrollTop();
      
      setTimeout(function() {
        $('html, body').animate({
          scrollTop: $formGroup.offset().top - 100
        }, 300);
      }, 100);
    }
  });
  
  // Form submit sırasında scroll pozisyonunu koru
  $('form').on('submit', function() {
    if ($(window).width() <= 768) {
      sessionStorage.setItem('serviceScrollPosition', $(window).scrollTop());
    }
  });
  
  // Sayfa yüklendiğinde scroll pozisyonunu geri yükle
  if (sessionStorage.getItem('serviceScrollPosition')) {
    setTimeout(function() {
      $(window).scrollTop(sessionStorage.getItem('serviceScrollPosition'));
      sessionStorage.removeItem('serviceScrollPosition');
    }, 200);
  }
  
  // Custom file label tıklama iyileştirmesi
  $('.custom-file-label').on('click', function(e) {
    e.preventDefault();
    $(this).prev('.custom-file-input').click();
  });
  
  // Mobilde form elemanları için touch iyileştirmesi
  $('input, textarea, select').on('focus', function() {
    if ($(window).width() <= 768) {
      setTimeout(function() {
        $('html, body').animate({
          scrollTop: $(this).offset().top - 100
        }, 300);
      }.bind(this), 100);
    }
  });
});
</script>

@endsection