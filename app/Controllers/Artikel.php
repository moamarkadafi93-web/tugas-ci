<?php

namespace App\Controllers;

class Artikel extends BaseController
{
    private $data = [
        ['id'=>1,'judul'=>'Belajar CI4','isi'=>'Ini artikel tentang CodeIgniter 4'],
        ['id'=>2,'judul'=>'MVC','isi'=>'MVC adalah Model View Controller'],
        ['id'=>3,'judul'=>'Web Programming','isi'=>'Belajar membuat website']
    ];

    public function index()
    {
        return view('home', ['artikel'=>$this->data]);
    }

    public function detail($id)
    {
        foreach($this->data as $a){
            if($a['id']==$id){
                return view('detail', ['artikel'=>$a]);
            }
        }
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function tambah()
    {
        return view('tambah');
    }
}