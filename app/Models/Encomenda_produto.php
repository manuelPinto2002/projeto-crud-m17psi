<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomenda_produto extends Model
{
    use HasFactory;
    protected $primaryKey="id_enc_prod";
    protected $table="encomendas_produtos";

        public function cliente() {
return $this->hasMany('App\Models\Cliente', 'id_cliente');
}

  protected $fillable =[
        'id_produto',
        'id_encomenda',
        'quantidade',
        'preco',
        'desconto',

  ];

}
