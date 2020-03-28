
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Address Book</title>
    
    <!-- Bootstrap core CSS -->
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="navbar-brand">Address Book</div>
      {{-- <a class="navbar-brand" href="#">Address Book</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('contacts.index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('contacts.search')}}">Search</a>
          </li> --}}
        </ul>
      </div>
    </nav>

    <main role="main">
        @yield('content')
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">

      $(document).ready(function() {

        // Start Edit Record
        $('#editModal').on('show', function(e) {
          var link     = e.relatedTarget();
          var id = link.data("id");
          var firstName = link.data("firstName");
          var lastName = link.data("firstName");
          var email    = link.data("email");
          var phone = link.data("phone");
          var birthday = link.data("birthday");

          var modal = $(this);

          modal.find('.modal-title').text('Edit Contact Information')
          modal.find(".modal-body #firstName").val(firstName);
          modal.find(".modal-body #lastName").val(lastName);
          modal.find(".modal-body #email").val(email);
          modal.find(".modal-body #phone").val(phone);
          modal.find(".modal-body #birthday").val(birthday);
        });
        // End Edit Record

        // Start Delete Record
        // $('#deleteModal').on('show.bs.modal', function(e) {
        //   console.log("this is the id = ");
        //   var link = = e.relatedTarget();
        //   var id = link.data("id");
        //   var firstName = link.data("firstName");
        //   var lastName = link.data("firstName");

        //   var modal = $(this);

        //   modal.find(".modal-title").text('Delete Contact Information')
        //   modal.find(".modal-body #firstName").val(firstName);
        //   modal.find(".modal-body #lastName").val(lastName);
        //   modal.find(".modal-body #id").val(id);
          
        $(document).on('click','.delete',function(){
         let id = $(this).attr('data-id');
         let firstName = $(this).attr('data-firstName');
         let lastName = $(this).attr('data-lastName');
         $('#id').val(id);
         $('#firstName').val(firstName);
         $('#lastName').val(lastName);
          // $('#deleteUserForm').attr('action', '/user/' + button.data('id'));
        });
        // End Delete Record
      });

    </script>

      @yield('script')
  </body>
</html>

