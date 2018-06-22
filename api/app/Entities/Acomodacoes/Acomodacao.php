<?php namespace App\Entities\Acomodacoes;

use App\Entities\Entity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Acomodacao.
 *
 * @package namespace App\Entities;
 */
class Acomodacao extends Entity implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'endereco_id',
        'anfitriao_id',
        'nome',
        'qtd_quartos',
        'qtd_banheiros',
        'qtd_camas',
        'descricao',
        'valor',
        'cancelamento'
    ];

    public function fotos(){
        return $this->hasMany(AcomodacaoFoto::class, 'acomodacao_id');
    }

    public function comentarios(){
        return $this->hasMany(AcomodacaoComentario::class, 'acomodacao_id');
    }

    public function regras(){
        return $this->hasMany(AcomodacaoRegra::class, 'acomodacao_id');
    }

    public function camasTipos(){
        return $this->hasMany(AcomodacaoCamaTipo::class, 'acomodacao_id');
    }

    public function comodidades(){
        return $this->hasMany(AcomodacaoComodidade::class, 'acomodacao_id');
    }

    public function anfitriao(){
        return $this->belongsTo(AcomodacaoComodidade::class, 'anfitriao_id');
    }

    public function localizacao(){
        return $this->belongsTo(AcomodacaoComodidade::class, 'localizacao_id');
    }
}
