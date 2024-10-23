@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Doctor Content List
                        <a class="btn btn-dm btn-primary" href="{{ route('doctors_index') }}" > Doctor Content List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('doctors_update', $doctors->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                              <label class="form-label">Doctor Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $doctors->name }}" >
                            </div>

                            <div class="form-group ">
                              <label class="form-label ">Doctor Designation</label>
                                <textarea class="summernote-simple" name="designation"> {{ $doctors->designation }}</textarea>
                            </div>

                            <div class="form-group ">
                              <label class="form-label ">Doctor Location</label>
                                <textarea class="summernote-simple" name="location"> {!! $doctors->location !!}</textarea>
                            </div>

                           <div class="form-group">
                              <label class="form-label">Doctor Phone</label>
                              <input type="number" name="phone" class="form-control" value="{{ $doctors->phone }}" >
                            </div>

                            <div class="form-group">
                              <label class="form-label">Image</label>
                              <input type="file" name="image" class="form-control" >
                              <img src="{{ asset('uploads/doctor/' . $doctors->image) }}" alt="Girl in a jacket" width="120" height="100">
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