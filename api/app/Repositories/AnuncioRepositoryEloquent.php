<?php namespace App\Repositories;

use App\Repositories\Interfaces\AnuncioRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class AnuncioRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AnuncioRepositoryEloquent extends BaseRepository implements AnuncioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Anuncio::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
