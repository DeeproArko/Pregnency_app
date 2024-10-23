@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Ambulance List Content Create
                        <a class="btn btn-dm btn-primary" href="{{ route('ambulances_index') }}">Ambulance List</a>
                    </div>
                    
                <div class="card-body">
                        <form action="{{ route('ambulances_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="form-group">
                                <label class="form-label">Driver Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Driver Name">
                            </div>

                            <div class="form-group ">
                                <label class="form-label ">Ambulance Location</label>
                                  <input type="text" name="location" placeholder="Enter Ambulance Location"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Driver Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Enter Driver Phone Number">
                            </div>
                           
                           <div class="form-group">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
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