<?php namespace App\Repositories;

use App\Entities\Localizacoes\Localizacao;
use App\Repositories\Interfaces\LocalizacaoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class LocalizacaoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class LocalizacaoRepositoryEloquent extends BaseRepository implements LocalizacaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Localizacao::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
