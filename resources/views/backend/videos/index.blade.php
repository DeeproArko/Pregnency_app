@extends('backend.master')
@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="container">
          <div class="card">
              <div class="card-header">Video List
                  <div style="margin-right: 60px;">
                    <a class="btn btn-dm btn-primary" href="{{ route('videos_create') }}">Add video List</a>
                  </div>
              </div>
          
          <div class="card-body">
              <table class="table tablr-sm table-borderd">
                  @php
                      $i =1;
                  @endphp
                  <thead>
                    <tr class="info">
                      <th scope="col">ID</th>
                      <th scope="col">Video Link</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($videos as $video)
                    <tr>
                      <th scope="row">{{ $i++ }}</th>
                      <td>{!! $video->video !!}</td>
            
                    
                      
                    
      
                      <td>
                         
                          <a href="{{ route('videos_edit', $video->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('videos_destroy', $video->id) }}" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
</div>


@endsection