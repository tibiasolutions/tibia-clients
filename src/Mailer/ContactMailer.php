<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

class ContactMailer extends Mailer
{
    /**
     * Contact Email.
     *
     * @param array $viewVars The variables to pass to the view.
     *
     * @return void
     */
    public function contact($viewVars = [])
    {
        $this
            ->emailFormat('html')
            ->from(['contact@tibia.soluctions' => 'Tibia Solutions'])
            ->to('contact@tibia.soluctions')
            ->subject(isset($viewVars['subject']) ? $viewVars['subject'] : 'Someone has contacted you')
            ->set($viewVars);
    }
}
