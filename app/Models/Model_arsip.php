<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_arsip extends Model
{
    protected $table      = 'arsip';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'no_surat', 'kategori', 'judul', 'waktu_arsip', 'file_arsip'];

    public function listening(){
        return $this->db->table('arsip')
        ->orderBy('waktu_arsip', 'DESC')
        ->get()->getResultArray();
    }

    public function filter_listening($id){
        return $this->db->table('arsip')
        ->where('id', $id)
        ->get()->getResultArray();
    }

    public function cari($cari){
        return $this->db->table('arsip')
        ->like('judul', $cari)
        ->get()->getResultArray();
    }

    public function tambah_data($data)
    {
        return $this->db->table('arsip')
            ->insert($data);
    }

    public function hapus_data($data)
    {
        return $this->db->table('arsip')
            ->delete(['id' => $data['id']]);
    }

    public function edit_data($data)
    {
        return $this->db->table('arsip')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function jumlah_surat(){
        return $this->db->table('arsip')
        ->select('COUNT(*) AS jumlah')
        ->get()->getResultArray();
    }

    public function jumlah_surat_undangan(){
        return $this->db->table('arsip')
        ->select('COUNT(*) AS jumlah')
        ->where('kategori', 'undangan')
        ->get()->getResultArray();
    }

    public function jumlah_surat_pengumuman(){
        return $this->db->table('arsip')
        ->select('COUNT(*) AS jumlah')
        ->where('kategori', 'pengumuman')
        ->get()->getResultArray();
    }

    public function jumlah_surat_notadinas(){
        return $this->db->table('arsip')
        ->select('COUNT(*) AS jumlah')
        ->where('kategori', 'nota dinas')
        ->get()->getResultArray();
    }

    public function jumlah_surat_pemberitahuan(){
        return $this->db->table('arsip')
        ->select('COUNT(*) AS jumlah')
        ->where('kategori', 'pemberitahuan')
        ->get()->getResultArray();
    }
}