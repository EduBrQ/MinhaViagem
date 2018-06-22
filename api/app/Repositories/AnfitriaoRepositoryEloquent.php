<?php namespace App\Repositories;

use App\Repositories\Interfaces\AnfitriaoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class AnfitriaoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AnfitriaoRepositoryEloquent extends BaseRepository implements AnfitriaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Anfitriao::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
