<link rel="shortcut icon" type="image/jpg" href="{{ asset('img/ico/favicon.png') }}"/>
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<body>
<div id="container">

      <section id="memo">

        <div class="company-info">
          <span class="ibcl_company_name"></span>
          <!-- <span data-ibcl-id="company_name" class="ibcl_company_name" title="" data-original-title="Enter your company name"></span> -->

          <div class="separator less"></div>

          <span class="ibcl_company_address" title="Enter company's address" >{{$invoices[0]->cust_code}}</span>

          <br>

          <span class="ibcl_company_email_web" title="" data-original-title="Enter company's web and email address"></span> ||
          <span class="ibcl_company_phone_fax" title="" data-original-title="Enter company's contact phones">Phone : </span>
        </div>
      </section>

      <section id="invoice-title-number">
      
        <span id="title" data-ibcl-id="invoice_title" class="ibcl_invoice_title" title="Enter invoice title">BILL</span>
        <div class="separator"></div>
        <span id="number" data-ibcl-id="invoice_number" class="ibcl_invoice_number" title="Enter invoice number">#</span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="invoice-info">
        <div>
          <span data-ibcl-id="issue_date_label" class="ibcl_issue_date_label" title="Enter issue date label">Issue Date:</span>
          <span data-ibcl-id="due_date_label" class="ibcl_due_date_label" title="Enter invoice due date label">Due Date:</span>
          <span data-ibcl-id="net_term_label" class="ibcl_net_term_label" title="Enter net days label">Net:</span>
          <span data-ibcl-id="currency_label" class="ibcl_currency_label" title="" data-original-title="Enter invoice currency label">Currency:</span>
          <span data-ibcl-id="po_number_label" class="ibcl_po_number_label" title="" data-original-title="Enter P.O. label">P.O. #</span>
        </div>
        
        <div>
          <span data-ibcl-id="issue_date" class="ibcl_issue_date" title="" data-date="01/29/2021" data-original-title="Select invoice issue date"></span>
          <span data-ibcl-id="due_date" class="ibcl_due_date" title="Select invoice due date" data-date="02/19/2021"></span>
          <span data-ibcl-id="currency" class="ibcl_currency" title="Enter invoice currency">INR</span>
        </div>
      </section>
      
      <section id="client-info">
        <span data-ibcl-id="bill_to_label" class="ibcl_bill_to_label" title="Enter bill to label">Bill to:</span>
        <div>
          <span class="client-name ibcl_client_name" data-ibcl-id="client_name" title="Enter client name"></span>
        </div>
        
        <div>
          <span data-ibcl-id="client_address" class="ibcl_client_address" title="Enter client address"></span>
        </div>
        
        <div>
          <span data-ibcl-id="client_city_zip_state" class="ibcl_client_city_zip_state" title="Enter client city, zip, country"></span>
        </div>
        
        <div>
          <span data-ibcl-id="client_phone_fax" class="ibcl_client_phone_fax" title="Enter client pnone &amp; fax"></span>
        </div>
        
        <div>
          <span data-ibcl-id="client_email" class="ibcl_client_email" title="Enter client email"></span>
        </div>
        
        <div>
          <span data-ibcl-id="client_other" class="ibcl_client_other" title="Enter other client info">Attn: </span>
        </div>
      </section>
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tbody><tr>
            <th data-ibcl-id="item_row_number_label" class="ibcl_item_row_number_label" title=""></th> <!-- Dummy cell for the row number and row commands -->
            <th data-ibcl-id="item_description_label" class="ibcl_item_description_label" title="" data-original-title="Enter item header">Item</th>
            <th data-ibcl-id="item_quantity_label" class="ibcl_item_quantity_label" title="Enter quantity header">Quantity</th>
            <th data-ibcl-id="item_price_label" class="ibcl_item_price_label" title="Enter price header">Price</th>
            <th data-ibcl-id="item_discount_label" class="ibcl_item_discount_label" title="Enter discount header">Discount</th>
            <!-- <th data-ibcl-id="item_tax_label" class="ibcl_item_tax_label" title="Enter tax header">Tax</th> -->
            <th data-ibcl-id="item_line_total_label" class="ibcl_item_line_total_label" title="Enter line total header">Linetotal</th>
          </tr>
          
          <tr data-iterate="item">
            <td data-ibcl-id="item_row_number" class="ibcl_item_row_number" title="" style="position: relative;"><ib-span class="ib_row_commands" style="height:0px;"><ib-span class="ib_commands" style="display: none;"><ib-span class="ib_add" title="Insert row"><i class="fa fa-plus"></i></ib-span><ib-span class="ib_delete" title="Remove row"><i class="fa fa-minus"></i></ib-span><ib-span class="ib_move" title="Drag to reorder" style="cursor: move;"><i class="fa fa-sort"></i></ib-span></ib-span></ib-span><ib-span data-row-number="item_row_number">1</ib-span></td> <!-- Don't remove this column as it's needed for the row commands -->
            <td><span class="show-mobile ibcl_item_description_label" data-ibcl-id="item_description_label" title="Enter item header" style="display: inline;">Item</span> <span data-ibcl-id="item_description" class="ibcl_item_description" title="" data-original-title="Enter item description"></span></td>
            <td><span class="show-mobile ibcl_item_quantity_label" data-ibcl-id="item_quantity_label" title="Enter quantity header" style="display: inline;">Quantity</span> <span data-ibcl-id="item_quantity" class="ibcl_item_quantity" title="" data-original-title="Enter quantity"></span></td>
            <td><span class="show-mobile ibcl_item_price_label" data-ibcl-id="item_price_label" title="Enter price header" style="display: inline;">Price</span> <span data-ibcl-id="item_price" class="ibcl_item_price add_currency_left" title="Enter price" data-currency="">&#8377; </span></td>
            <td><span class="show-mobile ibcl_item_discount_label" data-ibcl-id="item_discount_label" title="Enter discount header" style="display: inline;">Discount</span> <span data-ibcl-id="item_discount" class="ibcl_item_discount" title="Enter discount"></span></td>
            <!-- <td><span class="show-mobile ibcl_item_tax_label" data-ibcl-id="item_tax_label" title="Enter tax header" style="display: inline;">Tax</span> <span data-ibcl-id="item_tax" class="ibcl_item_tax ib_item_percentage" title="Enter tax">2</span></td> -->
            <td><span class="show-mobile ibcl_item_line_total_label" data-ibcl-id="item_line_total_label" title="Enter line total header" style="display: inline;">Linetotal</span> <span data-ibcl-id="item_line_total" class="ibcl_item_line_total" title="">&#8377; </span></td>
          </tr>
          <!-- <ib-span class="ib_show_hide_columns" style="display: none;"><ib-span><input type="checkbox" value="item_row_number"><ib-span>Row number</ib-span></ib-span><ib-span><input type="checkbox" value="item_description"><ib-span>Item</ib-span></ib-span><ib-span><input type="checkbox" value="item_quantity"><ib-span>Quantity</ib-span></ib-span><ib-span><input type="checkbox" value="item_price"><ib-span>Price</ib-span></ib-span><ib-span><input type="checkbox" value="item_discount"><ib-span>Discount</ib-span></ib-span><ib-span><input type="checkbox" value="item_tax"><ib-span>Tax</ib-span></ib-span><ib-span><input type="checkbox" value="item_line_total"><ib-span>Linetotal</ib-span></ib-span></ib-span></ib-span> -->
          
        </tbody></table>
        
      </section>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tbody><tr>
            <th data-ibcl-id="amount_subtotal_label" class="ibcl_amount_subtotal_label" title="Enter subtotal label">Subtotal:</th>
            <td data-ibcl-id="amount_subtotal" class="ibcl_amount_subtotal" title="">&#8377; </td>
          </tr>
          
          <!-- <tr data-iterate="tax" style="display: none;">
            <th data-ibcl-id="tax_name" class="ibcl_tax_name" title="Enter tax label">Tax:</th>
            <td data-ibcl-id="tax_value" class="ibcl_tax_value" title=""></td>
          </tr> -->
          
          <tr class="amount-total">
            <th data-ibcl-id="amount_total_label" class="ibcl_amount_total_label" title="Enter total label">Total:</th>
            <td data-ibcl-id="amount_total" class="ibcl_amount_total" title="">&#8377; </td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesn't need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th data-ibcl-id="amount_paid_label" class="ibcl_amount_paid_label" title="Enter amount paid label">Paid:</th>
            <td data-ibcl-id="amount_paid" class="ibcl_amount_paid add_currency_left" title="Enter amount paid" data-currency="">&#8377; </td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th data-ibcl-id="amount_due_label" class="ibcl_amount_due_label" title="Enter amount due label">Amount Due:</th>
            <td data-ibcl-id="amount_due" class="ibcl_amount_due" title="">&#8377; </td>
          </tr>
          
        </tbody></table>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="terms">
      
        <span class="hidden ibcl_terms_label" data-ibcl-id="terms_label" title="Enter terms and notes label">Terms &amp; Notes</span>
        <div data-ibcl-id="terms" class="ibcl_terms" title="" data-original-title="Enter invoice terms and notes">Fred, thank you very much. We really appreciate your business.<br>Please send payments before the due date.</div>
        
      </section>

      <div class="payment-info">
        <div data-ibcl-id="payment_info1" class="ibcl_payment_info1" title="Enter your payment details">Payment details:</div>
        <div data-ibcl-id="payment_info2" class="ibcl_payment_info2" title="Enter other payment details">ACC:311601000000988</div>
        <div data-ibcl-id="payment_info3" class="ibcl_payment_info3" title="Enter other payment details">IFSC: IOBA0003116</div>
        <!-- <div data-ibcl-id="payment_info4" class="ibcl_payment_info4" title="Enter other payment details">SWIFT:BOA447</div> -->
        <div data-ibcl-id="payment_info5" class="ibcl_payment_info5" title="Enter other payment details"></div>
      </div>

      <div class="bottom-circles">
        <section>
          <div>
            <div></div>
          </div>
          <div>
            <div>
              <div>
                <div></div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
 <!-- Jquery and ajax -->
 <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
 <!-- pdf maker -->
 <script src="{{ asset('pdf/dom-to-image.min.js') }}"></script>
<script src="{{ asset('pdf/jspdf.min.js') }}"></script>
<script>
  var filename ="Invoice-# to  on ";
//   domtoimage.toPng(document.getElementById('container'))
//         .then(function (blob) {
//             var pdf = new jsPDF('0', 'pt', [615, 860]);

//             pdf.addImage(blob, 'PNG', 0, 0, 0, 0,'','MEDIUM');
//             pdf.save(""+filename+".pdf");
//             that.options.api.optionsChanged();
//         });
</script>
</body>