@extends('layouts.master')

@section('content')


<div class="container">
    <div style="margin:10px">
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('search') ? 'has-error' : "" }}">
                    {{ Form::text('search',NULL, ['class'=>'form-control', 'id'=>'search', 'placeholder'=>'search contacts...']) }}
                    {{ $errors->first('search', '<p class="help-block">:message</p>') }}
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                    {{ Form::button(isset($model)? 'Find' : 'search' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
            </div>
        </div>
    </div>
    <div class="row">
        <div style="margin-top:10px;">
            <h3>Contacts</h3>
        </div>
    </div>
    <div class="row">
        <div style="margin-top:10px; margin-bottom:10px;">
            <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
        </div>
    </div>
        {{-- @if ($contacts = "") 
            <div class="row">
                <h3>You don't have any contacts saved!</h3>
            <div style="margin-top:10px; margin-bottom:10px;">
                    <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
                </div>
                
        @else --}}
    <div style="margin:10px">
    </div>
    <div class="row">   
        <div class="table-responsive">
            <table id='dataTable' class="table table-hover col-sm-12 w-auto">
                <thead class="thead-dark">
                    <tr>
                            <th>
                                <h5>@sortablelink('firstName', 'First Name')</h5>
                            </th>
                            <th>
                                <h5>@sortablelink('lastName', 'Last Name')</h5>
                            <th>
                                <h5>@sortablelink('email', 'Email')</h5>
                            <th>
                                <h5>@sortablelink('phone', 'Phone')</h5>
                            <th>
                                <h5>@sortablelink('birthday', 'Birthday')</h5>
                            <th>
                                <h5 style='text-align:center;'>@sortablelink('id', 'Action')</h5>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    @if($contacts->count())
                    @foreach ($contacts as $key => $value)
                        <tr>
                            {{--  Need to add in sort functions for each catagory --}}
                            <td>{{$value->firstName}}</td>
                            <td>{{$value->lastName}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->birthday}}</td>
                            <td>
                                <a class="btn btn-sm btn-success" style='display:inline-block;' href="{{ route('contacts.show', $value->id)}}">Show</a>
                                <a class="btn btn-sm btn-warning" style='display:inline-block;' href="{{ route('contacts.edit', $value->id)}}">Edit</a>                           
                                {{-- for future editmodal 
                                    <a class="btn btn-warning edit" 
                                    data-toggle="modal" 
                                    data-target="#editModal"
                                    data-id="{{ $value->id }}"
                                    data-firstName="{{ $value->firstName }}"
                                    data-lastName="{{ $value->lastName }}"
                                    data-email="{{ $value->email }}"
                                    data-phone="{{ $value->phone }}"
                                    data-birthday="{{ $value->birthday }}"
                                    >
                                    Edit
                                </a> --}}
                                <a class="btn btn-sm btn-second" style='display:inline-block;' 
                                    href="{{ route('contacts.createAddress', ['contact_id' => $value->id])}}">Add Address</a>
                                <a href="#" style='display:inline-block;' 
                                    data-id={{$value->id}}
                                    data-firstName={{$value->firstName}}
                                    data-lastName={{$value->lastName}}
                                    class="btn btn-danger delete" 
                                    data-toggle="modal" 
                                    data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach 
                @endif
                </tbody>
            </table>
        </div>
        {{-- {!! $contacts->appends(\Request::except('page'))->links() !!} --}}
        {{ $contacts->links() }} 
        {{-- note to self, this is the same as the code above --}}
    </div>
    {{-- @endif --}}
{{-- ############################################ Modals ############################################# --}}
        <!-- Edit Modal -- (To be added later once calendar is working) -->
            {{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
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
                            {{ Form::model($contact,['route'=>['contacts.update', $value->id],'method'=>'PATCH']) }}
                            @include('contacts.form_master')
                            {{ Form::close() }}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a class="btn btn-sm btn-success" href="contacts/edit">Update</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>   --}}
        <!-- End Edit Modal -->

        <!-- Delete Warning Modal -->
        <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
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
                            <input id="id" name="id" type="hidden">
                            <h5 class="text-center">Are you sure you want to delete this contact?</h5>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-danger" id="deleteOK_button" rid="{{ $value->id }}">Yes, Delete Contact</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- End Delete Modal --> 

{{-- ########################################## End Modals ########################################### --}}

</div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#deleteOK_button').on('click',function(){
                var rid = $(this).attr('data-id');
                
                $.post('{{ url('contacts/delete') }}', {
                    '_token':'{{ csrf_token() }}',
                    'rid' : rid,
                }, function(data){
                    console.log(data);
                }, 'json');
            });
        });
    </script>
@endsection 
