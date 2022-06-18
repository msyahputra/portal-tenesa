<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\NewsModel;
use App\Models\EventModel;


class Home extends BaseController
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
		$news = $this->newsModel->findAll();
		$event = $this->eventModel->orderBy('id_event', 'DESC')->paginate(9, 'event');

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
			'event' => $event,
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
