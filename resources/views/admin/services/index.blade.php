@extends('admin.layouts.layout')
@section('content')


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
                        <img class="w-25" src="{{ asset($services->image_1) }}" alt="">
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
                        <img class="w-25" src="{{ asset($services->image_2) }}" alt="">
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
                        <img class="w-25" src="{{ asset($services->image_3) }}" alt="">
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
                        <img class="w-25" src="{{ asset($services->image_4) }}" alt="">
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


@endsection