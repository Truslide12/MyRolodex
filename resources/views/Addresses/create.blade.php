@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
</div>
<div class="container">
    {{-- <tr class="row">
      <td class="col-md-3">
              <div class="form-group">
                  <strong>First Name : </strong>
                  {{ $contact->firstName}}
              </div>
      </td>
      <td class="col-md-3">
        <div class="form-group">
            <strong>Last Name : </strong>
            {{ $contact->lastName}}
        </div>
      </td>
    </tr>
    <tr class="row">
      <td class="col-md-6">
          <div class="form-group">
                  <strong>Email : </strong>
                  {{ $contact->email}}
          </div>
        </td>
    </tr>
    <tr class="row">
      <td class="col-md-6">
        <div class="form-group">
            <strong>Phone : </strong>
            {{ $contact->phone}}
        </div>
      </td>
    </tr>
    <tr class="row">
        <td class="col-md-6">
          <div class="form-group">
                  <strong>Birthday : </strong>
                  {{ $contact->birthday}}
          </div>
        </td>
    </tr> --}}
    <div class="container">
        <div class="col-md-10">
            {{ Form::model($contact_id, ['route'=>['addresses.store', $contact_id], 'method'=>'POST']) }}
            {{ Form::hidden('contact_id',   request()->contact_id ) }}
            @csrf
            @include('contacts.form_address')
          {{ form::close() }}
        </div>
    </div>
</div>
@endsection