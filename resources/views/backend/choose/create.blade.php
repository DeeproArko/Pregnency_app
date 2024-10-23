@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Why Choose List Content Create
                        <a class="btn btn-dm btn-primary" href="{{ route('Chooses_index') }}">Why Choose List</a>
                    </div>
                    
                <div class="card-body">
                        <form action="{{ route('Chooses_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="form-group ">
                                <label class="form-label ">Choose Description</label>
                         
                                  <textarea class="summernote-simple" name="description"></textarea>
                               
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