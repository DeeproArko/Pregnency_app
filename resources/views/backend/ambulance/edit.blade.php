@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Ambulance List
                        <a class="btn btn-dm btn-primary" href="{{ route('ambulances_index') }}" >Ambulance List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('ambulances_update', $ambulances->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                              <label class="form-label">Driver Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $ambulances->name }}" >
                            </div>

                            <div class="form-group ">
                              <label class="form-label ">Ambulance Location</label>
                                <input type="text" name="location" value="{{ $ambulances->location }} " class="form-control">
                            </div>

                           <div class="form-group">
                              <label class="form-label">Driver Phone</label>
                              <input type="number" name="phone" class="form-control" value="{{ $ambulances->phone }}" >
                            </div>

                            <div class="form-group">
                              <label class="form-label">Image</label>
                              <input type="file" name="image" class="form-control" >
                              <img src="{{ asset('uploads/ambulance/' . $ambulances->image) }}" alt="Girl in a jacket" width="120" height="100">
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