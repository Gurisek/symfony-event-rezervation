<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use App\Form\ContactFormType;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{        
    protected $transport;
     
    /**
     * contact
     *
     * @param  mixed $request
     * @param  mixed $mailer
     * @param  mixed $security
     * @return void
     * @Route("/about", name="about")
     */
    public function contact(Request $request, MailerInterface $mailer, Security $security)
    {
        // Create a Transport object
        $transport = Transport::fromDsn($_ENV['MAILER_DSN']);
        // Create a Mailer object
        $mailer = new Mailer ($transport);
    
        $userEmail = null;
        if ($this->getUser()) {
            $user = $security->getUser();
            $userEmail = $user->getEmail();
        }
    
        $form = $this->createForm(ContactFormType::class, ['email' => $userEmail]);
            
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
    
            $email = (new Email())
                ->from($data['email'] ?? $userEmail)
                ->to('ssemi.event@gmail.com')
                ->replyTo($data['email'])
                ->subject('Kontaktní formulář')
                ->text($data['message']);
    
            $mailer->send($email);
    
            $this->addFlash('succes', 
                'Zpráva byla úspěšně odeslána.'
            );
    
            return $this->redirectToRoute('about');
        }
    
        return $this->render('Homepage/about.html.twig', [
            'contact' => $form->createView(),
        ]);
    }
    
}



