@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col-lg-9 margin-tb">
                <h2>Contact Info</h2>
        </div>

        <div class="col-lg-3">
                <a class="btn btn-sm btn-success" href="{{ route('contacts.createAddress', ['contact_id' => $contact->id])}}">Add Address</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>First Name : </strong>
                {{ $contact->firstName}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name : </strong>
                {{ $contact->lastName}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email : </strong>
                {{ $contact->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone : </strong>
                {{ $contact->phone}}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Birthday : </strong>
                {{ $contact->birthday}}
            </div>
        </div>
    </div>
    <div class="row">   
        <div class="table-responsive">
            <table class="table-hover w-auto table">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th>Type</th>
                        <th>Number</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Map</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contact->addresses as $value)
                    <tr style="text-align:center">
                        <td>{{ $value->type}}</td>
                        <td>{{ $value->number}}</td>
                        <td>{{ $value->street}}</td>
                        <td>{{ $value->city}}</td>
                        <td>{{ $value->state}}</td>
                        <td>{{ $value->zip}}</td>
                        <td>
                            {{-- <a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $row->id)}}">Edit</a> --}}
                            <a class="btn btn-warning editAddress" 
                                data-toggle="modal" 
                                data-target="#editAddressModal"
                                data-id="{{ $value->id }}"
                                data-firstName="{{ $value->type }}"
                                data-lastName="{{ $value->number }}"
                                data-email="{{ $value->city }}"
                                data-phone="{{ $value->state }}"
                                data-birthday="{{ $value->zip }}">Edit
                            </a> 
                        </td>
                        <td>
                            <a href="#" 
                            data-id={{$value->id}}
                            data-firstName={{$value->firstName}}
                            data-lastName={{$value->lastName}}
                            class="btn btn-danger deleteAddres" 
                            data-toggle="modal" 
                            data-target="#deleteAddressModal">
                            Delete</a>
                            {{-- <form action="{{ route('addresses.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form> --}}
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary mapbtn" data-toggle="modal" data-target="#mapModal">
                                    Map
                                </button>
                            {{-- <td><a class="btn btn-sm btn-warning" href="{{ route('contacts.map', $row->id)}}">Edit</a></td> --}}
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
{{-- ############################################ Modals ############################################# --}}
<!-- Edit Address Modal -- (To be added later once calendar is working) -->
    <div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Contact Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/contacts" method="PUT" id="editForm">
                <div class="modal-body">
                    @crsf
                    {{ Form::model($contact,['route'=>['addresses.update', 'id'],'method'=>'PATCH']) }}
                    @include('contacts.form_address')
                    {{ Form::close() }}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-sm btn-success" href="contacts/edit">Update</a>
                </div>
                </form>
            </div>
        </div>
    </div>  
<!-- End Edit Modal -->

<!-- Delete Address Warning Modal -->
    <div class="modal fade" id="deleteAddressModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{ route('contacts.destroy', 'id') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="id" name="id")>
                    <h5 class="text-center">Are you sure you want to delete this contact?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-danger">Yes, Delete Contact</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- End Delete Modal --> 

<!-- Map Modal -- (To be added later once calendar is working) -->
    <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Contact Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/contacts" method="PUT" id="editForm">
                <div class="modal-body">
                    <h5>Google Maps to be added later</h5>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-danger" id="deleteAddressOK_button">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>   
{{-- End Map Modal --}}
{{-- ########################################## End Modals ########################################### --}}

</div>
@endsection