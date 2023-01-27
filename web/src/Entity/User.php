<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Tento e-mail je již použit, zkuste se přihlásit.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\ManyToMany(targetEntity: Event::class, inversedBy: 'users')]
    private $events;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $secondName;

    #[ORM\Column(type: 'string', length: 255)]
    private $nickName;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $telNumber;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $social;

    #[ORM\ManyToMany(targetEntity: Role::class, inversedBy: 'users')]
    private $role;

    public $doctrine;

    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->role = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = [];
        foreach ($this->role as $userRole) {
            $roles[] = $userRole->getRoleName();
        }
        return $roles;
    }

    public function setRoles(array $roles, EntityManagerInterface $entityManager): self
{
    if (!in_array('ROLE_USER', $roles)) {
        $roles[] = 'ROLE_USER';
    }

    $this->role->clear();
    foreach ($roles as $role) {
        $newRole = $entityManager->getRepository(Role::class)->findOneBy(['role_name' => $role]);
        if (!$newRole) {
            $newRole = new Role();
            $newRole->setRoleName($role);
            $entityManager->persist($newRole);
        }
        $this->role->add($newRole);
    }

    return $this;
}

//     public function setRoles(array $roles): self
// {
//     if (!in_array('ROLE_USER', $roles)) {
//         $roles[] = 'ROLE_USER';
//     }

//     $this->role->clear();
//     foreach ($roles as $role) {
//         $newRole = $this->doctrine->getRepository(Role::class)->find($role);
//         if (!$newRole) {
//             throw new \Exception("Role not found");
//         }
//         $this->role->add($newRole);
//     }

//     return $this;
// }

    // public function setRoles(array $roles): self
    // {
    //     if (!in_array('ROLE_USER', $roles)) {
    //         $roles[] = 'ROLE_USER';
    //     }
    
    //     $this->role->clear();
    //     foreach ($roles as $role) {
    //         $newRole = new Role();
    //         $newRole->setRoleName($role);
    //         // $this->getDoctrine()->getManager()->persist($newRole);
    //         $this->role->add($newRole);
    //     }
    
    //     return $this;
    // }


    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(string $secondName): self
    {
        $this->secondName = $secondName;

        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    public function setNickName(string $nickName): self
    {
        $this->nickName = $nickName;

        return $this;
    }

    public function getTelNumber(): ?int
    {
        return $this->telNumber;
    }

    public function setTelNumber(?int $telNumber): self
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    public function getSocial(): ?string
    {
        return $this->social;
    }

    public function setSocial(?string $social): self
    {
        $this->social = $social;

        return $this;
    }

    // Přidělování eventů

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
        }

        return $this;
    }

    public function removeEvent(Event $event): self
    {
        $this->events->removeElement($event);

        return $this;
    }

    // Přidělování rolí

    /**
     * @return Collection<int, Role>
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(Role $role): self
    {
        if (!$this->role->contains($role)) {
            $this->role[] = $role;
            $role->addUser($this);
        }
    
        return $this;
    }

    public function removeRole(Role $role): self
    {
    if ($this->role->contains($role)) {
    $this->role->removeElement($role);
    $role->removeUser($this);
    }
        return $this;
    }
}
