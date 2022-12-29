<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class ComicsController extends BaseController
{
    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new ComicsModel();
    }
    public function index()
    {
        $komik = $this->comicModel->findAll();
        $data = [
            'title' => 'Komik',
            'komik' => $komik
        ];
        return view('pages/comic', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->comicModel->getKomik($slug)
        ];

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul komik " . $slug . " tidak ditemukan.");
        }

        return view('pages/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah data komik',
        ];

        return view('pages/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->comicModel->save([
            "title" => $this->request->getVar('title'),
            "slug" => $slug,
            "author" => $this->request->getVar('author'),
            "publisher" => $this->request->getVar('publisher'),
            "cover" => $this->request->getVar('cover')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/comic');
    }
}
