@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
  <div class="container">
    <div style="margin-top:20px;"></div>

    <h3>Create New Contact</h3>
    
    <div class="col-md-6">
      {{ Form::open(['route'=>'contacts.store', 'method'=>'POST']) }}
        @include('contacts.form_master')
      {{ form::close() }}
    
    </div>
  </div>
@endsection