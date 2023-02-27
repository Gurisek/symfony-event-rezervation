<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Repository\EventRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;

#[Route('/event/events')]
#[IsGranted('ROLE_ADMIN')]
class EventUserController extends AbstractController
{
    // private $eventRepository;

    // public function __construct(EventRepository $eventRepository)
    // {
    //     $this->eventRepository = $eventRepository;
    // }

    #[Route('/',name:'joined_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository): Response
    {
        return $this->render('event/events/index.html.twig', [
            'events' => $eventRepository->findAll()
        ]);
    }

    #[Route('/{id}',name: 'joined_show', methods: ['GET'])]
    public function show($id, EventRepository $eventRepository): Response
    {
        $event = $eventRepository->find($id);
        $users = $event->getUsers();

        if (!$event) {
            throw $this->createNotFoundException(
                'Nebyl nalezen žadný event s id: '.$id
            );
        }

        return $this->render('event/events/show.html.twig', [
            'event' => $event,
            'users' => $users,
        ]);
    }


}