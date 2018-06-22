<?php namespace App\Entities\Acomodacoes;

use App\Entities\Entity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class AcomodacaoComodidade.
 *
 * @package namespace App\Entities;
 */
class AcomodacaoComodidade extends Entity implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'acomodacao_id',
        'descricao',
        'icone'

    ];

    public function acomodacao()
    {
        return $this->belongsTo(Acomodacao::class, 'acomodacao_id');
    }
}
