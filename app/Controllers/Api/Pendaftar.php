<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Entities\Siswa;

class Pendaftar extends BaseController
{
    public function __construct()
    {
        $this->model = model('SiswaModel');
    }

    public function add()
    {
        $data = $this->request->getPost();

        $Rules = [
            'nama' => 'required',
            'nisn' => 'required|is_unique[ps_siswa.nisn]',
            'nik' => 'required|is_unique[ps_siswa.nik]',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'email' => 'required|is_unique[ps_siswa.email]',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            //    redirect back with input
            return redirect()->back()->withInput()->with('error', $error);
        }

        $item = new Siswa($data);
        if ($this->model->save($item)) {
            return redirect()->route('pendaftar')->with('message', 'Pendaftaran Berhasil');
        } else {
            return redirect()->back()->with('error', 'Pendaftaran Gagal');
        }
    }

    public function edit($id)
    {
        $data = $this->request->getPost();

        $Rules = [
            'nama' => 'required',
            'nisn' => 'required|is_unique[ps_siswa.nisn,id,' . $id . ']',
            'nik' => 'required|is_unique[ps_siswa.nik,id,' . $id . ']',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'email' => 'required|is_unique[ps_siswa.email,id,' . $id . ']',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            //    redirect back with input
            return redirect()->back()->withInput()->with('error', $error);
        }

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
