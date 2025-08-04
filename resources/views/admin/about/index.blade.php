@extends('admin.layouts.layout')
@section('content')

 <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            <h1>About Section </h1>
            
          </div>

          <div class="section-body">
          

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update About Section</h4>
                  </div>
                  <div class="card-body">

                    <form action="{{ route('admin.about.update',1) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                                         <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title" class="form-control" value="{{ $about->getTranslation('title', 'tr') ?? '' }}">
                      </div> 
                    </div>

                      <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="description" id="" class="form-control" style="height: 100px">{{ $about->getTranslation('description', 'tr') ?? '' }}</textarea>
                      </div>
                    </div>

                    @if (!empty($about?->image))
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Image</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="img-fluid w-100" style="max-width: 300px;" src="{{ asset($about->image) }}" alt="">
                    </div>
                </div>
               @endif

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> İmage</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>

                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title 2</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title_2" class="form-control" value="{{ $about->getTranslation('title_2', 'tr') ?? '' }}">
                      </div> 
                    </div>

                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description 2</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="description_2" id="" class="form-control" style="height: 100px">{{ $about->getTranslation('description_2', 'tr') ?? '' }}</textarea>
                      </div>
                    </div>

                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Text</label>
                      <div class="col-sm-12 col-md-7">
                         <textarea name="btn_text" id="" class="form-control">{{ $about->getTranslation('btn_text', 'tr') ?? '' }}</textarea>
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