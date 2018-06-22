<?php namespace App\Entities\Arquivos;


class ArquivoFactory
{
    protected $listaDeTipos;

    public function __construct()
    {
        $this->listaDeTipos = [
            'contrato'          =>   ArquivoClienteContrato::class,
            'correspondencia'   =>   ArquivoCorrespondencia::class,
            'usuario'           =>   ArquivoUser::class

        ];
    }

    public function createArquivo($tipo)
    {
        if (!array_key_exists($tipo, $this->listaDeTipos)) {
            throw new \InvalidArgumentException("$tipo Não é um arquivo válido");
        }

        $className = $this->listaDeTipos[$tipo];
        return new $className();
    }
}