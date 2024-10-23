@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Blood Bank List
                        <a class="btn btn-dm btn-primary" href="{{ route('bloods_index') }}" >Blood Bank List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('bloods_update', $bloods->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                              <label class="form-label">Blood Bank Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $bloods->name }}" >
                            </div>

                            <div class="form-group ">
                              <label class="form-label ">Blood Bank Location</label>
                                <input type="text" name="location" value="{{ $bloods->location }} " class="form-control">
                            </div>

                           <div class="form-group">
                              <label class="form-label">Blood Bank Phone</label>
                              <input type="number" name="phone" class="form-control" value="{{ $bloods->phone }}" >
                            </div>

                            <div class="form-group">
                              <label class="form-label">Image</label>
                              <input type="file" name="image" class="form-control" >
                              <img src="{{ asset('uploads/blood/' . $bloods->image) }}" alt="Girl in a jacket" width="120" height="100">
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