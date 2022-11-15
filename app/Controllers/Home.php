<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JeniskelasModel as jenisKelasModel;
use App\Models\TentangModel as tentangModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->jeniskelasModel = new jenisKelasModel();
        $this->tentangModel = new tentangModel();
    }

    public function index()
    {
        $this->data['jenisKelas'] = $this->jeniskelasModel->findAll();
        $this->data['tentang'] = $this->tentangModel->first();
        $this->data['item'] = $this->tentangModel->first();
        $this->data['alamat'] = json_decode($this->data['item']->alamat);
        $this->data['contact'] = json_decode($this->data['item']->contact);
        $this->data['sosmed'] = json_decode($this->data['item']->sosmed);
        return view('App\Views\Frontend\Page\index', $this->data);
    }

    public function pendaftaran()
    {
        $this->data['tentang'] = $this->tentangModel->first();
        $this->data['item'] = $this->tentangModel->first();
        $this->data['alamat'] = json_decode($this->data['item']->alamat);
        $this->data['contact'] = json_decode($this->data['item']->contact);
        $this->data['sosmed'] = json_decode($this->data['item']->sosmed);
        $this->data['jenisKelas'] = $this->jeniskelasModel->findAll();
        return view('App\Views\Frontend\Page\pendaftaran', $this->data);
    }
}
