<?php namespace App\Entities\Arquivos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ArquivoUser.
 *
 * @package namespace App\Entities;
 */
class ArquivoUser extends Model implements Transformable, ArquivoInterface
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function upload($request)
    {
        $file = file_get_contents($request->arquivo->path());

        $file_name = 'user' . DIRECTORY_SEPARATOR . str_random(20) . DIRECTORY_SEPARATOR . $request->arquivo->getClientOriginalName();

        $url = self::saveFileToStorage($file_name, $file);

        self::createUserArquivo($url,  $request->arquivo->getClientOriginalName(),$request->user_id);
    }

    public function createUserArquivo($link, $file_name, $user_id = null)
    {
        self::create([
            'user_id' => $user_id,
            'nome' => $file_name,
            'link' => $link
        ]);
    }

    public function saveFileToStorage($file_name, $file)
    {
        self::put($file_name, $file);

        return Storage::url($file_name);
    }
}
