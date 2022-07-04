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
    protected $rosterModel;


    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->KategoriModel = new KategoriModel();
        $this->eventModel = new EventModel();
        $this->rosterModel = new RosterModel();
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
            'news' => $this->newsModel->orderBy('id_news', 'DESC')->paginate(3, 'news'),
            'pager_news' => $this->newsModel->pager,
            'event' => $this->eventModel->orderBy('id_event', 'DESC')->paginate(7, 'event'),
            'roster' => $this->rosterModel->orderBy('id_roster', 'DESC')->paginate(3, 'roster'),
            'pager_event' => $this->eventModel->pager,
            'pager_roster' => $this->rosterModel->pager
            // 'currentPage' => $currentPage
        ];

        // $news_pager = $this->newsModel->paginate(3, 'news');
        // d($data['pager_event']);

        return view('news_event', $data);
    }
}
