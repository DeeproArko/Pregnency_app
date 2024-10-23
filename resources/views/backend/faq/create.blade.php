@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">FAQ List Content Create
                        <a class="btn btn-dm btn-primary" href="{{ route('faqs_index') }}">FAQ List</a>
                    </div>
                    
                <div class="card-body">
                        <form action="{{ route('faqs_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-left col-12 col-md-12 col-lg-12">Question</label>
                              <div class="col-sm-12 col-md-12">
                                <textarea class="summernote" name="question"></textarea>
                              </div>
                            </div>
                              <div class="form-group row mb-4">
                                <label class="col-form-label text-md-left col-12 col-md-12 col-lg-12">Answer</label>
                                <div class="col-sm-12 col-md-12">
                                  <textarea class="summernote" name="answer"></textarea>
                                </div>
                              </div>
                         
                           
                           
                            <div>
                                <button type="submit" class="btn btn-sm btn-primary mt-2">Save</button>
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