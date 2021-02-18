<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey="id_cliente";
    protected $table="clientes";

public function encomendas(){
        return $this->hasMany('App\Models\Encomenda', 'id_cliente');
    }
public function produtos(){
        return $this->hasMany('App\Models\Produto', 'id_produto');
    }
    public function encomendas_produtos(){
        return $this->hasMany('App\Models\Encomenda_produto', 'id_produto');
    }
    protected $fillable =[
            'nome',
            'morada',
            'telefone',
            'email',
            'imagem_capa',

  ];

}