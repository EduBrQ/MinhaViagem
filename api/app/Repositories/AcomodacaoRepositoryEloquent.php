<?php namespace App\Repositories;

use App\Entities\Acomodacoes\Acomodacao;
use App\Repositories\Interfaces\AcomodacaoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class AcomodacaoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AcomodacaoRepositoryEloquent extends BaseRepository implements AcomodacaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Acomodacao::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
