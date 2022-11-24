<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\Router\Router;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Models\UserIdentityModel;
use CodeIgniter\Shield\Models\GroupModel;


class Users extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->model = new UserModel();
        $this->identityModel = new UserIdentityModel();
        $this->groupModel = new GroupModel();
    }

    public function add()
    {
        $data = $this->request->getPost();

        $user = new User($data);
        // $user->active = 1;

        // $this->model->save($user);

        // $identity = $this->identityModel->find($user->id);
        // $identity->secret = $this->identityModel->hashPassword($data['password']);
        // $this->identityModel->save($identity);  

        $group = $this->groupModel->find($data['role']);
        $this->model->addToGroup($user, $group);

        return redirect()->route('users')->with('message', 'User added successfully');
    }
}
