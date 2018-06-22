<?php namespace App\Entities\Anuncios;

use App\Entities\Entity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Anuncio.
 *
 * @package namespace App\Entities;
 */
class Anuncio extends Entity implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
