@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Hospital List
                        <a class="btn btn-dm btn-primary" href="{{ route('hospitals_index') }}" >Hospital List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('hospitals_update', $hospitals->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                              <label class="form-label">Hospital Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $hospitals->name }}" >
                            </div>

                            <div class="form-group ">
                              <label class="form-label ">Hospital Location</label>
                                <input type="text" name="location" value="{{ $hospitals->location }} " class="form-control">
                            </div>

                           <div class="form-group">
                              <label class="form-label">Hospital Phone</label>
                              <input type="number" name="phone" class="form-control" value="{{ $hospitals->phone }}" >
                            </div>

                            <div class="form-group">
                              <label class="form-label">Image</label>
                              <input type="file" name="image" class="form-control" >
                              <img src="{{ asset('uploads/hospital/' . $hospitals->image) }}" alt="Girl in a jacket" width="120" height="100">
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