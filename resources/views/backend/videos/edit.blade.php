@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit Video List
                        <a class="btn btn-dm btn-primary" href="{{ route('videos_index') }}" >Video List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('videos_update', $videos->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                           
                            <div class="form-group">
                              <label class="form-label">Video Link</label>
                              <div class="col-sm-12 col-md-12">
                                <input class="form-control" type="text" name="video" value="{{ $videos->video }}">
                              </div> 
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