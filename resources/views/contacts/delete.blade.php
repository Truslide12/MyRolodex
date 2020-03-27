{{-- Need to add code to controller to pass contact data onto this form --}}
@section('content')
    <!-- Delete Warning Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/contacts" method="DESTROY" id="deleteForm">
                    <div class="modal-body">
                        <h5>Are you sure you want to delete this contact?</h5>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a action="{{ route('contacts.destroy', $value->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- End Delete Modal -->  
@endsection