<?php
namespace App\Controller;

use Cake\Network\Exception\NotFoundException;
use App\Model\Behavior\MEGA;

class ClientsController extends AppController
{
	public function index() 
	{
	}

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

	public function download()
	{
		$params = array_filter($this->request->params['pass']);

		if (!empty($params)) {
			$version = trim($params[0]);
			$extension = trim($params[1]);
			$plataform = trim($params[2]);

			if (!empty($version) AND !empty($extension) AND !empty($plataform)) {
				$client = $this->Clients->find()
					->where(['version' => $version, 'plataform' => $plataform])
					->first();

				if ($client != null) {
					if (($extension == "exe" AND !empty($client->exe_url)) OR ($extension == "zip" AND !empty($client->zip_url))) {
						$link = $extension == "exe" ? $client->exe_url : $client->zip_url;
						$filename = "tibia" . $version . "." . $extension;

						$mega = new MEGA();
						$info = $mega->parse_link($link);
						$tmp = sys_get_temp_dir();
						$file = $mega->public_file_save($info['ph'], $info['key'], $tmp);

						$this->response->file(
							$file,
							array('download' => true, 'name' => $filename)
						);

						$this->set('client_downloaded', $client);
						return $this->render();
					}
				}
			}
		}

		throw new NotFoundException(__('Client not found.'));
    }
}
