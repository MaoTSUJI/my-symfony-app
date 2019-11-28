<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        $result = '<html><body>';
        $result .= '<h1>Subscribed Services</h1>';
        $result .= '<ol>';
        $arr = $this->getSubscribedServices();

        foreach ($arr as $key => $value) {
            $result .= '<li>' .$key .'</li>';
        }
        $result .= '</ol>';
        $result .= '</body></html>';

        return new Response($result);
    }
}