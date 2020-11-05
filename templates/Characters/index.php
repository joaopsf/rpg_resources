<div class="row mb-4">
  <div class="col-12">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="main-title mt-4 text-info">
        Gestão dos recursos da campanha
        <small class="text-dark mt-2"><i class="fas fa-igloo"></i> &nbsp;Icewind Dale: RIME OF THE FROSTMAIDEN</small>
      </h1>
      <?= $this->Html->link('<i class="fas fa-plus"></i> &nbsp;Novo personagem', ['action' => 'add'], ['class' => 'btn btn-info','escape' => false]) ?>
    </div>
  </div>
</div>

<div class="row">
  <?php foreach ($characters as $character): ?>
    <div class="col-6">
      <div class="card mb-3">
        <div class="card-image">
          <?php echo $this->Html->image($character->avatar, ['alt' => $character->name, 'title' => $character->name, 'class' => 'card-character_img']); ?>
          <div class="card-image_info">
            <h2 class="pt-2 pl-2 m-0 font-weight-bold"><?= $character->name ?></h2>
            <div class="d-flex pt-1 pl-2 font-weight-bold">
              <small class="font-weight-bold"><?= $character->race ?>, <?= $character->class ?> | Nível: <?= $character->level ?></small>
            </div>
            <div class="card-image_options">
              <?= $this->Form->postLink('<i class="fas fa-trash"></i>',
                ['action' => 'delete', $character->id],
                ['confirm' => 'Deseja realmente excluir o personagem ' . $character->name . '?', 'class' => 'delete-character bg-danger', 'title' => 'Excluir personagem', 'escape' => false])
              ?>
              <?= $this->Html->link('<i class="fab fa-searchengin"></i>',
                [],
                ['class' => 'show-only-character bg-info', 'title' => 'Anotações privadas', 'escape' => false, 'data-toggle' => 'modal', 'data-target' => '#prive' . $character->id])
              ?>
              <?= $this->Html->link('<i class="fas fa-search"></i>',
                [],
                ['class' => 'show-character bg-info', 'escape' => false, 'title' => 'Anotações públicas', 'data-toggle' => 'modal', 'data-target' => '#public' . $character->id])
              ?>
              <?= $this->Html->link('<i class="fas fa-pen"></i>',
                ['action' => 'edit', $character->id], ['class' => 'edit-character bg-info', 'title' => 'Editar personagem', 'escape' => false])
              ?>
            </div>
          </div>
        </div>
        <div class="card-body card-body_index">
          <div class="card-text">
            <ul class="card-text_resources--list">
              <?php if(!empty($character->name_resource_1)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_1]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_1,
                      ['alt' => $character->name_resource_1, 'title' => $character->name_resource_1, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_1 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_2)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_2]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_2,
                      ['alt' => $character->name_resource_2, 'title' => $character->name_resource_2, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_2 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_3)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_3]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_3,
                      ['alt' => $character->name_resource_3, 'title' => $character->name_resource_3, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_3 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_4)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_4]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_4,
                      ['alt' => $character->name_resource_4, 'title' => $character->name_resource_4, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_4 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_5)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_5]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_5,
                      ['alt' => $character->name_resource_5, 'title' => $character->name_resource_5, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_5 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_6)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_6]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_6,
                      ['alt' => $character->name_resource_6, 'title' => $character->name_resource_6, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_6 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_7)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_7]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_7,
                      ['alt' => $character->name_resource_7, 'title' => $character->name_resource_7, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_7 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_8)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_8]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_8,
                      ['alt' => $character->name_resource_8, 'title' => $character->name_resource_8, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_8 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_9)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_9]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_9,
                      ['alt' => $character->name_resource_9, 'title' => $character->name_resource_9, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_9 ?></span>
                </li>
              <?php } else { echo ''; } ?>

              <?php if(!empty($character->name_resource_10)) { ?>
                <li>
                  <div>
                    <?php echo $this->Html->link('', 'javascript:void(0)',
                      ['data-toggle' => "tooltip", 'data-placement' => "top", 'title' => $character->name_resource_10]);
                    ?>
                    <?php echo $this->Html->image($character->img_resource_10,
                      ['alt' => $character->name_resource_10, 'title' => $character->name_resource_10, 'class' => 'card-character_img'])?>
                  </div>
                  <span><?= $character->value_resource_10 ?></span>
                </li>
              <?php } else { echo ''; } ?>
            </ul>
          </div>
          <div class="card-sub-info bg-light text-dark d-flex align-items-center">
            <h2 class="p-0 m-0 ml-1"><strong>HP:</strong> <?= $character->hp ?></h2> <i class="fas fa-arrows-alt-h mx-2 text-info"></i>
            <h2 class="p-0 m-0"><strong>AC:</strong> <?= $character->ac ?></h2> <i class="fas fa-arrows-alt-h mx-2 text-info"></i>
            <h2 class="p-0 m-0"><strong>Percepção passiva:</strong> <?= $character->passive_perception ?></h2>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="prive<?= $character->id ?>" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anotações privadas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?= $character->private_notes ?>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="public<?= $character->id ?>" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anotações públicas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?= $character->public_notes ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>