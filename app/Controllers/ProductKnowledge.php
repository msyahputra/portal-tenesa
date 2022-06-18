<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\NewsModel;

class productknowledge extends BaseController
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
    public function interuksi()
    {
        return redirect()->route('/');
    }
    public function sop()
    {
        return redirect()->route('/');
    }
    public function standar()
    {
        return redirect()->route('/');
    }
    public function form()
    {
        return redirect()->route('/');
    }
    public function mukadimah()
    {
        return redirect()->route('/');
    }
    public function telephony()
    {
        return redirect()->route('/');
    }
    public function indihome()
    {
        return redirect()->route('/');
    }
    public function wifiid()
    {
        return redirect()->route('/');
    }
    public function datin()
    {
        return redirect()->route('/');
    }

    public function fhandling()
    {
        return redirect()->route('/');
    }
    public function dokumen()
    {
        return redirect()->route('/');
    }
    public function imes()
    {
        return redirect()->route('/');
    }

    public function detail_interuksi($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getInteruksi($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_sop($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getSop($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }
    public function detail_standar($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getStandar($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }
    public function detail_form($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getForm($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_mukadimah($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getMukadimah($slug)
        ];

        // $content = $this->KategoriModel->getMukadimah($slug);
        // dd($content);

        return view('product_content', $data);
    }

    public function detail_telephony($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getTelephony($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_indihome($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getIndihome($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_wifiid($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getWifiid($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }


    public function detail_datin($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
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
            'content' => $this->KategoriModel->getDatin($slug)
        ];

        return view('product_content', $data);
    }


    public function detail_fhandling($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'job' => $this->KategoriModel->getJob(),
            'mom' => $this->KategoriModel->getMom(),
            'perfomansi' => $this->KategoriModel->getPerfomansi(),
            'perpomansiAll' => $this->KategoriModel->getPerfomansiAll(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'telephony' => $this->KategoriModel->getTelephony(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'wifiid' => $this->KategoriModel->getWifiid(),
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
            'content' => $this->KategoriModel->getFHandlingAll($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_fsolusi($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'job' => $this->KategoriModel->getJob(),
            'mom' => $this->KategoriModel->getMom(),
            'perfomansi' => $this->KategoriModel->getPerfomansi(),
            'perpomansiAll' => $this->KategoriModel->getPerfomansiAll(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'telephony' => $this->KategoriModel->getTelephony(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'wifiid' => $this->KategoriModel->getWifiid(),
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
            'content' => $this->KategoriModel->getPsilusiAll($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_panduanaplikasi($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'job' => $this->KategoriModel->getJob(),
            'mom' => $this->KategoriModel->getMom(),
            'perfomansi' => $this->KategoriModel->getPerfomansi(),
            'perpomansiAll' => $this->KategoriModel->getPerfomansiAll(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'telephony' => $this->KategoriModel->getTelephony(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'wifiid' => $this->KategoriModel->getWifiid(),
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
            'content' => $this->KategoriModel->getPanduanAplikasi($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }

    public function detail_imes($slug)
    {

        $data = [
            'title' => 'Content Product | TENESA',
            'tenesaa' => $this->KategoriModel->getTenesa(),
            'job' => $this->KategoriModel->getJob(),
            'mom' => $this->KategoriModel->getMom(),
            'perfomansi' => $this->KategoriModel->getPerfomansi(),
            'perpomansiAll' => $this->KategoriModel->getPerfomansiAll(),
            'mukadimah' => $this->KategoriModel->getMukadimah(),
            'telephony' => $this->KategoriModel->getTelephony(),
            'indihome' => $this->KategoriModel->getIndihome(),
            'wifiid' => $this->KategoriModel->getWifiid(),
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
            'content' => $this->KategoriModel->getImes($slug)
        ];
        // dd($data);
        return view('product_content', $data);
    }
}
