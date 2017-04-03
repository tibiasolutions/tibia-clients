<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Mailer\MailerAwareTrait;
use Cake\Validation\Validator;

/**
 * Contact Controller
 *
 * @property \App\Model\Table\ContactTable $Contact
 */
class ContactController extends AppController
{
    use MailerAwareTrait;

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $contact = [
            'schema' => [
                'name' => [
                    'type' => 'string',
                    'length' => 100
                ],
                'email' => [
                    'type' => 'email',
                    'length' => 100
                ],
                'subject' => [
                    'type' => 'string',
                    'length' => 255
                ],
                'message' => [
                    'type' => 'string'
                ]
            ],
            'required' => [
                'name' => 1,
                'email' => 1,
                'message' => 1
            ]
        ];

        if ($this->request->is('post')) {
            $validator = new Validator();
            $validator
                        ->notEmpty('email', __('You need to put your E-mail.'))
                        ->add(
                            'email', 'validFormat', [
                                'rule' => 'email',
                                'message' => __("You must specify a valid E-mail address.")
                            ])
                        ->notEmpty('name', __('You need to put your name.'))
                        ->notEmpty('message', __("You need to give a message."))
                        ->add(
                            'message', 'minLength', [
                                'rule' => ['minLength', 10],
                                'message' => __("Your message can not contain less than {0} characters.", 10)
                            ]);

            $contact['errors'] = $validator->errors($this->request->data());

            if (empty($contact['errors'])) {
                $viewVars = [
                    'ip' => $this->request->clientIp()
                ];

                $viewVars = array_merge($this->request->data(), $viewVars);

                $this->getMailer('Contact')->send('contact', [$viewVars]);

                $this->Flash->set(__("Your message has been sent successfully, you will get a response shortly !"));

                return $this->redirect(['controller' => 'contact', 'action' => 'index']);
            }
        }

        $this->set(compact('contact'));
    }
}
