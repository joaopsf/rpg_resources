<h1>Edit Usuário</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->input('name');
    echo $this->Form->input('email');
    echo $this->Form->input('phone');
    echo $this->Form->input('aux_phone');
    echo $this->Form->input('description', ['rows' => '3']);
    echo $this->Form->button(__('Salvar usuário'));
    echo $this->Form->end();
?>