<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    public $table = "tbl_reservasi";
    
    protected $primaryKey = 'id_reservasi';

    protected $guarded = [
    	'id_reservasi'
    ];
}
