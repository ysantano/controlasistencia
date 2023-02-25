<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        return view('templates/yheader')
            . view('master/header')
            . view('master/headerMnuLeft')
            . view('principal/index')
            . view('master/footer')
            . view('templates/yfooter');
    }
}
