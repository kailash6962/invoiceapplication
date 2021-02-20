@extends('admin.master')
@section('title', 'Customer Add')

@section('content')

  <div class="card ">
    <div class="card-header card bg-primary " style="color: azure; font-size: large; font-weight: 700;">
      Customers Details
    </div>
    <div class="card-body">

      <div class="row">


        <div class="col-sm-6">
        {{Form::open(array('url'=>'customer/store','method'=>'post'))}}
        <input type="text" class="d-none" name="username" id="username" value="{{Auth::user()->email}}" readonly>
              <!-- Grid column -->
          <div class="col-md-12 mb-4">

          <div class="md-form md-outline">
            <input type="text" id="f2" class="form-control" name="cust_code" id="cust_code" value="{{$custcode}}" readonly>
            <label for="f2" class="">Customer Code</label>
          </div>

          </div>
          <!-- Grid column -->
          <div class="col-md-12 mb-4">

          <div class="md-form md-outline">
          <input type="text" id="f2" class="form-control" required name="cust_name" id="cust_name">
          <label for="f2" class="">Customer Name</label>
          </div>

          </div>
          <!-- Grid column -->
          <div class="col-md-12 mb-4">

          <div class="md-form md-outline">
          <input type="text" id="f2" class="form-control" required  name="address1" id="address1">
          <label for="f2" class="">Address Line 1</label>
          </div>

          </div>
          <!-- Grid column -->
          <div class="col-md-12 mb-4">

          <div class="md-form md-outline">
          <input type="text" id="f2" class="form-control" required  name="address2" id="address2">
          <label for="f2" class="">Address Line 2</label>
          </div>

          </div>
          </div>
        <div class="col-sm-6">
         <!-- Email validation -->
            <div class="md-form md-outline">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" class="form-control validate" name="email" id="email">
                <label for="email" data-error="wrong" data-success="right" >Type your email</label>
              </div>
              <!-- Grid column -->
                      <div class="col-md-12 mb-4">

            <div class="md-form md-outline">
            <input type="text" class="form-control" required   name="phno" id="phno">
            <label for="phno" class="">Phone No</label>
            </div>

            </div>
           
        </div>
        </div>
        <div class="form-group mt-4 d-flex float-right">
         
          <button type="submit" id="addcustomer" class="btn btn-success mr-2">Submit</button>
          <button type="reset" class="btn btn-warning" >Clear</button>
         
        </div>
        {{Form::close()}}
    
    </div>

  </div>
  @endsection