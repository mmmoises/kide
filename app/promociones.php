<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promociones extends Model
{
    protected $table = "Promociones";
    protected $primaryKey = "id_promo";
    public $timestamps = false;

}
