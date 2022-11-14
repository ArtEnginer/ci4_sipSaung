<?php 
namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\JeniskelasModel as jenisKelasModel;
use App\Models\SiswaModel as siswaModel;
use CodeIgniter\Shield\Models\UserModel as usersModel;
class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->jeniskelasModel = new jenisKelasModel();
        $this->siswaModel = new siswaModel();
        $this->usersModel = new usersModel();
    }

    public function index()
    {
        
        $this->data['pendaftar'] = $this->siswaModel->countAll();
        $this->data['pending'] = $this->siswaModel->where('status', 100)->countAllResults();
        $this->data['diterima'] = $this->siswaModel->where('status', 200)->countAllResults();
        $this->data['ditolak'] = $this->siswaModel->where('status', 300)->countAllResults();
        $this->data['user'] = $this->usersModel->countAllResults();

        return view('App\Views\Backend\Page\panel', $this->data);
    }
}
?>