<?php

namespace App\Controllers;

use Core\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        $this->view->setSiteTitle('Newest Article');
        $this->view->render();
    }



}