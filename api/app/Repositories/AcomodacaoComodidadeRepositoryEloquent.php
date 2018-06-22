<?php namespace App\Repositories;

use App\Repositories\Interfaces\AcomodacaoComodidadeRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class AcomodacaoComodidadeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AcomodacaoComodidadeRepositoryEloquent extends BaseRepository implements AcomodacaoComodidadeRepository

{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AcomodacaoComodidade::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
