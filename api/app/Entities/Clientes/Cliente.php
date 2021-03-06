<?php namespace App\Entities\Clientes;

use App\Entities\Entity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cliente.
 *
 * @package namespace App\Entities;
 */
class Cliente extends Entity implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'localizacao_id',
        'nome',
        'foto',
        'sexo',
        'nascimento',
        'email',
        'telefone',
        'celular',
        'idioma',
        'moeda_preferencial',
        'auto_descricao',
        'cpf'
    ];

    public function acomodacao(){
        return $this->belongsTo(Acomodacao::class, 'acomodacao_id');
    }
}
