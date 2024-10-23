@extends('backend.master')
@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="container">
          <div class="card">
              <div class="card-header">Hospital List
                  <div style="margin-right: 60px;">
                    <a class="btn btn-dm btn-primary" href="{{ route('hospitals_create') }}">Add Hospital List</a>
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
                      <th scope="col">Name</th>
                      <th scope="col">Location</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($hospitals as $hospital)
                    <tr>
                      <th scope="row">{{ $i++ }}</th>
                      <td>{{ $hospital->name }}</td>
                      <td>{{ $hospital->location }}</td>
                      <td>{{ $hospital->phone }}</td>
                      
                      <td>
                        <img src="{{ asset('uploads/hospital/' . $hospital->image) }}" alt="Girl in a jacket" width="120" height="100">
                        {{-- <img src="{{ asset('public/uploads/slider/' . $slider->image) }}" height="50" alt=""> --}}
                      </td>
      
                      <td>
                         
                          <a href="{{ route('hospitals_edit', $hospital->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('hospitals_destroy', $hospital->id) }}" class="btn btn-sm btn-danger">Delete</a>
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