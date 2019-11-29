<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(Request $request)
    {
        $encoders = array(new XmlEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $data = array(
            'name'=>array('first'=>'Hanako', 'second'=>'Tanaka'),
            'age'=>29, 'mail'=>'hanako@flower.san'
        );

        $response = new Response();
        $response->headers->set('Content-Type', 'xml');
        $result = $serializer->serialize($data, 'xml');
        $response->setContent($result);

        return $response;

    }

}