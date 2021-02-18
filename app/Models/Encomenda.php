<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    use HasFactory;
    protected $primaryKey="id_encomenda";
    protected $table="encomendas";

        public function cliente() {
return $this->hasMany('App\Models\Cliente', 'id_cliente');
}
    protected $fillable =[
        'id_cliente',
        'id_vendedor',
        'data',
        'observacoes',

  ];



}