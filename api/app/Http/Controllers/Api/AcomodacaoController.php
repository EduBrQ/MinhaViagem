<?php namespace App\Http\Controllers\Api;

use App\Criteria\AcomodacaoCriteria;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\AcomodacaoRepository;


class AcomodacaoController extends Controller
{

    protected $repository;

    public function __construct(AcomodacaoRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @SWG\Get(
     *   path="/acomodacoes",
     *   tags={"Acomodações"},
     *   summary="Lista todas as acomodações",
     *   operationId="getAllAcomodacoes",
     *   @SWG\Response(response=200, description="Sucesso"),
     *   @SWG\Response(response=405, description="Não autorizado"),
     * )
     *
     */
    public function index()
    {
        $this->repository->pushCriteria(new AcomodacaoCriteria);
        return $this->repository->scopeQuery(function($query){
            return $query->take(50);
        })->paginate(2);
    }

    /**
     * @SWG\Get(
     *   path="/acomodacoes/{id}",
     *   tags={"Acomodações"},
     *   summary="Mostra uma acomodação",
     *   operationId="getAcomodacao",
     *   @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     description="Mostra uma acomodação.",
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Response(response=200, description="Sucesso"),
     *   @SWG\Response(response=405, description="Não autorizado"),
     * )
     *
     */
    public function show($id)
    {
        $this->repository->pushCriteria(new AcomodacaoCriteria());
        return $this->repository->find($id);
    }
}
