<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $url = 'http://api.giphy.com/v1/gifs/search?q='.$_GET['q'].'&api_key=dc6zaTOxFJmzC';
        $obj = json_decode(file_get_contents($url), true);

        return $this->render('default/index.html.twig', [
            'alt' => $_GET['q'],
            'src' => $obj['data'][0]['images']['original']['url'],
        ]);
    }
}
