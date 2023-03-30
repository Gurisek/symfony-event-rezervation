<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
#[IsGranted('ROLE_ADMIN')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    // Promote uživatele na roli 'ADMIN'
    #[Route('/{id}/user_promote', name: 'app_user_promote', methods:['GET', 'POST'])]
    public function promoteUser(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);
    
        if (!$user) {
            $this->addFlash('error', 'Uživatel nebyl nalezen');
            return $this->redirectToRoute('app_user_index');
        }
    
        $roleRepository = $entityManager->getRepository(Role::class);
        $role = $roleRepository->find(1);

        $user->removeRole($role);

        $roleRepository = $entityManager->getRepository(Role::class);
        $role = $roleRepository->find(2);

        $user->addRole($role);
    
        $entityManager->persist($user);
        $entityManager->flush();
    

        $this->addFlash(
            'succes',
            'Uživatel byl úspěšně povýšen do A-teamu'
        );
    
        return $this->redirectToRoute('app_user_index');
    }

    // Demote uživatele na roli 'USER' 
    #[Route('/{id}/user_demote', name: 'app_user_demote', methods:['GET', 'POST'])]
    public function demoteUser(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);
    
        if (!$user) {
            $this->addFlash('error', 'Uživatel nebyl nalezen');
            return $this->redirectToRoute('app_user_index');
        }
    
        $roleRepository = $entityManager->getRepository(Role::class);
        $role = $roleRepository->find(2);

        $user->removeRole($role);

        $roleRepository = $entityManager->getRepository(Role::class);
        $role = $roleRepository->find(1);

        $user->addRole($role);
    
        $entityManager->persist($user);
        $entityManager->flush();
    

        $this->addFlash(
            'succes',
            'Admin byl sesazen z funkce!'
        );
    
        return $this->redirectToRoute('app_user_index');
    }
}
