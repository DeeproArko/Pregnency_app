@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Children Content List
                        <a class="btn btn-dm btn-primary" href="{{ route('childs_index') }}" >Side Children Content List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('childs_update', $childs->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $childs->title }}" >
                            </div>
                            <div class="form-group">
                              <label class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control"  >{{ $childs->description }}</textarea>
                            </div>
                              

                              <div class="form-group">
                                
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                            <img src="{{ asset('uploads/child/' . $childs->image) }}" alt="Girl in a jacket" width="120" height="100">
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