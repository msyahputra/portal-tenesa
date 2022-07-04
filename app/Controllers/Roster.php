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
            'roster' => $this->roster->orderBy('id_roster', 'DESC')->paginate(12, 'roster'),
            'pager_roster' => $this->roster->pager
        ];
        return view('roster', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Roster | TENESA',
            'roster' => $this->roster->getRoster($slug),
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
            'panduanaplikasii' => $this->KategoriModel->getPanduanAplikasi()
        ];
        return view('roster_detail', $data);
    }

    function fetch()
    {
        $output = '';
        $query = '';
        if ($this->request->getVar('query')) {
            $query = $this->request->getVar('query');
        }
        $data = $this->roster->fetch_data($query);
        if ($data >= 0) {
            foreach ($data as $row) {
                $output .= '
                <div class="col-6 col-md-4" style="margin-top:5px; margin-bottom:5px;">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-light d-flex justify-content-between align-items-center">
                            <img class="" src="' . base_url("front_end/images/excel.jpg") . '" width="30" height="30" alt="">
                            <p class="linkk" id="linkk" style="margin:10px; font-size:13px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">' . $row->name_file . '</p>
                            <a class="" href="' . base_url("roster/") . "/" . $row->slug . '" class="file"><span class="icon-eye" style="color: red; font-size:20px;"></span></a>
                            <a class="file" style="margin-left:15px;" href="' . base_url("uploads/file/excel") . "/" . $row->file_document . '"><span style="color: red; font-size:20px;" class="icon-download"></span></a>
                        </li>
                    </ul>
                </div>';
            }
        } else {
            $output .= '
          <p>No Data Found<p>';
        }
        echo $output;
        d($output);
    }
}
