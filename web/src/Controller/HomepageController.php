<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Cities;
use App\Entity\Users;
use App\Form\AddressFormType;
use App\Repository\AddressRepository;
use App\Repository\CitiesRepository;
use App\Repository\UsersRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends BaseController
{


        /**
     * @return Response
     * @Route("/", name="homepage_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/default.html.twig");


    }

    #[Route(path: 'homepage/dd', name: 'dd')]
    public function dd(): Response
    {
        return $this->render("Homepage/dd.html.twig");
    }

    #[Route(path: 'security/logged', name: 'logged')]
    public function logged(): Response
    {
        return $this->render("security/logged.html.twig");
    }

    #[Route(path:'event/admin', name: 'admin')]
    public function admin(): Response
    {
        return $this->render('event/admin.html.twig');
    }

    #[Route(path:'event/user', name: 'user')]
    public function user(): Response
    {
        return $this->render('event/user.html.twig');
    }
}