<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use Codeigniter\Shield\Models\UserModel as model;

class Users extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->model = new model();

    }

    public function index()
    {
        $this->data['items'] = $this->model->findAll();
        // dd($this->data['items']);
        return view('App\Views\Backend\Page\users', $this->data);
    }

    public function add()
    {
        return view('App\Views\Backend\Page\usersAdd', $this->data);
    }
}

