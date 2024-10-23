@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Sexual Health Content Create
                        <a class="btn btn-dm btn-primary" href="{{ route('health_index') }}">Sexual Health Content List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('health_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Enter Description"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                           
                            
                           <div class="form-group">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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