<?php

namespace App\Controller;

use App\Entity\Reunion;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReunionController extends AbstractController
{
    /**
     * @Route("/home", name="reunion")
     */
    public function index(ReunionRepository $repo): Response
    {
        return $this->render('Reunion/index.html.twig', ['Reunion'=> $repo->findAll()]);
    }

     /**
     * @Route("/home/create", name="reunion",methods={"GET","POST"})
     */

    public function create(Request $request)
    {
       if ($request->isMethod('POST')){
           dd($request->request -> get('RTitreReunion'));
       }
        return $this->render('Reunion/create.html.twig');
    }
}
