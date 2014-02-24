<?php
use Mevia\GedBundle\Entity\User;

/**
 * Model User
 */
class UserM extends User
{
    public function exists($email, $password)
    {
        $repository = $this->getDoctrine()->getRepository('AcmeStoreBundle:User');
        $user = $repository->findOneBy(array('email' => $email, 'password' => $password));
        return $user != null;
        $repository->flush();
    }
}