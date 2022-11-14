<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JeniskelasModel as jenisKelasModel;
class Home extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->jeniskelasModel = new jenisKelasModel();

    }
   
    public function index()
    {    
        return view('App\Views\Frontend\Page\index', $this->data);
    }
    
    public function pendaftaran()
    {
        $this->data['jenisKelas'] = $this->jeniskelasModel->findAll();
        return view('App\Views\Frontend\Page\pendaftaran', $this->data);
    }
}
