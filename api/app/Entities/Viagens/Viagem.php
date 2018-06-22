<?php namespace App\Entities\Viagens;

use App\Entities\Entity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Viagem.
 *
 * @package namespace App\Entities;
 */
class Viagem extends Entity implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
