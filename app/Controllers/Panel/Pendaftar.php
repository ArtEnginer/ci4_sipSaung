<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Pendaftar extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->model = model('SiswaModel');
    }

    public function index()
    {
        $this->data['items'] = $this->model->findAll();
        return view('App\Views\Backend\Page\pendaftar', $this->data);
    }

    public function add()
    {
        return view('App\Views\Backend\Page\pendaftarAdd', $this->data);
    }

    public function edit($id)
    {
        $this->data['item'] = $this->model->find($id);
        return view('App\Views\Backend\Page\pendaftarEdit', $this->data);
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }

    public function detail($id){
        $this->data['item'] = $this->model->find($id);
        // dd($this->data['item']);
        return view('App\Views\Backend\Page\pendaftarDetail', $this->data);
    }

    public function konfirm($id)
    {
        $item = $this->model->find($id);
        $item->status = 200;
        $this->model->save($item);
        return redirect()->back()->with('message', 'Data Berhasil Dikonfirmasi');
    }

    public function tolak($id)
    {
        $item = $this->model->find($id);
        $item->status = 300;
        $this->model->save($item);
        return redirect()->back()->with('message', 'Data Berhasil Ditolak');
    }

    public function pending($id)
    {
        $item = $this->model->find($id);
        $item->status = 100;
        $this->model->save($item);
        return redirect()->back()->with('message', 'Data Berhasil Dipending');
    }
}
