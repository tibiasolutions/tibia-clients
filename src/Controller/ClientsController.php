<?php
namespace App\Controller;

class ClientsController extends AppController
{
    public function windows()
	{
		$clients = $this->Clients
			->find()
			->select(['id', 'version', 'exe_url', 'exe_size', 'zip_url', 'zip_size', 'downloads'])
			->where(['plataform =' => 'windows'])
			->order(['sort_order' => 'ASC']);

        $this->set(compact('clients'));
        $this->set('_serialize', ['clients']);
    }

	public function linux()
	{
		$clients = $this->Clients
			->find()
			->select(['id', 'version', 'exe_url', 'exe_size', 'zip_url', 'zip_size', 'downloads'])
			->where(['plataform =' => 'linux'])
			->order(['sort_order' => 'ASC']);

        $this->set(compact('clients'));
        $this->set('_serialize', ['clients']);
    }
}
