@extends('backend.master')
@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="container">
          <div class="card">
              <div class="card-header">Disease Content List
                  <div style="margin-right: 60px;">
                    <a class="btn btn-dm btn-primary" href="{{ route('diseases_create') }}">Add Disease Content</a>
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
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Category</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($diseases as $disease)
                    <tr>
                      <th scope="row">{{ $i++ }}</th>
                      <td>{{ $disease->title }}</td>
                      <td>{!! $disease->description !!}</td>
                      <td>{{ $disease->category }}</td>
                      
                      <td>
                        <img src="{{ asset('uploads/disease/' . $disease->image) }}" alt="Girl in a jacket" width="120" height="100">
                        {{-- <img src="{{ asset('public/uploads/slider/' . $slider->image) }}" height="50" alt=""> --}}
                      </td>
      
                      <td>
                         
                          <a href="{{ route('diseases_edit', $disease->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('diseases_destroy', $disease->id) }}" class="btn btn-sm btn-danger">Delete</a>
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