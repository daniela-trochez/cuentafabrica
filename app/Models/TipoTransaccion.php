<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTransaccion extends Model
{
    use HasFactory;


   
    public $timestamps = false;

   
    protected $fillable = ['name'];

 
    public function transaccions()
    {
        return $this->hasMany(Transaccion::class);
    }
}


