<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CharactersTable extends Table
{
  public function initialize(array $config): void
  {
    $this->addBehavior('Timestamp');
  }

  
}