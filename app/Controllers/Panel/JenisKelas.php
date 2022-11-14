<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class JenisKelas extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->model = model('JeniskelasModel');
    }

    public function index()
    {
        $this->data['items'] = $this->model->findAll();
        return view('App\Views\Backend\Page\jenisKelas', $this->data);
    }

    public function add()
    {
        return view('App\Views\Backend\Page\jenisKelasAdd', $this->data);
    }

    public function edit($id)
    {
        $this->data['item'] = $this->model->find($id);
        return view('App\Views\Backend\Page\jenisKelasEdit', $this->data);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }
}
