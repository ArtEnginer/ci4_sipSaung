<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->model = model('SiswaModel');
    }

    public function index()
    {
        $this->data['items'] = $this->model->where('status', 200)->findAll();
        return view('App\Views\Backend\Page\siswa', $this->data);
    }

   
}
