<?php namespace App\Entities\Arquivos;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ArquivoAcomodacao.
 *
 * @package namespace App\Entities;
 */
class ArquivoAcomodacao extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
