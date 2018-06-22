<?php namespace App\Repositories;

use App\Repositories\Interfaces\AcomodacaoRegraRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class AcomodacaoRegraRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AcomodacaoRegraRepositoryEloquent extends BaseRepository implements AcomodacaoRegraRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AcomodacaoRegra::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
