<?php

namespace App\Controllers;

use App\Models\MiPerfilModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MiPerfil extends BaseController
{
    public function index()
    {
        //$model = model(ProgramacionModel::class);
        $data = [
            'title' => 'Mi perfil',
        ];

        return 
            view('templates/yheader')
            . view('master/header')
            . view('master/headerMnuLeft')
            . view('miperfil/index', $data)
            . view('master/footer')
            . view('templates/yfooter');

    }

}