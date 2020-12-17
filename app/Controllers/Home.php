<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function setSession($nom, $id)
	{
		$maSession = session();
		$monArray = [
			'nom' => $nom,
			'id' => $id,
		];
		$maSession->set($monArray);
		return redirect()->to(base_url());
	}

	public function getSession()
	{
		$maSession = session();
		if ($maSession->has('nom') && $maSession->has('id')) {
			$nom = $maSession->get('nom');
			$id = $maSession->get('id');
			echo $nom . ' ' . $id;
		} else {
			echo 'Pas de nom dans la session';
		}
	}

	public function destroySession()
	{
		$maSession = session();
		$maSession->destroy();
		return redirect()->to(base_url());
	}

	//--------------------------------------------------------------------

}
