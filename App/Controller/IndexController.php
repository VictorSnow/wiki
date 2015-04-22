<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2015/4/22
 * Time: 16:30
 */

namespace App\Controller;


class IndexController  extends \Xend\Controller\AbstractController{

    public function indexAction()
    {
        $view = $this->getView();

        var_dump($this->getDb()->query("select * from category"));

        return $view;
    }
} 