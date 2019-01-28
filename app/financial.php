<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class financial extends Model
{
    //
    protected $table = 'financial_table';
    protected $fillable = ['last_price','symbol1','symbol2'];
}
