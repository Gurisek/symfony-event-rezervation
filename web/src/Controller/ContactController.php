<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactFormType;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{        
     
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
        if ($this->getUser()) {
            $user = $security->getUser();
            $email = $user->getEmail();
        
            $form = $this->createForm(ContactFormType::class, ['email' => $email]);
        } else {
            $form = $this->createForm(ContactFormType::class);
        }
        
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
    
            $email = (new Email())
                ->from($data['email'])
                ->to('rufir@palcat.cz')
                ->subject('Kontaktní formulář')
                ->text($data['message']);
    
            $mailer->send($email);
    
            $this->addFlash('success', 'Zpráva byla úspěšně odeslána.');
    
            return $this->redirectToRoute('homepage_default');
        }
    
        return $this->render('Homepage/about.html.twig', [
            'contact' => $form->createView(),
        ]);
    }
    
}



