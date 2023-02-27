<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface as ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository): Response
    {
        // $row = $this->countJoined();

        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findAll(),
            // 'row' => $row
        ]);
    }

    // #[Route('/{id}', name: 'count_event', methods: ['GET'])]
    // public function countJoined(EntityManagerInterface $entityManager): Response
    // {
    //     // SQL dotaz pro získání počtu přihlášených uživatelů
    //     $query = '
    //         SELECT eu.event_id, COUNT(eu.user_id) as count
    //         FROM event_user eu
    //         GROUP BY eu.event_id
    //     ';
    
    //     // Vytvoření instance Query a spuštění dotazu
    //     $statement = $entityManager->getConnection()->prepare($query);
    //     $statement->execute();
    
    //     // Získání výsledku dotazu
    //     $result = $statement->fetchAll();
    
    //     // Vytvoření asociativního pole s počtem přihlášených uživatelů pro každou událost
    //     $counts = [];
    //     foreach ($result as $row) {
    //         $counts[$row['event_id']] = $row['count'];
    //     }
    
    //     // Vrácení odpovědi s počtem přihlášených uživatelů
    //     return $this->json($counts);
    // }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EventRepository $eventRepository): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->add($event);

            $this->addFlash(
                'succes',
                'Akce úspěšně založena!'
            );

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->add($event);
            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $eventRepository->remove($event);

            $this->addFlash(
                'succes',
                'Akce úspěšně odstraněna!'
            );
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }


  #[Route("/event/user/{id}/join", name: "event_join")]
  #[IsGranted('ROLE_USER')]
  public function join(Event $event, ObjectManager $objectManager)
  {
      $user = $this->getUser();
      if ($event->hasUser($user)) {
          $this->addFlash(
                'warning',
                'Na tuto akci jste již přihlášen!'
          );
      } else {
          $event->addUser($user);
          $objectManager->persist($event);
          $objectManager->flush();
  
          $this->addFlash(
              'succes',
              'Jste úspěšně přihlášen na akci! Počítáme s vaší účastí.'
          );
      }
  
      return $this->redirectToRoute('homepage_default');
  }

  #[Route("/event/user/{id}/leave", name: "event_leave")]
  #[IsGranted('ROLE_USER')]
  public function leave(Event $event, ObjectManager $objectManager)
  {
      $user = $this->getUser();
      if (!$event->hasUser($user)) {
          $this->addFlash(
              'warning',
              'V záznamu nemáme hlášenou vaši účast.'
          );
      } else {
          $event->removeUser($user);
          $objectManager->persist($event);
          $objectManager->flush();
  
          $this->addFlash(
              'succes',
              'Úspěšně jste se odhlásil z účasti na akci! Přejeme hezký den.'
          );
      }
  
      return $this->redirectToRoute('homepage_default');
  }

}

