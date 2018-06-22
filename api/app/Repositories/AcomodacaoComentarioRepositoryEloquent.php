<?php namespace App\Repositories;

use App\Repositories\Interfaces\AcomodacaoComentarioRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class AcomodacaoComentarioRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AcomodacaoComentarioRepositoryEloquent extends BaseRepository implements AcomodacaoComentarioRepository

{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AcomodacaoComentario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
