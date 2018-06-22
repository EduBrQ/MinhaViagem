<?php namespace App\Entities\Localizacoes;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Localizacao.
 *
 * @package namespace App\Entities;
 */
class Localizacao extends Entity implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
