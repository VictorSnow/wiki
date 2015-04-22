<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2015/4/22
 * Time: 17:16
 */

namespace App\Controller;


use Xend\Controller\AbstractController;

class NodeController extends AbstractController {
    public function indexAction()
    {
        $nodeid = $this->dispatchInfo['id'];
        echo $nodeid;
        return $this->getView();
    }
} 