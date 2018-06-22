<?php namespace App\Repositories;

use App\Repositories\Interfaces\AcomodacaoCamaTipoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class AcomodacaoCamaTipoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AcomodacaoCamaTipoRepositoryEloquent extends BaseRepository implements AcomodacaoCamaTipoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AcomodacaoCamaTipo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
