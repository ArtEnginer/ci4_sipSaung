<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Entities\Jeniskelas as entity;

class JenisKelas extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\JeniskelasModel();
    }

    public function add()
    {
        $data = $this->request->getPost();

        $Rules = [
            'nama' => 'required',
            'deskripsi' => 'required',
        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            return redirect()->back()->withInput()->with('error', $error);
        }

        $item = new entity($data);
        if ($this->model->save($item)) {
            return redirect()->back()->with('message', 'Data Berhasil Ditambahakan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function edit($id)
    {
        $data = $this->request->getPost();

        $Rules = [
            'nama' => 'required|is_unique[ps_jenis_kelas.nama,id,' . $id . ']',
            'deskripsi' => 'required',
        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            return redirect()->back()->withInput()->with('error', $error);
        }

        $data = $this->request->getPost();
        $item = $this->model->find($id);
        $item->fill($data);
        if ($item->hasChanged()) {
            if ($this->model->save($item)) {
                return redirect()->back()->with('message', 'Data Berhasil Diubah');
            } else {
                return redirect()->back()->with('error', 'Data Gagal Diubah');
            }
        } else {
            return redirect()->back()->with('message', 'Data Tidak Ada Perubahan');
        }
    }
}
