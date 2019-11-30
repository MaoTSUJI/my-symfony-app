<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(Request $request, LoggerInterface $logger)
    {
        $data = array(
            'name'=>array('first'=>'Taro', 'second'=>'Yamada'),
            'age'=>36, 'mail'=>'taro@yamada.kun'
        );

        $logger->info(serialize($data));

        return new JsonResponse($data);

    }


}