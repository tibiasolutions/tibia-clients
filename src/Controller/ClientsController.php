<?php
namespace App\Controller;

use Cake\Network\Exception\NotFoundException;
use App\Model\Behavior\MEGA;
use Cake\Utility\Text;
use Cake\Cache\Cache;
use Cake\ORM\TableRegistry;

class ClientsController extends AppController
{
	public function index() 
	{
		$windows = $this->Clients
			->find()
			->select(['version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'downloads'])
			->where(['plataform =' => 'windows'])
			->order(['sort_order' => 'ASC']);

		$linux = $this->Clients
			->find()
			->select(['version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'downloads'])
			->where(['plataform =' => 'linux'])
			->order(['sort_order' => 'ASC']);

        $this->set('windows', $windows);
		$this->set('linux', $linux);
	}

	public function download()
	{
		$error = __('Client not found.');
		$params = array_filter($this->request->params['pass']);

		if (empty($params))
			throw new NotFoundException($error);

		$version = trim($params[0]);
		$extension = trim($params[1]);
		$plataform = trim($params[2]);
		
		if (empty($version) OR empty($extension) OR empty($plataform))
			throw new NotFoundException($error);

		$client = $this->Clients
			->find()
			->where(['version =' => $version, 'plataform =' => $plataform])
			->first();
		
		if ($client == null OR ($extension == "exe" AND empty($client->exe_file)) OR ($extension == "zip" AND empty($client->zip_file)))
			throw new NotFoundException($error);
		
		$file = $extension == "exe" ? $client->exe_file : $client->zip_file;
		$filename = $extension == "exe" ? $client->name . ".exe" : $client->name . ".zip";
		$path = "";
		
		if ($plataform == "windows") {
			$path = $extension == "exe" ? WINDOWS_EXE : WINDOWS_ZIP;
		} else {
			$path = $extension == "exe" ? LINUX_EXE : LINUX_ZIP;
		}
		
		$pathfile = $path . $file;

		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"".$filename."\"");
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: ".filesize($pathfile));
		ob_end_flush();
		@readfile($pathfile);
		
		$clientsTable = TableRegistry::get('Clients');
		$client->downloads += 1;
		$clientsTable->save($client);
    }
}
