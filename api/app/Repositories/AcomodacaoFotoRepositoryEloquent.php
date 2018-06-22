<?php namespace App\Repositories;

use App\Repositories\Interfaces\AcomodacaoFotoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class AcomodacaoFotoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AcomodacaoFotoRepositoryEloquent extends BaseRepository implements AcomodacaoFotoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AcomodacaoFoto::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
