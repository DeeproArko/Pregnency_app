@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Disease Content List
                        <a class="btn btn-dm btn-primary" href="{{ route('diseases_index') }}" > Disease Content List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('diseases_update', $diseases->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <select class="form-control" name="category">
                                  {{-- <option>adfasdfdf</option> --}}
                                  @foreach ($navs as $nav)
                                      <option>{{ $nav->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                            <div class="form-group">
                              <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $diseases->title }}" >
                            </div>
                            <div class="form-group ">
                              <label class="form-label ">Short Description</label>
                       
                                <textarea class="summernote-simple"</textarea>
                             
                            </div>
                           



                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-left col-12 col-md-12 col-lg-12">Short Description</label>
                              <div class="col-sm-12 col-md-12">
                                <textarea class="summernote" name="short_description"> {!! $diseases->short_description !!}</textarea>
                              </div>
                          </div>
                          <div class="form-group row mb-4">
                              <label class="col-form-label text-md-left col-12 col-md-12 col-lg-12">Description</label>
                              <div class="col-sm-12 col-md-12">
                                <textarea class="summernote" name="description"> {!! $diseases->description !!}</textarea>
                              </div>
                          </div>
                           
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="MainLead" value="{{ $diseases->MainLead }}">
                              <label class="form-check-label" for="inlineCheckbox1">Main Lead</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="subLead">
                              <label class="form-check-label" for="inlineCheckbox2" value="{{ $diseases->subLead }}">Sub Lead</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="sectionLead">
                              <label class="form-check-label" for="inlineCheckbox3" value="{{ $diseases->sectionLead }}">Section Lead</label>
                          </div>


                              
                              
                              

                              <div class="form-group">
                                
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                            <img src="{{ asset('uploads/disease/' . $diseases->image) }}" alt="Girl in a jacket" width="120" height="100">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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