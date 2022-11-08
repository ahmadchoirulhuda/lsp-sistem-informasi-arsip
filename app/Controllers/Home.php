<?php

namespace App\Controllers;
use App\Models\Model_arsip;

class Home extends BaseController
{
    public function index()
    {
        $konf_arp               = new Model_arsip();
        $arsip                  = $konf_arp->listening();

        $data = [
            'database'  => $arsip
        ];

        return view('index', $data);
    }

    public function lihat()
    {
        $konf_arp               = new Model_arsip();
        $arsip                  = $konf_arp->filter_listening($this->request->getGet('id'));

        $data = [
            'database'      => $arsip
        ];

        return view('lihat', $data);
    }

    public function hapus()
    {
        $konf_arp               = new Model_arsip();
        $arsip                  = $konf_arp->filter_listening($this->request->getGet('id'));

        if (file_exists("dokumen/" . $arsip[0]['file_arsip'])) {
            unlink("dokumen/" . $arsip[0]['file_arsip']);

            $data = [
                'id'     => $this->request->getGet('id')
            ];
    
            $konf_arp->hapus_data($data);
            
            session()->setFlashdata('flash', 'berhasil');
            return redirect()->to(base_url('/'));
        }
    }

    public function cari(){
        $konf_arp               = new Model_arsip();
        $arsip                  = $konf_arp->cari($this->request->getPost('cari'));

        if($arsip){
            $data = [
                'database'  => $arsip
            ];
    
            return view('index', $data);
        }else{
            $data = [
                'database'  => $arsip
            ];
    
            return view('index', $data);
        }
    }
}
