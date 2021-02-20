<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
         /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'item_code', 'item_name', 'item_price', 'username', 'date_added', 'date_modified'
    ];
}
