<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    //Register new user
    /**
     * @Route("/inscription", name="register")
     */
    //Injected Dependencie : Request $request; AFTER with symfony 5.2 : UserEncoderInterface, BEFORE with symfony 5.3 : UserPasswordHasherInterface
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        //new user create
        $admin = new Admin();

        //create instance of form
        $form = $this->createForm(RegisterType::class, $admin);

        //listening the request
        $form->handleRequest($request);

        //if form is submited and the information is valid, get the data
        //and by default user have 'ROLE_USER' if you need to change in admin, modify this by 'ROLE_ADMIN' with ('')
        if ($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();

            $password = $userPasswordHasher->hashPassword($user, $user->getPassword());
            //dd($password);

            $user->setPassword($password);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }

        //return view '.html' and the form
        return $this->render('register/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
