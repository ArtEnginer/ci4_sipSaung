<?php 
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
    }

    public function index()
    {
        return view('App\Views\Backend\Page\panel', $this->data);
    }
}
?>