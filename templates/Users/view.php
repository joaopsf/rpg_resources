<h1><?= h($user->name) ?></h1>
<p><?= h($user->email) ?></p>
<p><?= h($user->phone) ?></p>
<p><?= h($user->description) ?></p>
<p><small>Criado: <?= $user->created->format(DATE_RFC850) ?></small></p>