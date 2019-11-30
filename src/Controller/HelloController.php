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
        $content = <<< EOM
        <html><head><title>Hello</title></head>
        <body><h1>Hello<h1>
        <p>this is Symfony sample page.</p>
        </body></html>
EOM;
        $response = new Response(
            $content,
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );

        return $response;

    }

    /**
     * @Route("/notfound", name="notfound")
     */
    public function notfound(Request $request)
    {
        $content = <<< EOM
        <html><head><title>ERROR</title></head>
        <body><h1>ERROR! 404</h1>
        </body></html>
EOM;

        $response = new Response(
            $content,
            Response::HTTP_NOT_FOUND,
            array('content-type' => 'text/html')
        );

        return $response;
    }

    /**
     * @Route("/error", name="error")
     */
    public function error(Request $request)
    {
        $content = <<< EOM
        <html><head><title>ERROR</title></head>
        <body><h1>ERROR! 500</h1>
        </body></html>
EOM;
         $response = new Response(
             $content,
             Response::HTTP_INTERNAL_SERVER_ERROR,
             array('content-type' => 'text/html')
         );

         return $response;
    }

}