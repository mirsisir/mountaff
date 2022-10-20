<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerQuerys extends Model
{
    


    protected $table = 'customer_querys';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'subject',
                  'email',
                  'message',
                  'is_read'
              ];


    protected $dates = [];


    protected $casts = [];




}
