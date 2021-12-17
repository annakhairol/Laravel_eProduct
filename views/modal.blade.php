@include('title')
@section('product')
<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Listing </a>||<a href="#modalData" data-toggle="modal"> Create</a></li>
      </ol>
    </nav>
    <h1>Products</h1>
        <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalData">
        <i class="fa fa-user-plus"></i> Create Product
      </button>
        <!-- End Button trigger modal -->

      <!-- Modal -->
      <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="titleModal"> Register Pilot </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

              <form id="formData" method="POST" action="ProductController.php">

              <div class="modal-body">

                  <div class="form-group">
                  <label>Code*:</label>
                  <input type="text" name="code" id="code" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Name*:</label>
                   <input type="email" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Category*:</label>
                   <input type="text" name="category" id="category" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Brand:</label>
                   <input type="text" name="brand" id="brand" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Type:</label>
                   <input type="text" name="type" id="type" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Description:</label>
                   <input type="text" name="desc" id="desc" class="form-control" required>
                </div>

              </div>

              <div class="modal-footer">
                <input type="hidden" name="typeForm" id="typeForm" value="register">
                <input type="hidden" name="prodid" id="prodid" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i> </button>
              </div>

          </form>

          </div>
        </div>
      </div>


      <!-- End of Modal -->
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
            <tr>
                 <td>{{ $value->id }}</td>
                 <td><a href="#">{{ $value->code }}</a></td>
                 <td>{{ $value->name }}</td>
                 <td>{{ $value->category }}</td>
                 <td>{{ $value->brand }}</td>
                 <td>{{ $value->type }}</td>
                 <td>{{ $value->description }}</td>
            </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
         
    {!! $data->links() !!}
</div>
<script>
    
      $(document).ready(function() {
        getDataList();

        // reset all modal input when modal close
        $('#modalData').on("hidden.bs.modal", function() {
          $('#typeForm').val('register');
          $('#titleModal').html('Register Pilot');
          document.getElementById("formData").reset();

        });
      });

      function updateRecord(id){

        $('#modalData').modal('show');
        $('#typeForm').val('update'); // set type form to update
        $('#titleModal').html('Update Pilot');

        $.ajax({
          type : 'POST',
          url : 'controller.php',
          data : {
            id : id,
            action : 2
          },
          dataType : "JSON",
          success : function(value) {
                $('#pilotName').val(value.pilotName);
                $('#pilotEmail').val(value.pilotEmail);
                $('#pilotNum').val(value.pilotNum);
                $('#pilotNC').val(value.pilotNC);
          }
        });

      }

      $("#formData").submit(function(e) {

        e.preventDefault();

        var typeSubmit = $("#typeForm").val();
        var dataString = $("#formData").serialize();

        dataString = new FormData(this);

         $.ajax({
            type : 'POST',
            url : 'controller.php',
            cache : false,
            contentType : false,
            processData : false,
            data : dataString,
            dataType : "JSON",
            success : function(response) {

              if (response.type == 'register') {

                if (response.status == 200) {
                              var msg = 'Save successfully';
                              var title = "Success !";
                              var type = "success";
                            } else if (response.status == 400) {
                              var msg = 'Save Unsuccessfully';
                              var title = "Alert !";
                              var type = "error";
                            }

              }else{

                if (response.status == 200) {
                              var msg = 'Update successfully';
                              var title = "Success !";
                              var type = "success";
                            } else if (response.status == 400) {
                              var msg = 'Update Unsuccessfully';
                              var title = "Alert !";
                              var type = "error";
                            }

              }

              setTimeout(function() {$('#modalData').modal('hide');}, 500);
                          toastrAlert(msg, title, type);
              getDataList();
            
            }
          });


      });

  </script>
@include('footer')