<?php namespace App\Providers;

use App\Entities\Acomodacoes\Acomodacao;
use App\Transformers\AcomodacaoTransformer;
use Dingo\Api\Exception\Handler;
use Dingo\Api\Transformer\Adapter\Fractal;
use Dingo\Api\Transformer\Factory;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use League\Fractal\Manager;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->registerHandlers();
        $this->registerTransforms();


    }
    public function registerTransforms()
    {
        $transformer = app(Factory::class);
        $transformer->setAdapter(function($app){
            return new Fractal(new Manager(),'include',',',false);
        });
        $transformer->register(Acomodacao::class, AcomodacaoTransformer::class);
    }


    public function registerHandlers()
    {
        $handler = app(Handler::class);

        $handler->register(function (AuthenticationException $exception) {
            return response()
                ->json([
                    'error' => 'Não Autenticado'
                ], 401);
        });

        $handler->register(function (JWTException $exception) {
            return response()->json([
                'error' => $exception->getMessage()
            ], 401);
        });

        $handler->register(function (ValidationException $exception) {
            return response()->json([
                'error' => $exception->getMessage(),
                'validation_errors' => $exception->validator->getMessageBag()->toArray()
            ], 422);
        });
    }
}