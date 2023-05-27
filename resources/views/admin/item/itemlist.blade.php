@extends('admin.master')
@section('title', 'Customer list')

@section('content')
  <!-- Top Table UI -->
    <div class="card card-cascade narrower z-depth-1">
  <!-- Card image -->
  <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
<div>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
</div>

<a href="" class="white-text mx-3">Customer List</a>

<div>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button>
</div>

</div>
          <!-- /Card image -->

          <div class="px-4">

            <div class="table-responsive">
              <!-- Table -->
              <table class="table table-hover mb-0" id="data-table">

                <!-- Table head -->
                <thead>
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox" id="checkbox">
                      <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                    </th>
                    <th class="th-lg">Item Code<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Item Name<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Price<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Added Date<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Last updated Date<i class="fas fa-sort ml-1"></i></th>
                  </tr>
                </thead>
                <!-- Table head -->
                <!-- Table body -->
                <tbody>
                @foreach($items as $item)
                  <tr>
                    <td scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox1">
                      <label class="form-check-label" for="checkbox1" class="label-table"></label>
                    </td>
                    <td>{{$item->item_code}}</td>
                    <td>{{$item->item_name}}</td>
                    <td>{{$item->item_price}}</td>
                    <td>{{$item->date_added}}</td>
                    <td>{{$item->date_modified}}</td>
                  </tr>
                @endforeach
                </tbody>
                <!-- Table body -->
              </table>
              <hr class="my-0">
              <!-- Table -->
           </div>
        </div>
     </div>
     @endsection