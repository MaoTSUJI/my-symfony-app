<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{msg}", name="hello")
     */
    public function index($msg='Hello!')
    {
        return $this->render('hello/index.html.twig', [
            'controller' => 'HelloController',
            'action' => 'index',
            'prev_action' => '(none)',
            'message' => $msg
        ]);
    }

    /**
     * @Route("/other/{action}/{msg}", name="other")
     */
    public function other($action, $msg)
    {
        return $this->render('hello/index.html.twig',[
            'controller' => 'HelloController',
            'action' => $action,
            'prev_action' => '(none)',
            'message' => $msg
        ]);
    }


}