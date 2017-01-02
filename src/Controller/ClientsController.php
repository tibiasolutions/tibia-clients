<?php
namespace App\Controller;

class ClientsController extends AppController
{
    public function windows()
	{
		$this->render('list');
    }

	public function linux()
	{
		$this->render('list');
    }
}
