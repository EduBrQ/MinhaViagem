<?php namespace App\Transformers;

use App\Entities\Acomodacoes\Acomodacao;

class AcomodacaoTransformer extends BaseTransformer
{
//    protected $defaultIncludes = ['produtos']; //Inclusões obrigatórias

//    protected $availableIncludes = ['formacoes', 'convenios', 'especialidades', 'locais', 'horarios']; //Inclusões optativas

    public function transform(Acomodacao $model)
    {
        return [
            'id' => (int)$model->id,
            'endereco_id' => $model->endereco_id,
            'anfitriao_id' => $model->anfitriao_id,
            'nome' => $model->nome,
            'qtd_quartos' => $model->qtd_quartos,
            'qtd_banheiros' => $model->qtd_banheiros,
            'qtd_camas' => $model->qtd_camas,
            'descricao' => $model->descricao,
            'valor' => $model->valor,
            'cancelamento' => $model->cancelamento,
            'created_at' => $model->created_at->format(\DateTime::ISO8601),
            'updated_at' => $model->updated_at->format(\DateTime::ISO8601)
        ];
    }

//    public function includeFormacoes(Medico $model){
//        if(!$model->formacoes){
//            return null;
//        }
//        return $this->collection($model->formacoes, new MedicoFormacaoTransformer());
//    }
//
//    public function includeConvenios(Medico $model){
//        if(!$model->convenios){
//            return null;
//        }
//        return $this->collection($model->convenios, new MedicoConvenioTransformer());
//    }
//
//    public function includeEspecialidades(Medico $model){
//        if(!$model->especialidades){
//            return null;
//        }
//        return $this->collection($model->especialidades, new MedicoEspecialidadeTransformer());
//    }
//
//    public function includeLocais(Medico $model){
//        if(!$model->local){
//            return null;
//        }
//        return $this->collection($model->local, new MedicoLocalTransformer());
//    }
//
//    //Modificando um pouco o padrão por força maior, desculpe-me
//    public function includeHorarios(Medico $model){
//        $horarios = new MedicoHorario();
//
//        return $this->collection($horarios->where('tipo', $model->horario)->get(), new MedicoHorarioTransformer());
//    }
}