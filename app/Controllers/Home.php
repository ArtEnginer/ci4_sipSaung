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
        return view('App\Views\Frontend\Page\index.php', $this->data);
    }
}
