<?php

namespace MovieBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MovieController extends Controller
{
    /**
     * @Route("/movie/list", name="homepage")
     */
    public function listAction()
    {
        die('Here should render list of movies in db');
    }
}
