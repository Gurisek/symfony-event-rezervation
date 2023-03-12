<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Entity\User;
use App\Repository\EventRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomepageController extends BaseController
{

    // homepage podle toho jestli prihlasen ano/ne a show po prihlaseni

    #[Route('/', name: 'homepage_default', methods: ['GET'])]
    public function default(EventRepository $eventRepository): Response
    {
        $user = $this->getUser();

        if ($user === null) {
            return $this->render("Homepage/default.html.twig");
        } elseif ($this->isGranted("ROLE_USER")) {
            return $this->render("event/user/user_index.html.twig", [
                'events' => $eventRepository->findAll(),
            ]);
        }
    }

    // show pro prihlasene

    #[Route('event/user/{id}', name: 'user_event_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function userShowEvent(Event $event): Response
    {
        return $this->render('event/user/user_show.html.twig', [
            'event' => $event,
        ]);
    }

    // index a show bez prihlaseni

    #[Route('/index', name: 'no_user_index', methods: ['GET'])]
    public function noUserindex(EventRepository $eventRepository): Response
    {
        return $this->render('Homepage/index_event.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }

    #[Route('show/{id}', name: 'no_user_show', methods: ['GET'])]
    public function noUserShowEvent(Event $event): Response
    {
        return $this->render('Homepage/show_event.html.twig', [
            'event' => $event,
        ]);
    }

    // ostatní funkce

    /**
     * @Route("/about", name="about")
     */
    public function About(): Response
    {
        return $this->render('Homepage/about.html.twig', []);
    }


}