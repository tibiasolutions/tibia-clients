<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Client extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
