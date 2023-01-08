<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistribusiF extends Model
{
    use HasFactory;
    protected $fillable =['data','Frekuensi'];
    public $timestamps=false;
    
}
