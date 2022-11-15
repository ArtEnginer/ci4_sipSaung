<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Entities\Tentang as entity;

class Pengaturan extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\TentangModel();
    }

    public function judulEdit()
    {
        $Rules = [
            'judul' => 'required',
        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            return redirect()->back()->withInput()->with('error', $error);
        }

        $data = $this->request->getPost();
        $item = $this->model->find(1);
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

    // pengaturan-deskripsi-edit
    public function deskripsiEdit()
    {
        $Rules = [
            'deskripsi' => 'required',
        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            return redirect()->back()->withInput()->with('error', $error);
        }

        $data = $this->request->getPost();
        $item = $this->model->find(1);
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

    public function sosmedAdd()
    {
        $data = $this->request->getPost();
        $item = $this->model->find(1);
        $sosmed = json_decode($item->sosmed);
        $data = [
            'jenis' => $data['jenis'],
            'isi' => $data['isi'],
        ];
        $sosmed[] = $data;
        $item->sosmed = json_encode($sosmed);
        if ($this->model->save($item)) {
            return redirect()->route('pengaturan')->with('message', 'Data Berhasil ditambahkan');
        } else {
            return redirect()->route('pengaturan')->with('error', 'Data Gagal ditambahkan');
        }
    }

    public function sosmedEdit($id)
    {
        $data = $this->request->getPost();
        $item = $this->model->find(1);
        $sosmed = json_decode($item->sosmed);
        $data = [
            'jenis' => $data['jenis'],
            'isi' => $data['isi'],
        ];
        $sosmed[$id] = $data;
        $item->sosmed = json_encode($sosmed);
        if ($this->model->save($item)) {
            return redirect()->route('pengaturan')->with('message', 'Data Berhasil diubah');
        } else {
            return redirect()->route('pengaturan')->with('error', 'Data Gagal diubah');
        }
    }


    public function alamatAdd()
    {
        $data = $this->request->getPost();
        $item = $this->model->find(1);
        $alamat = json_decode($item->alamat);
        $data = [
            'jenis' => $data['jenis'],
            'isi' => $data['isi'],
        ];
        $alamat[] = $data;
        $item->alamat = json_encode($alamat);
        if ($this->model->save($item)) {
            return redirect()->route('pengaturan')->with('message', 'Data Berhasil ditambahkan');
        } else {
            return redirect()->route('pengaturan')->with('error', 'Data Gagal ditambahkan');
        }
    }

    public function alamatEdit($id)
    {
        $data = $this->request->getPost();
        $item = $this->model->find(1);
        $alamat = json_decode($item->alamat);
        $data = [
            'jenis' => $data['jenis'],
            'isi' => $data['isi'],
        ];
        $alamat[$id] = $data;
        $item->alamat = json_encode($alamat);
        if ($this->model->save($item)) {
            return redirect()->route('pengaturan')->with('message', 'Data Berhasil diubah');
        } else {
            return redirect()->route('pengaturan')->with('error', 'Data Gagal diubah');
        }
    }

    public function contactAdd()
    {
        $data = $this->request->getPost();
        $item = $this->model->find(1);
        $contact = json_decode($item->contact);
        $data = [
            'jenis' => $data['jenis'],
            'isi' => $data['isi'],
        ];
        $contact[] = $data;
        $item->contact = json_encode($contact);
        if ($this->model->save($item)) {
            return redirect()->route('pengaturan')->with('message', 'Data Berhasil ditambahkan');
        } else {
            return redirect()->route('pengaturan')->with('error', 'Data Gagal ditambahkan');
        }
    }

    public function contactEdit($id)
    {
        $data = $this->request->getPost();
        $item = $this->model->find(1);
        $contact = json_decode($item->contact);
        $data = [
            'jenis' => $data['jenis'],
            'isi' => $data['isi'],
        ];
        $contact[$id] = $data;
        $item->contact = json_encode($contact);
        if ($this->model->save($item)) {
            return redirect()->route('pengaturan')->with('message', 'Data Berhasil diubah');
        } else {
            return redirect()->route('pengaturan')->with('error', 'Data Gagal diubah');
        }
    }
}
