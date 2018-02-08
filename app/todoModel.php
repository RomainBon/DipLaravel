<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todoModel extends Model
{
    //
      protected $casts =
      [
        'isDone' => 'boolean'
      ];
}
