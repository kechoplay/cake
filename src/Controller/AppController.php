<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use App\View\AppView;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $id_ses=array();

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if (!(isset($this->request->params['prefix'])) || $this->request->params['prefix']!='admin'){
            $this->viewBuilder()->setLayout('default2');
        }else {
            $this->viewBuilder()->setLayout('default');
        }

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Paginator');
        if (!(isset($this->request->params['prefix'])) || $this->request->params['prefix']!='admin') {
            $this->loadComponent('Auth', [
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'username',
                            'password' => 'password'
                        ],
                        'userModel' => 'Users'
                    ]
                ],
                'loginAction' => array('controller' => 'Users', 'action' => 'login'),
                'loginRedirect' => array('controller' => 'Admin/Users', 'action' => 'index'),
                'logoutRedirect' => array('controller' => '../Home', 'action' => 'index'),
            ]);
        }else{
            $this->loadComponent('Auth', [
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'username',
                            'password' => 'password'
                        ],
                        'userModel' => 'Users'
                    ]
                ],
//                'loginAction' => array('controller' => 'Admin/Users', 'action' => 'login'),
                'loginRedirect' => array('controller' => 'Users', 'action' => 'index'),
                'logoutRedirect' => array('controller' => '../Home', 'action' => 'index'),
            ]);
        }

        $redirect_url=$this->request->here;
        $arr=explode('/',$redirect_url);
        $this->set('module',$arr[1]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function isAuthorized($user)
    {
        if(isset($user['status']) && $user['status']===1){
            return true;
        }
        return false;
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index','view','display']);
        $tblCategory=TableRegistry::get('Categories');
        $listCategory=$tblCategory->find('all')->toArray();

        $this->set(compact('listCategory'));

    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function getCategory($data,$parent=0)
    {
        $cate_chil=array();
        foreach ($data as $key => $value)
        {
            if($value['parent_id']==$parent){
                $cate_chil[]=$value;
            }
        }
        if ($cate_chil)
        {
            foreach ($cate_chil as $keys => $values)
            {
                echo "<li class='list-group-item menu1'>";
                echo "<a href='".Router::url(['controller'=>'Categories','action'=>'view',$values['cate_id']])."'>";
                echo $values['cate_name'];
                echo "</a>";
                echo "</li>";
                echo "<ul>";
                getCategory($data,$values['cate_id']);
                echo "</ul>";
            }
        }
    }

    public function setSession($id){
        $session=$this->request->session();
        $session->write('id',$id);
    }

    public function getSession($id){
        $session=$this->request->session();
        return $session->read($id);
    }
}
