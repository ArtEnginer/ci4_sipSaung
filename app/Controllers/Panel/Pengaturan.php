<?php 
namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\TentangModel;

class Pengaturan extends BaseController{
    public function __construct()
    {
        $this->data['config'] = config('Theme');
        $this->model = new TentangModel();
    }

    public function index(){
        $this->data['items'] = $this->model->first();
        $this->data['alamat'] = json_decode($this->data['items']->alamat);
        // dd($this->data['alamat']);
        $this->data['contact'] = json_decode($this->data['items']->contact);
        $this->data['sosmed'] = json_decode($this->data['items']->sosmed);
        return view('App\Views\Backend\Page\pengaturan', $this->data);
    }    

    public function alamatAdd(){
        return view('App\Views\Backend\Page\alamatAdd', $this->data);
    }

    public function alamatEdit($id){
        $this->data['item'] = $this->model->first();
        $this->data['alamat'] = json_decode($this->data['item']->alamat);
        $this->data['item'] = $this->data['alamat'][$id];
        return view('App\Views\Backend\Page\alamatEdit', $this->data);
    }

    public function alamatDelete($id){
        $item = $this->model->first();
        $alamat = json_decode($item->alamat);
        unset($alamat[$id]);
        $alamat = array_values($alamat);
        $item->alamat = json_encode($alamat);
        $this->model->save($item);
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
     
    }

    public function sosmedAdd()
    {
        return view('App\Views\Backend\Page\sosmedAdd', $this->data);
    }

    public function sosmedEdit($id)
    {
        $this->data['item'] = $this->model->first();
        $this->data['sosmed'] = json_decode($this->data['item']->sosmed);
        $this->data['item'] = $this->data['sosmed'][$id];
        return view('App\Views\Backend\Page\sosmedEdit', $this->data);
    }

    public function sosmedDelete($id)
    {
        $item = $this->model->first();
        $sosmed = json_decode($item->sosmed);
        unset($sosmed[$id]);
        $sosmed = array_values($sosmed);
        $item->sosmed = json_encode($sosmed);
        $this->model->save($item);
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }

    public function contactAdd()
    {
        return view('App\Views\Backend\Page\contactAdd', $this->data);
    }

    public function contactEdit($id)
    {
        $this->data['item'] = $this->model->first();
        $this->data['contact'] = json_decode($this->data['item']->contact);
        $this->data['item'] = $this->data['contact'][$id];
        return view('App\Views\Backend\Page\contactEdit', $this->data);
    }

    public function contactDelete($id)
    {
        $item = $this->model->first();
        $contact = json_decode($item->contact);
        unset($contact[$id]);
        $contact = array_values($contact);
        $item->contact = json_encode($contact);
        $this->model->save($item);
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }
}
