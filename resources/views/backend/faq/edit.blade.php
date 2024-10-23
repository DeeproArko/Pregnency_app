@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit FAQ List
                        <a class="btn btn-dm btn-primary" href="{{ route('faqs_index') }}" >FAQ List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('faqs_update', $faqs->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                           
                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-left col-12 col-md-12 col-lg-12">Question</label>
                              <div class="col-sm-12 col-md-12">
                                <textarea class="summernote" name="question">{{ $faqs->question }}</textarea>
                              </div>
                            </div>
                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-left col-12 col-md-12 col-lg-12">Answer</label>
                              <div class="col-sm-12 col-md-12">
                                <textarea class="summernote" name="answer">{{ $faqs->answer }}</textarea>
                              </div>
                            </div>


                            
                            
                            <div>
                                <button type="submited" class="btn btn-sm btn-primary mt-2">Update</button>
                            </div>
                            
                        </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection