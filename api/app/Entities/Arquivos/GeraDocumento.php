<?php namespace App\Entities\Arquivos;

class GeraDocumento
{
    public static function generateDoc($contrato,$tipo)
    {
        $view = ContratoManager::getViewPdfByTipo($tipo);

        $pdf = PDF::loadView($view, compact('contrato'))
            ->setPaper('A4', 'portrait');

        $file_name = date('Y-m-d') . '_' . $view . '.pdf';

        $file = str_random(20) . DIRECTORY_SEPARATOR . $file_name;

        $arquivo = new ArquivoClienteContrato();

        $url = $arquivo->saveFileToStorage($file, $pdf->output());

        $arquivo->createClienteContratoArquivo($url, $file_name ,$contrato->id);

        return $pdf;
    }

}