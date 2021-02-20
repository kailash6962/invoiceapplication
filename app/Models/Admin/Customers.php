<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'cust_code', 'cust_name', 'address1', 'address2', 'phno', 'email', 'no_of_invoices',' date_added'
    ];
}
