<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Secteur;
use App\Entity\Liaison;
use App\Entity\Port;
use App\Repository\SecteurRepository;
use App\Repository\LiaisonRepository;
use App\Repository\PortRepository;
use Symfony\Component\HttpFoundation\Request;

class BateauController extends AbstractController
{
    /**
     * @Route("/bateau", name="bateau")
     */
    public function index(Request $request)
    {

      $port = $this->getDoctrine()->getRepository(Port::class);

      $ports = $port->findAll();

      $liaison = $this->getDoctrine()->getRepository(Liaison::class);

      $liaisons = $liaison->findAll();

      $secteur = $this->getDoctrine()->getRepository(Secteur::class);

      $secteurs = $secteur->findAll();

      if ($request->isMethod('post')) {
        
          $idSecteur = $_POST['idSecteur'];

          $request = "POST";

          return $this->render('bateau/index.html.twig', [
              'idSecteur' => $idSecteur,
              'requette' => $request,
              'liaisons' => $liaisons,
              'liaison' => $liaison,
              'ports' => $ports,
              'port' => $port,
              'secteurs' => $secteurs,
              'secteur' => $secteur,
              'controller_name' => 'BateauController',
          ]);
      }else {

          $request = "GET";

          return $this->render('bateau/index.html.twig', [
                  'requette' => $request,
                  'liaisons' => $liaisons,
                  'liaison' => $liaison,
                  'ports' => $ports,
                  'port' => $port,
                  'secteurs' => $secteurs,
                  'secteur' => $secteur,
                  'controller_name' => 'BateauController',
              ]);
      }

    }

    /**
     * @Route("/info", name="info")
     */
    public function info()
    {

        $port = $this->getDoctrine()->getRepository(Port::class);

        $ports = $port->findAll();

        $liaison = $this->getDoctrine()->getRepository(Liaison::class);

        $liaisons = $liaison->findAll();

        $secteur = $this->getDoctrine()->getRepository(Secteur::class);

        $secteurs = $secteur->findAll();

        return $this->render('bateau/info.html.twig', [
            'liaisons' => $liaisons,
            'liaison' => $liaison,
            'ports' => $ports,
            'port' => $port,
            'secteurs' => $secteurs,
            'secteur' => $secteur
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('bateau/home.html.twig', [
            'title' => 'ATLANTIK',
        ]);
    }

}
