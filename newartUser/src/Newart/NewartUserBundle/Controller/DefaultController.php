<?php

namespace Newart\NewartUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $userRepository = $this->getDoctrine()->getRepository('NewartUserBundle:User');

        $users = $userRepository->findAll();

        return [
            'users' => $users,
        ];
    }
}
