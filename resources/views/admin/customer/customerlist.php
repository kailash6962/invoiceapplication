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
                    <th class="th-lg">Customer Code<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Customer Name<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Address<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Email<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Phone<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">No of Invoices<i class="fas fa-sort ml-1"></i></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                <?php  
              $customerlist = $GLOBALS['connection']->query("SELECT * FROM customers");$sno=0;
              while($customerrow = $customerlist->fetchObject()){$sno++;
                ?>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox1">
                      <label class="form-check-label" for="checkbox1" class="label-table"></label>
                    </th>
                    <td><?=$customerrow->cust_code?></td>
                    <td><?=$customerrow->cust_name?></td>
                    <td><?=$customerrow->address2?></td>
                    <td><?=$customerrow->email?></td>
                    <td><?=$customerrow->phno?></td>
                    <td><?=$customerrow->no_of_invoices?></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <!-- Table body -->
              </table>
              <hr class="my-0">
              <!-- Table -->
           </div>
        </div>
     </div>