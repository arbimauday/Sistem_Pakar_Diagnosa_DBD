<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = "pengunjung";
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $guarded = [];
//    protected $fillable = ['fullName', 'gender', 'age', 'keterangan', 'diagnosaId', 'created_at'];
}
