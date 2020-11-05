<?php 

  namespace App\Controller;
  use \SplFileObject;

  class CharactersController extends AppController
  {
    public function initialize(): void
    {
      parent::initialize();
      $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
      $characters = $this->Characters->find('all');
      $this->set(compact('characters'));
    }

    public function view($id = null)
    {
      $character = $this->Characters->get($id);
      $this->set(compact('character'));
    }

    public function add()
    {
      $character = $this->Characters->newEmptyEntity();
      if ($this->request->is('post')) {
        $character = $this->Characters->patchEntity($character, $this->request->getData());

        if(!$character->getErrors){
          $image = $this->request->getData('img_resource_1_file');
          $name = $image->getClientFilename();

          if(!is_dir(WWW_ROOT.'img'.DS.'resources-img'))
            mkdir(WWW_ROOT.'img'.DS.'resources-img', 0775);

          $targetPath = WWW_ROOT.'img'.DS.'resources-img'.DS.$name;

          if($name)
            $image->moveTo($targetPath);
          
          $character->img_resource_1 = 'resources-img/'.$name;
        }

        if ($this->Characters->save($character)) {
          $this->Flash->success(__('Personagem salvo.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Não é possível adicionar esse personagem.'));
      }
      $this->set('character', $character);
    }

    public function edit($id = null)
    {
      $character = $this->Characters->get($id);
      if ($this->request->is(['post', 'put'])) {
        $this->Characters->patchEntity($character, $this->request->getData());

        if ($this->Characters->save($character)) {
          $this->Flash->success(__('Personagem atualizado.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Personagem não pôde ser atualizado.'));
      }

      $this->set('character', $character);
    }

    public function delete($id)
    {
      $character = $this->Characters->get($id);
      if ($this->Characters->delete($character)) {
        $this->Flash->success(__('O personagem com id: {0} foi deletado.', h($id)));
        return $this->redirect(['action' => 'index']);
      }
    }
  }