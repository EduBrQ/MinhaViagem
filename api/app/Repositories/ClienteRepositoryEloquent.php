<?php namespace App\Repositories;

use App\Repositories\Interfaces\ClienteRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class ClienteRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cliente::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
