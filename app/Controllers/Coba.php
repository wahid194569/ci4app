<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Ini controller Coba method index';
    }

    public function about($nama = 'default', $umur = 0)
    {
        echo 'Ini controller Coba method $nama, ini berumur $umur';
    }

    public function me()
    {
        echo 'Ini controller Coba method me';
    }

    public function you()
    {
        echo 'Ini controller Coba method you';
    }
}
