<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\KategoriModel;

class News extends BaseController
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
        return redirect()->route('news-&-event');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail News | TENESA',
            'news' => $this->newsModel->getNews($slug),
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'job' => $this->KategoriModel->getJob(),
            'mom' => $this->KategoriModel->getMom(),
            'perfomansi' => $this->KategoriModel->getPerfomansi(),
            'perpomansiAll' => $this->KategoriModel->getPerfomansiAll(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'telephony' => $this->KategoriModel->getTelephony(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'wifiid' => $this->KategoriModel->getWifiid(),
            'lain' => $this->KategoriModel->getLain(),
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
        ];
        return view('news_detail', $data);
    }
}
