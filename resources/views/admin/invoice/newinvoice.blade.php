@extends('admin.master')
@section('title', 'New Invoice')

@section('content') 
  <!-- Card image -->
  <div class="card card-cascade narrower z-depth-1">

  <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

<div>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
</div>

<a href="" class="white-text mx-3">New Invoice</a>

<div>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>
</div>

</div>
          <!-- /Card image -->
    <div class="card-body">

      <div class="row">
        <div class="col-sm-6">
        {{Form::open(array('url'=>'createinvoice','method'=>'post','id'=>'newinvoice-form'))}}
          <div class="form-group">
              <label>Customer Name</label>
              <input type="text" class="form-control" autofocus name="cust_name" id="cust_name" placeholder="Eg: Megamart" onkeyup="getcustdetails(this.value);">
              <p id="cust_name_val" class="form_valid_strings">Please enter Shop Name.</p>
            </div>
            <div class="form-group">
              <label>Customer Code</label>
              <input type="text" class="form-control" name="cust_code" id="cust_code" placeholder="" readonly>
            </div>
            <div class="form-group">
              <label>Address Line 1</label>
              <input type="text" class="form-control" name="address" id="address1" placeholder="Eg: Plot no, Street" readonly>
            </div>
            <div class="form-group">
              <label>Item</label>
              <input type="text" class="form-control" name="item" id="item" placeholder="" onkeyup="$('#item_val').css('display','none');">
              <p id="item_val" class="form_valid_strings">Please enter Product.</p>
            </div>
            <div class="form-group">
              <label>Quantity</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">Pcs</div>
              </div>
              <input type="number" class="form-control" required name="quantity" id="quantity" placeholder="" onkeyup="$('#quantity_val').css('display','none');calculateamount();">
            </div>
              <p id="quantity_val" class="form_valid_strings">Please enter Quantity.</p>
            </div>
          </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label>Rate per Item</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">&#8377;</div>
              </div>
              <input type="number" class="form-control" required name="price" id="rate" placeholder="" onkeyup="$('#rate_val').css('display','none');calculateamount();">
              <p id="rate_val" class="form_valid_strings">Please enter Product Rate.</p>
            </div>
          </div>
            <div class="form-group">
              <label>Grand Total</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">&#8377; </div>
              </div>
              <input type="text" class="form-control" name="inv_amt" id="grand_amt" placeholder="" readonly>
              <p id="grand_val" class="form_valid_strings">Amount Invalid.</p>
            </div>
            </div>
            <div class="form-group">
              <label>Amount Paid</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">&#8377; </div>
              </div>
              <input type="number" class="form-control" name="amt_paid" id="amt_paid" placeholder="" onkeyup="calculatepending()">
            </div>
            </div>
            <div class="form-group">
              <label>Pending</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">&#8377; </div>
              </div>
              <input type="text" class="form-control" name="amt_due" id="amt_due" placeholder="" readonly>
            </div>
            </div>
        </div>
        </div>
        <div class="form-group mt-4 d-flex float-right">
          <input type="text" class="hidden" name="status" id="status">
          <button type="button" id="newinvoice" class="btn btn-success mr-2">Submit</button>
          <button type="reset" class="btn btn-warning" >Clear</button>
        </div>
        {{Form::close()}}
    </div>
  </div>

  <!-- for autocomplete -->
<script>
    var customers = [
      @foreach($customers as $customer)
      '{{$customer->cust_name}}',
      @endforeach
    ];
    autocomplete('#cust_name',customers);
</script>
<!-- get customer details -->
<script>
      function getcustdetails(cust_name){
        $.ajax({
            url:"getcustdetails",
            method:"GET",
            data:{cust_name},
            dataType:"text",
            success:function(data)
            {
              var obj = JSON.parse(data);
              $('#cust_code').val(obj.cust_code);
              $('#address1').val(obj.address1);
            }
            });
      }
  </script>
  <!-- make event on dropdown -->
  <script>
      $(document).on('click', '.ui-menu-item', function() {
        getcustdetails($(this).text().trim());
        });
  </script>
  <script>
$('#newinvoice').click(function(){
    if($('#cust_name').val().trim()==''){
        $('#cust_name_val').css('display','block');
        $('#cust_name').focus();
        return false;
    }
    else if($('#item').val().trim()==''){
        $('#item_val').css('display','block');
        $('#item').focus();
        return false;
    }
    else if($('#rate').val().trim()==''){
        $('#rate_val').css('display','block');
        $('#rate').focus();
        return false;
    }
    else if($('#quantity').val().trim()==''){
        $('#quantity_val').css('display','block');
        $('#quantity').focus();
        return false;
    }
    else if($('#grand_amt').val().trim()==''){
        $('#grand_val').css('display','block');
        $('#quantity').focus();
        return false;
    }
    else{
     getalert();
    }
});
</script>
<script>
    function calculateamount(){
        var grand_total = parseFloat($('#quantity').val()) * parseFloat($('#rate').val());
        $('#grand_amt').val(grand_total);
        $('#amt_paid').val(grand_total);
        $('#amt_due').val('0');
    }
</script>
<script>
    function getalert(){
       Swal.fire({
        title: 'Are You Sure! Invoice Details is Verified...Invoice to '+$('#cust_name').val()+' and Total Amount is '+$('#grand_amt').val(),
        //showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Save`,
        denyButtonText: `Don't save`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire('Saved!', '', 'success');
            $('#newinvoice-form').submit();
        } 
        // else if (result.isDenied) {
        //     Swal.fire('Changes are not saved', '', 'info')
        // }
        })
    }
  </script>
  <script>
  function calculatepending(){
      $('#amt_due').val(parseInt($('#grand_amt').val()) - parseInt($('#amt_paid').val()));
  }
  </script>
@endsection