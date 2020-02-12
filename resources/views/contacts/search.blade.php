@extends('layouts.master')

@section('content')
<div class="container" style="margin-top:50px;">
        <div>
                {{ Form::open(['route'=>'contacts.postSearch', 'method'=>'GET']) }}
                @include('contacts.form_search')
                {{ form::close() }}
        </div>
</div>
@endsection
