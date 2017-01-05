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
		$windows = Cache::read('windows_list_cached', 'tenminutes');
		if (!$windows) {
			$windows = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'windows'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('windows_list_cached', $windows, 'tenminutes');
		}

		$wfeatured = Cache::read('wfeatured_list_cached', 'tenminutes');
		if (!$wfeatured) {
			$wfeatured = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'windows'])
				->andWhere(['featured =' => 1])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('wfeatured_list_cached', $wfeatured, 'tenminutes');
		}

		$w11x = Cache::read('w11x_list_cached', 'tenminutes');
		if (!$w11x) {
			$w11x = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->andWhere(['version =' => '1100'])
				->orWhere(['version =' => '1000n'])
				->andWhere(['plataform =' => 'windows'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('w11x_list_cached', $w11x, 'tenminutes');
		}

		$w10x = Cache::read('w10x_list_cached', 'tenminutes');
		if (!$w10x) {
			$w10x = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'windows'])
				->andWhere(['version LIKE' => '10%'])
				->andWhere(['version NOT LIKE' => '%n'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('w10x_list_cached', $w10x, 'tenminutes');
		}

		$w9x = Cache::read('w9x_list_cached', 'tenminutes');
		if (!$w9x) {
			$w9x = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'windows'])
				->andWhere(['version LIKE' => '9%'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('w9x_list_cached', $w9x, 'tenminutes');
		}

		$w8x = Cache::read('w8x_list_cached', 'tenminutes');
		if (!$w8x) {
			$w8x = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'windows'])
				->andWhere(['version LIKE' => '8%'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('w8x_list_cached', $w8x, 'tenminutes');
		}

		$w7x = Cache::read('w7x_list_cached', 'tenminutes');
		if (!$w7x) {
			$w7x = $this->Clients
				->find()
				->select(['id', 'version', 'exe_file', 'exe_size', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'windows'])
				->andWhere(['version LIKE' => '7%'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('w7x_list_cached', $w7x, 'tenminutes');
		}

		$linux = Cache::read('linux_list_cached', 'tenminutes');
		if (!$linux) {
			$linux = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'linux'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('linux_list_cached', $linux, 'tenminutes');
		}

		$lfeatured = Cache::read('lfeatured_list_cached', 'tenminutes');
		if (!$lfeatured) {
			$lfeatured = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'linux'])
				->andWhere(['featured =' => 1])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('lfeatured_list_cached', $lfeatured, 'tenminutes');
		}

		$l11x = Cache::read('l11x_list_cached', 'tenminutes');
		if (!$l11x) {
			$l11x = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->andWhere(['version =' => '1100'])
				->orWhere(['version =' => '1000n'])
				->andWhere(['plataform =' => 'linux'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('l11x_list_cached', $l11x, 'tenminutes');
		}

		$l10x = Cache::read('l10x_list_cached', 'tenminutes');
		if (!$l10x) {
			$l10x = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'linux'])
				->andWhere(['version LIKE' => '10%'])
				->andWhere(['version NOT LIKE' => '%n'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('l10x_list_cached', $l10x, 'tenminutes');
		}

		$l9x = Cache::read('l9x_list_cached', 'tenminutes');
		if (!$l9x) {
			$l9x = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'linux'])
				->andWhere(['version LIKE' => '9%'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('l9x_list_cached', $l9x, 'tenminutes');
		}

		$l8x = Cache::read('l8x_list_cached', 'tenminutes');
		if (!$l8x) {
			$l8x = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'linux'])
				->andWhere(['version LIKE' => '8%'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('l8x_list_cached', $l8x, 'tenminutes');
		}

		$l7x = Cache::read('l7x_list_cached', 'tenminutes');
		if (!$l7x) {
			$l7x = $this->Clients
				->find()
				->select(['id', 'version', 'zip_file', 'zip_size', 'featured', 'downloads'])
				->where(['plataform =' => 'linux'])
				->andWhere(['version LIKE' => '7%'])
				->order(['sort_order' => 'ASC'])
				->toArray();

			Cache::write('l7x_list_cached', $l7x, 'tenminutes');
		}

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

		if ($client == null 
			OR ($plataform == "windows" AND (($extension == "exe" AND empty($client->exe_file)) OR ($extension == "zip" AND empty($client->zip_file))))
			OR ($plataform == "linux" AND empty($client->zip_file)))
			throw new NotFoundException($error);

		$file = "";
		$filename = "";
		$path = "";

		if ($plataform == "windows") {
			$file = $extension == "exe" ? $client->exe_file : $client->zip_file;
			$filename = $extension == "exe" ? $client->name . ".exe" : $client->name . ".zip";
			$path = $extension == "exe" ? CLIENT_EXE_PATH : CLIENT_ZIP_PATH;
		} else {
			$file = $client->zip_file;
			$filename = $client->name;
			$path = CLIENT_TAR_PATH;
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
