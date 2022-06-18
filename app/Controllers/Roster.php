<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\RosterModel;


// use App\Models\NewsModel;


class Roster extends BaseController
{

    protected $KategoriModel;
    protected $roster;

    public function __construct()
    {

        $this->KategoriModel = new KategoriModel();
        $this->roster = new RosterModel();
    }

    // protected $newsModel;
    // public function __construct()
    // {
    // 	$this->newsModel = new NewsModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Roster | TENESA',
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'post' => $this->KategoriModel->getPost(),
            'admin_menu' => $this->KategoriModel->getAdminMenu(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'logbook' => $this->KategoriModel->getLokbook(),
            'datin' => $this->KategoriModel->getDatin(),
            'heandling_datin' => $this->KategoriModel->getHandlingDatin(),
            'dokumen' => $this->KategoriModel->getDokumen(),
            'panduanaplikasii' => $this->KategoriModel->getPanduanAplikasi(),

        ];

        return view('roster', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Roster | TENESA',
            'roster' => $this->roster->getRoster($slug),
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'post' => $this->KategoriModel->getPost(),
            'admin_menu' => $this->KategoriModel->getAdminMenu(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'logbook' => $this->KategoriModel->getLokbook(),
            'datin' => $this->KategoriModel->getDatin(),
            'heandling_datin' => $this->KategoriModel->getHandlingDatin(),
            'dokumen' => $this->KategoriModel->getDokumen(),
            'panduanaplikasii' => $this->KategoriModel->getPanduanAplikasi(),
        ];
        return view('roster_detail', $data);
    }
}
