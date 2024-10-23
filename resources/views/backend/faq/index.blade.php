@extends('backend.master')
@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="container">
          <div class="card">
              <div class="card-header">FAQ List
                  <div style="margin-right: 60px;">
                    <a class="btn btn-dm btn-primary" href="{{ route('faqs_create') }}">Add FAQ List</a>
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
                      <th scope="col">Question</th>
                      <th scope="col">Answer</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($faqs as $faq)
                    <tr>
                      <th scope="row">{{ $i++ }}</th>
                      <td>{!! $faq->question !!}</td>
                      <td>{!! $faq->answer !!}</td>
                    
                      
                    
      
                      <td>
                         
                          <a href="{{ route('faqs_edit', $faq->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('faqs_destroy', $faq->id) }}" class="btn btn-sm btn-danger">Delete</a>
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