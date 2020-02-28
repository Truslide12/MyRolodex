@extends('layouts.master')

@section('content')

<div style="width:90%; margin:30px; padding: 0 0 0 5%;">
    <div>
        <div style="margin-top:10px;">
            <h3>Contacts</h3>
        </div>
        <div style="margin-top:10px; margin-bottom:10px;">
            <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
        </div>
    </div>

    {{-- @if ($contacts = "") 
        <div class="container">
            <h3>You don't have any contacts saved!</h3>
        <div style="margin-top:10px; margin-bottom:10px;">
                <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
            </div>
            
    @else --}}
    <div class="table-responsive">
        <table class="table table-hover col-sm-12">
            <thead>
                <tr class="row" style="text-align:center">
                        <th class="col-sm-1"><a type="submit" class="btn" href="{{ route('contacts.sort', ['field' => 'firstName', 'currentField' => 'firstName', 'dir' => 'asc' ] )}}">First Name</a></th>
                        <th class="col-sm-1"><a type="submit" class="btn" href="{{ route('contacts.sort', ['field' => 'lastName', 'currentField' => 'firstName','dir' => 'desc' ] )}}">Last Name</a></th>
                        <th class="col-sm-2"><a type="submit" class="btn" href="{{ route('contacts.sort', ['field' => 'email', 'currentField' => 'firstName','dir' => 'desc' ] )}}">Email</a></th>
                        <th class="col-sm-1"><a type="submit" class="btn" href="{{ route('contacts.sort', ['field' => 'phone', 'currentField' => 'firstName','dir' => 'desc' ] )}}">Phone</a></th>
                        <th class="col-sm-2"><a type="submit" class="btn" href="{{ route('contacts.sort', ['field' => 'birthday', 'currentField' => 'firstName','dir' => 'desc' ] )}}">Birthday</a></th>
                        <th class="col-sm-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $value)
                    <tr class="row" style="text-align:center; margin-top:5px;">
                        {{--  Need to add in sort functions for each catagory --}}
                        <td class="col-sm-1">{{$value->firstName}}</td>
                        <td class="col-sm-1">{{$value->lastName}}</td>
                        <td class="col-sm-2">{{$value->email}}</td>
                        <td class="col-sm-1">{{$value->phone}}</td>
                        <td class="col-sm-2">{{$value->birthday}}</td>
                        <td class="col-sm-3">
                            <form action="{{ route('contacts.destroy', $value->id) }}" method="post">
                                <a class="btn btn-sm btn-success" href="{{ route('contacts.show', $value->id)}}">Show</a>
                                <a class="btn btn-sm btn-warning" href="{{ route('contacts.edit', $value->id)}}">Edit</a>
                                <a class="btn btn-sm btn-second" href="{{ route('contacts.createAddress', ['contact_id' => $value->id])}}">Add Address</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    {{-- @endif --}}
    {{ $contacts->links() }}
</div>
@endsection 
