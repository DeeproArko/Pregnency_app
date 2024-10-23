@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Navbar Content List
                        <a class="btn btn-dm btn-primary" href="{{ route('navs_index') }}" >Navbar Content List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('navs_update', $navs->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label class="form-label">Navbar name: </label>
                            <input type="text" name="name" class="form-control" value="{{ $navs->name }}" >
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