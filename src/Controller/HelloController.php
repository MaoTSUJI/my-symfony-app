<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(Request $request)
    {
        $data = array(
            'name'=>array('first'=>'Taro', 'second'=>'Yamada'),
            'age'=>36, 'mail'=>'taro@yamada.kun'
        );

        return new JsonResponse($data);

    }

}