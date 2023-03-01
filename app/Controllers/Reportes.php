<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Reportes extends BaseController
{
    public function asistencia()
    {
        $data = [
            'title' => 'Reporte de asistencia',
        ];

        return 
            view('templates/yheader')
            . view('master/header')
            . view('master/headerMnuLeft')
            . view('reportes/asistencia', $data)
            . view('master/footer')
            . view('templates/yfooter');
    }

    public function permisos()
    {
        $data = [
            'title' => 'Reporte de permisos',
        ];

        return 
            view('templates/yheader')
            . view('master/header')
            . view('master/headerMnuLeft')
            . view('reportes/permisos', $data)
            . view('master/footer')
            . view('templates/yfooter');
    }

    public function incidencias()
    {
        $data = [
            'title' => 'Reporte de incidencias',
        ];

        return 
            view('templates/yheader')
            . view('master/header')
            . view('master/headerMnuLeft')
            . view('reportes/incidencias', $data)
            . view('master/footer')
            . view('templates/yfooter');
    }

    public function estadisitcas()
    {
        $data = [
            'title' => 'Reporte de estadisitcas',
        ];

        return 
            view('templates/yheader')
            . view('master/header')
            . view('master/headerMnuLeft')
            . view('reportes/estadisitcas', $data)
            . view('master/footer')
            . view('templates/yfooter');
    }

}