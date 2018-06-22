<?php namespace App\Entities\Acomodacoes;

use App\Entities\Entity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class AcomodacaoComentario.
 *
 * @package namespace App\Entities;
 */
class AcomodacaoComentario extends Entity implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'acomodacao_id',
        'cliente_id',
        'avaliacao',
        'texto'
    ];

    public function acomodacao(){
        return $this->belongsTo(Acomodacao::class, 'acomodacao_id');
    }
}
