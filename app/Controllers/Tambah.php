<?php

namespace App\Controllers;
use App\Models\Model_arsip;

class Tambah extends BaseController
{
    public function index()
    {
        return view('tambah');
    }

    public function edit()
    {
        $konf_arp               = new Model_arsip();
        $arsip                  = $konf_arp->filter_listening($this->request->getGet('id'));

        $data = [
            'database'      => $arsip
        ];

        return view('edit', $data);
    }

    public function editSimpan()
    {
        $konf_arp               = new Model_arsip();
        $arsip                  = $konf_arp->filter_listening($this->request->getPost('id'));

        if($_FILES['file']['name']){
            if (file_exists("dokumen/" . $arsip[0]['file_arsip'])) {
                unlink("dokumen/" . $arsip[0]['file_arsip']);

                $file         = $this->request->getFile('file');
                $file->move(ROOTPATH . 'public/dokumen'); 
    
                $data = [
                    'id'                        => $this->request->getPost('id'),
                    'no_surat'                  => $this->request->getPost('no_surat'),
                    'kategori'                  => $this->request->getPost('kategori'),
                    'judul'                     => $this->request->getPost('judul'),
                    'file_arsip'                => $_FILES['file']['name']
                ];
    
                $konf_arp->edit_data($data); 
        
                session()->setFlashdata('flash', 'berhasil');
                return redirect()->to(base_url('/'));
            }

        }else{
            $data = [
                'id'                        => $this->request->getPost('id'),
                'no_surat'                  => $this->request->getPost('no_surat'),
                'kategori'                  => $this->request->getPost('kategori'),
                'judul'                     => $this->request->getPost('judul')
            ];

            $konf_arp->edit_data($data);
    
            session()->setFlashdata('flash', 'berhasil');
            return redirect()->to(base_url('/'));
        }
    }

    public function simpan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $waktu_respon = date('Y-m-d h:i:s');

        if($_FILES['file']['name']){
            $konf_arp               = new Model_arsip();

            $data = [
                'no_surat'                  => $this->request->getPost('no_surat'),
                'kategori'                  => $this->request->getPost('kategori'),
                'judul'                     => $this->request->getPost('judul'),
                'waktu_arsip'               => $waktu_respon,
                'file_arsip'                => $_FILES['file']['name']
            ];

            $konf_arp->tambah_data($data);

            $file         = $this->request->getFile('file');
            $file->move(ROOTPATH . 'public/dokumen');

            session()->setFlashdata('flash', 'berhasil');
            return redirect()->to(base_url('/'));
        }
    }
}
