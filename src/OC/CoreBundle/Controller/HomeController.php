<?php

// src/OC/CoreBundle/Controller/HomeController.php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction()
    {
        // Ici, on récupère la liste des dernières annonces par le biais d'un service
        $lastAdverts = $this->container->get('oc_platform.advert')->lastAdvert();

        // Puis on la transmet au template
        return $this->render('OCCoreBundle:Home:index.html.twig', array(
          'lastAdverts' => $lastAdverts
        ));
    }

    public function contactAction(Request $request)
    {
        $session = $request->getSession()->getFlashBag()->add('info', 'La page de contact n\'est pas encore disponible, merci de revenir plus tard.');

        return $this->redirectToRoute('oc_core_homepage');
    }
}
