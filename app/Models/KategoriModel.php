<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{

    protected $table      = 'product p';
    protected $primaryKey = 'id_product';
    protected $useTimestamps = true;

    // TENESA 
    public function getJob($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Job desk"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getMom($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Mom"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // TENESA 
    public function getTenesa($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Tenesa"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage
    // Get Mukadimah
    public function getMukadimah($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Mukadimah"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage
    // Get Telephony
    public function getTelephony($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, p.id_product, k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Telephony"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage   
    // Get Imes
    public function getImes($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, p.id_product, k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Imes"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage
    // GetIndihome
    public function getIndiHome($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, p.id_product, k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Indihome"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // getWifi id
    public function getWifiid($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, p.id_product, k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="WIFI ID"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage   
    // Get Datin
    public function getDatin($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                // ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, p.id_product, k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                // ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Datin"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage    
    // Get Fault Handling
    public function getFaultHandling($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, s.id_subproduct, p.id_product, k.kategori_name, s.name_subproduct, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Fault Handling"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage
    // Sub Product Fault Handling

    public function getFHandlingAll($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, s.id_subproduct, p.id_product, k.kategori_name, s.name_subproduct, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and s.status="7"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage
    // Get Panduan Solusi
    public function getPsolusi($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, s.id_subproduct, p.id_product, k.kategori_name, s.name_subproduct, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Panduan Solusi"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Product Knowlage
    // Sub Product Panduan Solusi

    public function getPsilusiAll($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, s.id_subproduct, p.id_product, k.kategori_name, s.name_subproduct, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and s.status="8" ')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Supporting APP 
    public function getPanduanAplikasi($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Panduan Aplikasi"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getPost($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Layanan Post"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getInteruksi($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Interuksi Kerja"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getPerfomansi($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, s.id_subproduct, p.id_product, k.kategori_name, s.name_subproduct, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->groupBy('s.name_subproduct')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Performasi"')
                ->orderBy('p.id_subproduct', 'ASC')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getPerfomansiAll($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->join('sub_product s', 's.id_subproduct=p.id_subproduct')
                ->select('k.id_katprod, s.id_subproduct, p.id_product, k.kategori_name, s.name_subproduct, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and s.status="11" ')
                ->orderBy('p.id_subproduct', 'ASC')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getSop($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="SOP"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getStandar($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Standar"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getForm($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('product p')
                ->join('kat_katprod k', 'k.id_katprod=p.id_katprod')
                ->select('k.kategori_name, p.title, p.slug, p.description, p.file_document , p.file_video')
                ->where('p.id_katprod = k.id_katprod and k.kategori_name="Form"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
