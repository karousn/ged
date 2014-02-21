<?php
namespace Mevia\GedBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $docs = $em->getRepository('MeviaGedBundle:Document')->findAll();

        return $this->render('MeviaGedBundle:Default:index.html.twig', array('docs' => $docs));
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
