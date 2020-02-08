@extends('layouts.master')

@section('content')

<div class="container">
    <div>

        <div style="margin-top:50px; margin-bottom:50px; align-content:center">
            <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
        </div>
    </div>

</div>
@endsection 
