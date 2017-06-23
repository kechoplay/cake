<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 */
class ArticlesController extends AppController
{


    public function view($id = null)
    {
        if($id !=null) {
            $session = $this->request->session();
            $article = $this->Articles->get($id);
//        $session->delete('id');die();

            $readedId = $session->read('id') ? $session->read('id') : [];

            if (!in_array($id, $readedId)) {
                array_push($readedId, $id);
                $session->write('id', $readedId);
            }
            $saveIdReaded = $session->read('id');
//            var_dump($readedId);die;

            $this->set('save', $saveIdReaded);
            $this->set('article', $article);
            $this->set('_serialize', ['article']);
        }else{
            return $this->redirect('/error');
        }
    }

}
