@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Doctor Content Create
                        <a class="btn btn-dm btn-primary" href="{{ route('doctors_index') }}">Doctor Content List</a>
                    </div>
                    
                <div class="card-body">
                        <form action="{{ route('doctors_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="form-group">
                                <label class="form-label">Doctor Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="form-group ">
                                <label class="form-label ">Doctor Designation</label>
                                  <textarea class="summernote-simple" name="designation"></textarea>
                            </div>

                            <div class="form-group ">
                                <label class="form-label ">Doctor Location</label>
                                  <textarea class="summernote-simple" name="location"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Doctor Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Enter Doctor Phone Number">
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="popular">
                                <label class="form-check-label" for="inlineCheckbox1">Popular Doctor</label>
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