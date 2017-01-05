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
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->order(['sort_order' => 'ASC']);

		$wfeatured = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->andWhere(['featured =' => 1])
			->order(['sort_order' => 'ASC']);

		$w11x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->andWhere(['version =' => '1100'])
			->orWhere(['version =' => '1000n'])
			->order(['sort_order' => 'ASC']);

		$w10x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->andWhere(['version LIKE' => '10%'])
			->andWhere(['version NOT LIKE' => '%n'])
			->order(['sort_order' => 'ASC']);

		$w9x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->andWhere(['version LIKE' => '9%'])
			->order(['sort_order' => 'ASC']);

		$w8x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->andWhere(['version LIKE' => '8%'])
			->order(['sort_order' => 'ASC']);

		$w7x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'windows'])
			->andWhere(['version LIKE' => '7%'])
			->order(['sort_order' => 'ASC']);

		$linux = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->order(['sort_order' => 'ASC']);

		$lfeatured = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->andWhere(['featured =' => 1])
			->order(['sort_order' => 'ASC']);

		$l11x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->andWhere(['version =' => '1100'])
			->orWhere(['version =' => '1000n'])
			->order(['sort_order' => 'ASC']);

		$l10x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->andWhere(['version LIKE' => '10%'])
			->andWhere(['version NOT LIKE' => '%n'])
			->order(['sort_order' => 'ASC']);

		$l9x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->andWhere(['version LIKE' => '9%'])
			->order(['sort_order' => 'ASC']);

		$l8x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->andWhere(['version LIKE' => '8%'])
			->order(['sort_order' => 'ASC']);

		$l7x = $this->Clients
			->find()
			->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
			->where(['plataform =' => 'linux'])
			->andWhere(['version LIKE' => '7%'])
			->order(['sort_order' => 'ASC']);

        $this->set('windows', $windows);
		$this->set('wfeatured', $wfeatured);
		$this->set('w11x', $w11x);
		$this->set('w10x', $w10x);
		$this->set('w9x', $w9x);
		$this->set('w8x', $w8x);
		$this->set('w7x', $w7x);
		$this->set('linux', $linux);
		$this->set('lfeatured', $lfeatured);
		$this->set('l11x', $l11x);
		$this->set('l10x', $l10x);
		$this->set('l9x', $l9x);
		$this->set('l8x', $l8x);
		$this->set('l7x', $l7x);
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
