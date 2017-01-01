<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\I18n\I18n;
use App\Controller\AppController;

class LangController extends AppController
{
    public function change($locale)
    {
		/*$session = $this->request->session();
		switch ($locale) {
			case "pt":
				$session->write('Config.language', 'por');
				break;
			default:
				$session->write('Config.language', 'en');
		}*/
		I18n::locale('pt_BR');
		$session = $this->request->session();
		$session->write('App.defaultLocale', 'pt_BR');

        $this->redirect($this->referer());
    }
}
