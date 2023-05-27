@extends('admin.master')
@section('title', 'Item Add')

@section('content')

@if(Session::has('success'))
<!-- show toast message -->
<script> 
    var message = '{{session('success')}}';
    toastr.success(message); 
</script>
@endif

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
        {{Form::open(array('url'=>'item/store','method'=>'post'))}}
          <div class="form-group">
              <label>Item Code</label>
              <input type="text" class="form-control" value="{{$itemcode}}" name="item_code" id="item_code" readonly>
            </div>
            <div class="form-group">
              <label>Item Name</label>
              <input type="text" class="form-control" name="item_name" id="item_name" placeholder="" autofocus>
            </div>
            <div class="form-group">
              <label>Item Price</label>
              <input type="text" class="form-control" name="item_price" id="item_price" placeholder="">
            </div>
          </div>
        <div class="col-sm-6">
        </div>
        </div>
        <div class="form-group mt-4 d-flex float-right">
          <button type="submit" name="saveitem" class="btn btn-success mr-2">Save</button>
          <button type="reset" class="btn btn-warning">Clear</button>
        </div>
        {{Form::close()}}
    </div>
  </div>
  @endsection