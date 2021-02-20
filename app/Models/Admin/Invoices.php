<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invoices';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'cust_code', 'cust_name', 'inv_no', 'address', 'inv_amt', 'status', 'item', 'price', 'quantity', 'amt_paid', 'amt_due', 'attender', 'user_name',' date_added'
    ];
}
