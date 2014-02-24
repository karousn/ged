<?php
namespace Mevia\GedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Mevia\GedBundle\Entity;

class DefaultController extends Controller
{
    //actions
    public function loginAction()
    {
        $request = $this->get('request');
        if ($request->isMethod('POST') && isset($_POST['email']) && isset($_POST['password'])) {
            $u = new \UserM();
            $login = $u->exists($_POST['email'],$_POST['password']);
            return $login ? $this->redirect($this->generateUrl('mevia_ged_dashboard')) : $this->redirect($this->generateUrl('mevia_ged_homepage'));
        } else return $this->redirect($this->generateUrl('mevia_ged_homepage'));
    }

    public function logoutAction()
    {
        $session = $this->getRequest()->getSession();
        $session->invalidate();
        return $this->redirect($this->generateUrl('mevia_ged_homepage'));
    }

    //views
    public function indexAction()
    {
        return $this->render('MeviaGedBundle:Default:index.html.twig');
    }

    public function dashboardAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $docs = $em->getRepository('MeviaGedBundle:Document')->findAll();

        return $this->render('MeviaGedBundle:Default:dashboard.html.twig', array('docs' => $docs));
    }


    /*
    public function addDocAction() {
        $em = $this->container->get('doctrine')->getEntityManager();

        $u = $em->find('MeviaGedBundle:User', 1);

        $doc1 = new Document();
        $doc1->setName('doc1');
        $doc1->setPath('/archive/1/sdfsdfsdfsdf_doc1.ppt');
        $doc1->setUser($u);
        $em->persist($doc1);

        $em->flush();

        $message = 'doc1 créée avec succès';

        return $this->container->get('templating')->renderResponse('MeviaGedBundle:Default:index.html.twig',
            array('message' => $message)
        );
    }
    */
}
