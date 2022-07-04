<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\NewsModel;
use App\Models\EventModel;
use App\Models\RosterModel;
use App\Models\AuthModel;


class Home extends BaseController
{

	protected $newsModel;
	protected $KategoriModel;
	protected $eventModel;
	protected $authModel;

	public function __construct()
	{
		$this->newsModel = new NewsModel();
		$this->KategoriModel = new KategoriModel();
		$this->eventModel = new EventModel();
		$this->rosterModel = new RosterModel();
		$this->authModel = new AuthModel();
	}

	public function index()
	{
		$date_now = DATE('Y-m-d');
		// if($date_now > ){
		$data_update = array('status' => 'tidak_online');
		// $upUser = $this->authModel->UpdateDataUSer($data_update);
		$news = $this->newsModel->getNews();
		$newsPopUp = $this->newsModel->getNewsPopup();
		$event = $this->eventModel->orderBy('id_event', 'DESC')->paginate(9, 'event');
		$roster = $this->rosterModel->orderBy('id_roster', 'DESC')->paginate(4, 'roster');

		// TENESA
		$job = $this->KategoriModel->getJob();
		$Tenesa = $this->KategoriModel->getTenesa();
		$perfomansi = $this->KategoriModel->getPerfomansi();
		$perfomansiAll = $this->KategoriModel->getPerfomansiAll();
		$interuksi = $this->KategoriModel->getInteruksi();
		$mom = $this->KategoriModel->getMom();
		// Product Knowlage
		$mukadimah = $this->KategoriModel->getMukadimah();
		$telephony = $this->KategoriModel->getTelephony();
		$indihome = $this->KategoriModel->getIndiHome();
		$wifiid = $this->KategoriModel->getWifiid();
		$lain = $this->KategoriModel->getLain();
		$datin = $this->KategoriModel->getDatin();
		$imes = $this->KategoriModel->getImes();
		$fault_handling = $this->KategoriModel->getFaultHandling();
		$panduan_solusi = $this->KategoriModel->getPsolusi();
		$sop = $this->KategoriModel->getSop();
		$standar = $this->KategoriModel->getStandar();
		$form = $this->KategoriModel->getForm();
		// Support App 
		$panduanaplikasi = $this->KategoriModel->getPanduanAplikasi();


		$fhandling_All = $this->KategoriModel->getFHandlingAll();
		$panduanS_All = $this->KategoriModel->getPsilusiAll();


		// dd($perfomansi);

		$data = [
			'title' => 'Home | TENESA',
			'news' => $news,
			'newsPopUp' => $newsPopUp,
			'event' => $event,
			'roster' => $roster,
			// 'UpdataUser' => $upUser,
			// tenesa
			'job' => $job,
			'tenesaa' => $Tenesa,
			'perfomansi' => $perfomansi,
			'perpomansiAll' => $perfomansiAll,
			'interuksi' => $interuksi,
			'mom' => $mom,
			// product knowlage
			'mukadimah' => $mukadimah,
			'telephony' => $telephony,
			'indihome' => $indihome,
			'wifiid' => $wifiid,
			'lain' => $lain,
			'datin' => $datin,
			'imes' => $imes,
			'fault_handling' => $fault_handling,
			'fhandling_All' => $fhandling_All,
			'panduan_solusi' => $panduan_solusi,
			'panduanS_All' => $panduanS_All,
			'sop' => $sop,
			'standar' => $standar,
			'form' => $form,
			// supporting App
			'panduanaplikasii' => $panduanaplikasi


		];

		return view('home', $data);
	}
}
