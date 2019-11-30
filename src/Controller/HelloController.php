<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(Request $request)
    {
        return $this->render('hello/index.html.twig', [
            'title' => 'Hello',
            'message' => 'あなたのお名前'
        ]);
    }

    /**
     * @Route("/other", name="other")
     */
    public function other(Request $request)
    {
        $input = $request->request->get('input');
        $msg = 'こんにちは'. $input . 'さん！';
        return $this->render('hello/index.html.twig', [
            'title' => 'Hello',
            'message' => $msg,
        ]);
    }


}