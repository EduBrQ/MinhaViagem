<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="localhost:8000/api",
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Documentação para a api do aplicativo de reserva de quartos",
 *         description="Descrição...",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="thiago.pablicio@nutes.uepb.edu.br"
 *         )
 *     )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
