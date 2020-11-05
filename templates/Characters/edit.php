<div class="row">
  <div class="col-12">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="main-title mt-4 text-info">
        Gestão dos recursos da campanha
        <small class="text-dark mt-2"><i class="fas fa-igloo"></i> &nbsp;Icewind Dale: RIME OF THE FROSTMAIDEN</small>
      </h1>
      <div class="d-flex align-items-center">
        <strong><i class="fas fa-pen"></i> Editar Personagem</strong>
        <div class="d-flex align-items-center ml-4">
          <?php echo $this->Html->image($character->avatar,
            ['alt' => $character->name, 'title' => $character->name, 'class' => 'mr-3', 'style' => 'width: 40px']); ?>
          <?php echo $this->Html->tag('h3', $character->name, ['class' => 'm-0']); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 mt-4">
    <?php echo $this->Form->create($character, ['type' => 'file']); ?>
      <div class="row">
        <div class="col-12">
          <h6 class="mb-3"><span class="text-uppercase">
            <i class="fas fa-exclamation-triangle text-warning"></i> &nbsp;Edição de recursos: </span>
            <small>
              Os recursos foram criados para atenderem a vários sistemas de regras diferentes. Escolha na ordem,
              o ícone que fará referência ao recurso, o nome desse recurso e o valor inicial (por padrão será inserido 0).</small></h6>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body card-body--edit">
                  <div class="card-text">
                    <ul class="card-text_resources--list">
                      <li>
                        <span class="bg-dark text-white m-0">1</span>
                        <?php echo $this->Html->image($character->img_resource_1,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_1,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_1'); ?>
                        <?= $this->Form->input('value_resource_1', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">2</span>
                        <?php echo $this->Html->image($character->img_resource_2,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_2,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_2'); ?>
                        <?= $this->Form->input('value_resource_2', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">3</span>
                        <?php echo $this->Html->image($character->img_resource_3,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_3,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_3'); ?>
                        <?= $this->Form->input('value_resource_3', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">4</span>
                        <?php echo $this->Html->image($character->img_resource_4,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_4,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_4'); ?>
                        <?= $this->Form->input('value_resource_4', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">5</span>
                        <?php echo $this->Html->image($character->img_resource_5,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_5,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_5'); ?>
                        <?= $this->Form->input('value_resource_5', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">6</span>
                        <?php echo $this->Html->image($character->img_resource_6,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_6,
                            'class' => 'card-text_resources--list_editImage'])?>                          
                        <?= $this->Form->input('name_resource_6'); ?>
                        <?= $this->Form->input('value_resource_6', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">7</span>
                        <?php echo $this->Html->image($character->img_resource_7,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_7,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_7'); ?>
                        <?= $this->Form->input('value_resource_7', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">8</span>
                        <?php echo $this->Html->image($character->img_resource_8,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_8,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_8'); ?>
                        <?= $this->Form->input('value_resource_8', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">9</span>
                        <?php echo $this->Html->image($character->img_resource_9,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_9,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_9'); ?>
                        <?= $this->Form->input('value_resource_9', ['class' => 'w50']); ?>
                      </li>

                      <li>
                        <span class="bg-dark text-white m-0">10</span>
                        <?php echo $this->Html->image($character->img_resource_10,
                          ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_10,
                            'class' => 'card-text_resources--list_editImage'])?>
                        <?= $this->Form->input('name_resource_10'); ?>
                        <?= $this->Form->input('value_resource_10', ['value' => '0','class' => 'w50']); ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 my-4">
              <h6 class="mb-3 mt-4">
                <span class="text-uppercase">
                  <i class="fas fa-user"></i></i> &nbsp;Informações gerais:
                </span>
              <h6>
              <div class="row img-avatar">
                <div class="col-4">
                  <div class="form-group">
                    <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'Nome', 'required']); ?>
                  </div>
                </div>
                <div class="col-1">
                  <div class="form-group">
                    <?= $this->Form->input('level', ['class' => 'form-control', 'placeholder' => 'Nível', 'required']); ?>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <?= $this->Form->input('race', ['class' => 'form-control', 'placeholder' => 'Raça/Tipo']); ?>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <?= $this->Form->input('class', ['class' => 'form-control', 'placeholder' => 'Main Classe/Profissão', 'required']); ?>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <?= $this->Form->input('other_class', ['class' => 'form-control', 'placeholder' => 'Segunda Classe']); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <div class="form-group">
                    <?= $this->Form->input('hp', ['class' => 'form-control', 'placeholder' => 'HP']); ?>
                  </div>
                </div>
                <div class="col-1">
                  <div class="form-group">
                    <?= $this->Form->input('ac', ['class' => 'form-control', 'placeholder' => 'CA']); ?>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <?= $this->Form->input('passive_perception', ['class' => 'form-control', 'placeholder' => 'Percepção passiva']); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <h6 class="mb-3">
            <span class="text-uppercase">
              <i class="fas fa-clipboard"></i></i> &nbsp;Anotações:
            </span>
          <h6>
          <div class="row">
            <div class="col-6">
              <?= $this->Form->control('public_notes', ['class' => 'tinymce w100', 'label' => 'Anotações públicas']); ?>
            </div>
            <div class="col-6">
              <?= $this->Form->control('private_notes', ['class' => 'tinymce w100', 'label' => 'Anotações privadas']); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-12">
          <div class="d-flex justify-content-between">
            <?= $this->Html->link('<i class="fas fa-chevron-left"></i> &nbsp;Voltar', ['action' => 'index'], ['class' => 'btn btn-light','escape' => false]) ?>
            <?= $this->Form->button('<i class="fas fa-save"></i> &nbsp;Salvar', ['type' => 'submit', 'class' => 'btn btn-info', 'escapeTitle' => false]) ?>
          </div>
        </div>
      </div>
    <?php echo $this->Form->end(); ?>
  </div>
</div>