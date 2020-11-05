<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

  public function validationDefault(Validator $validator):validator
  {
    return $validator
      ->notEmpty('email', 'Email é necessário')
      ->email('email')
      ->notEmpty('password', 'Senha é necessária')
      ->notEmpty('role', 'Função é necessária')
      ->add('role', 'inList', [
          'rule' => ['inList', ['admin', 'author']],
          'message' => 'Por favor informe uma função válida'
      ]);
  }

}