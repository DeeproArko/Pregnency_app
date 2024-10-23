@extends('backend.master')
@section('main')
<div class="main-wrapper main-wrapper-1">
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">Edit FeedBack List
                        <a class="btn btn-dm btn-primary" href="{{ route('feedbacks_index') }}" >Feedback List</a>
                    </div>
                
                <div class="card-body">
                        <form action="{{ route('feedbacks_update', $feedbacks->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                       

                            <div class="form-group">
                              <label class="form-label">Image</label>
                              <input type="file" name="image" class="form-control" >
                              <img src="{{ asset('uploads/feedback/' . $feedbacks->image) }}" alt="Girl in a jacket" width="120" height="100">
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