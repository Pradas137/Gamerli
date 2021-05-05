@section('breadcrumbs')
  {{ Breadcrumbs::render('ranking') }}
@endsection
<x-app-layout>
<script src="{{asset('js/breadcrumb.js')}}"></script>
<div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="offset-md-3 col-md-6 section">
                <h2>Ajax Request Example Laravel 8</h2>
                <div class="alert alert-success alert-block" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong class="success-msg"></strong>
                </div>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        <span class="text-danger error-text email_err"></span>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        <span class="text-danger error-text password_err"></span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                        <span class="text-danger error-text address_err"></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-submit").click(function(e){
                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var email = $("#email").val();
                var pswd = $("#pwd").val();
                var address = $("#address").val();

                $.ajax({
                    url: "{{ route('ajax.request.store') }}",
                    type:'POST',
                    data: {_token:_token, email:email, pswd:pswd,address:address},
                    success: function(data) {
                      printMsg(data);
                    }
                });
            }); 

            function printMsg (msg) {
              if($.isEmptyObject(msg.error)){
                  console.log(msg.success);
                  $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
              }else{
                $.each( msg.error, function( key, value ) {
                  $('.'+key+'_err').text(value);
                });
              }
            }
        });
    </script>
  <!--<script src="{{asset('js/studentcrud.js')}}"></script>-->
</x-app-layout>
