<h1>Usuários</h1>
<?= $this->Html->link('Adicionar usuário', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($users as $user): ?>
    <tr>
      <td><?= $user->id ?></td>
      <td>
        <?= $this->Html->link($user->name, ['action' => 'view', $user->id]) ?>
      </td>
      <td>
        <?= $user->created->format(DATE_RFC850) ?>
      </td>
      <td>
        <?= $this->Form->postLink(
          'Deletar',
          ['action' => 'delete', $user->id],
          ['confirm' => 'Tem certeza?'])
        ?>
        <?= $this->Html->link('Editar', ['action' => 'edit', $user->id]) ?>
      </td>
    </tr>
    <?php endforeach; ?>
</table>