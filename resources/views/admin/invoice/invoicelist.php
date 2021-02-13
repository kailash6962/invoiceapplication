    <!-- Top Table UI -->

    <div class="card card-cascade narrower z-depth-1">
  <!-- Card image -->
  <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

<div>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
</div>

<a href="" class="white-text mx-3">Invoice List</a>

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
                    <th class="th-lg">Customer Name<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Bill No<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Item<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Quantity<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Bill Amt<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Date<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Status<i class="fas fa-sort ml-1"></i></th>
                    <th class="th-lg">Action<i class="fas fa-sort ml-1"></i></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                <?php  
              $invoicelist = $GLOBALS['connection']->query("SELECT * FROM invoices");$sno=0;
              while($invrow = $invoicelist->fetchObject()){$sno++;
                ?>
                  <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox1">
                      <label class="form-check-label" for="checkbox1" class="label-table"></label>
                    </th>
                    <td><?=$invrow->cust_name?></td>
                    <td><?=$invrow->id?></td>
                    <td><?=$invrow->item?></td>
                    <td><?=$invrow->quantity?></td>
                    <td><?=$invrow->price?></td>
                    <td><?=$invrow->status?></td>
                    <td><?=$invrow->date_added?></td>
                    <td>
                          <div>
                      <a  target="_blank" href='invoice?invno=<?=$invrow->id?>'><button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2"><i class="fas fa-print"></i></button></a>
                      <button onclick="getinvoicedata(this)" type="button" data-toggle="modal" data-target="#updateinvoice" id="<?=$invrow->id?>" class="btn btn-outline-blue btn-rounded btn-sm px-2"><i class="fas fa-rupee-sign"></i></button>
                    </div></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <!-- Table body -->
              </table>
              <hr class="my-0">
              <!-- Modal -->
              <div class="modal fade" id="updateinvoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <div class="form-group">
                            <label>Amount Due</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">&#8377;</div>
                              </div>
                              <input type="number" class="form-control" value="" name="amt_due" id="amt_due">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Amount Paid</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">&#8377;</div>
                              </div>
                              <input type="number" class="form-control" name="amt_due" id="amt_due" onkeyup="$('#pending').val(parseInt($('#amt_due').val())-$(this).val())">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Amount Pending</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">&#8377;</div>
                              </div>
                              <input type="number" class="form-control" name="pending" id="pending">
                            </div>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal end -->
            </div>

            <hr class="my-0">
          </div>