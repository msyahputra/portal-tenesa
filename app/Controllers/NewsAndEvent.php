<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\KategoriModel;
use App\Models\RosterModel;
use App\Models\EventModel;

class NewsAndEvent extends BaseController
{

    protected $newsModel;
    protected $KategoriModel;
    protected $eventModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->KategoriModel = new KategoriModel();
        $this->eventModel = new EventModel();
    }

    public function index()
    {

        // $currentPage = $this->request->getVar('page_news') ? $this->request->getVar('page_news') : 1;

        $data = [
            'title' => 'News | TDSCC',
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
            'news' => $this->newsModel->orderBy('id_news', 'DESC')->paginate(3, 'news'),
            'pager_news' => $this->newsModel->pager,
            'event' => $this->eventModel->orderBy('id_event', 'DESC')->paginate(7, 'event'),
            'pager_event' => $this->eventModel->pager
            // 'currentPage' => $currentPage
        ];

        // $news_pager = $this->newsModel->paginate(3, 'news');
        // dd($news_pager);

        return view('news_event', $data);
    }
}
