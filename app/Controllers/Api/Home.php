<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Entities\Siswa;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\SiswaModel();
    }

    public function pendaftaran()
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
            return redirect()->back()->with('message', 'Pendaftaran Berhasil');
        } else {
            return redirect()->back()->with('error', 'Pendaftaran Gagal');
        }
    }
}
