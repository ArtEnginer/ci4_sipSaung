<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
    }
   
    public function index()
    {    
        return view('App\Views\Frontend\Page\index', $this->data);
    }

    public function pendaftaran()
    {
        return view('App\Views\Frontend\Page\pendaftaran', $this->data);
    }
}
