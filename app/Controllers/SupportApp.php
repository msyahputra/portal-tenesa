<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\NewsModel;

class supportapp extends BaseController
{

    protected $newsModel;
    protected $KategoriModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        // $news = $this->newsModel->findAll();
        // $mukadimah = $this->getMukadimah->getMukadimah();
        // // dd($mukadimah);
        // $data = [
        //     'title' => 'Home | TDSCC',
        //     'news' => $news,
        //     'mukadimah' => $mukadimah
        // ]; 

        // return view('home', $data);
        return redirect()->route('/');
    }
    public function panduanaplikasi()
    {
        return redirect()->route('/');
    }

    public function detail_panduanaplikasi($slug)
    {

        $data = [
            'title' => 'Tenesa | TENESA',
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'job' => $this->KategoriModel->getJob(),
            'mom' => $this->KategoriModel->getMom(),
            'perfomansi' => $this->KategoriModel->getPerfomansi(),
            'perpomansiAll' => $this->KategoriModel->getPerfomansiAll(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'telephony' => $this->KategoriModel->getTelephony(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'wifiid' => $this->KategoriModel->getWifiid(),
            'datin' => $this->KategoriModel->getDatin(),
            'imes' => $this->KategoriModel->getImes(),
            'interuksi' => $this->KategoriModel->getInteruksi(),
            'sop' => $this->KategoriModel->getSop(),
            'standar' => $this->KategoriModel->getStandar(),
            'form' => $this->KategoriModel->getForm(),
            'fault_handling' => $this->KategoriModel->getFaultHandling(),
            'fhandling_All' => $this->KategoriModel->getFHandlingAll(),
            'panduan_solusi' => $this->KategoriModel->getPsolusi(),
            'panduanS_All' => $this->KategoriModel->getPsilusiAll(),
            'panduanaplikasii' => $this->KategoriModel->getPanduanAplikasi(),
            'panduanaplikasi' => $this->KategoriModel->getPanduanAplikasi($slug),
        ];
        // dd($data);
        return view('panduan_aplikasi', $data);
    }
}
