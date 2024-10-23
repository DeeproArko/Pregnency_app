@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Navbar Content Create
                        <a class="btn btn-dm btn-primary" href="{{ route('navs_index') }}">Navbar Content List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('navs_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label class="form-label">Navbar: </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Navbar name">
                            @error('title')
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