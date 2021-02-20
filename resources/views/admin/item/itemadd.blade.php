@extends('admin.master')
@section('title', 'Item Add')

@section('content')
     <!-- Card image -->
<div class="card card-cascade narrower z-depth-1">

  <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

<div>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
</div>

<a href="" class="white-text mx-3">Item Add</a>

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
          <form method="POST" id="newinvoice-form" autocomplete="off">
          <div class="form-group">
              <label>Shop Name</label>
              <input type="text" class="form-control" autofocus name="cust_name" id="cust_name" placeholder="Eg: Megamart" onkeyup="$('#cust_name_val').css('display','none');getcustdetails($(this).val());">
              <p id="cust_name_val" class="form_valid_strings">Please enter Shop Name.</p>
            </div>
            <div class="form-group">
              <label>Shop Code</label>
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
              <input type="text" class="form-control" name="quantity" id="quantity" onkeyup="$('#quantity_val').css('display','none');">
              <p id="quantity_val" class="form_valid_strings">Please enter Quantity.</p>
            </div>
          </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label>Rate per Item</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">1pcs</div>
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
              <input type="text" class="form-control" name="amt_paid" id="amt_paid" placeholder="" onkeyup="calculatepending()">
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
        </form>
    </div>
  </div>
  @endsection