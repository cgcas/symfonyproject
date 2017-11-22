<?php
//src/AppBundle/Service/My_service.php
namespace AppBundle\Service;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\User;

class My_service
{
    private $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getHola()
    {
        echo "Hola";
        return;
    }

    public function newUser()
    {
        $user = new User();
        $user->setName('Carlos');
        $user->setDescription('El increible Carlos...');

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $this->em->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $this->em->flush();
        return;
    }

    public function newUserName($name,$des)
    {
        $user = new User();
        $user->setName($name);
        $user->setDescription($des);

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $this->em->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $this->em->flush();
        return;
    }
}