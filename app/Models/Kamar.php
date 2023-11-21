<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    public $table = "tbl_kamar";
    
    protected $primaryKey = 'id_kamar';

    protected $guarded = [
    	'id_kamar'
    ];
}
