<?php
namespace App\Event;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class PasswordEncoderSubscriber implements EventSubscriberInterface
{
    
    public function __construct(
        private UserPasswordHasherInterface $encoder
    )
    {
        
    }
    
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['encodePassword', EventPriorities::PRE_WRITE]
        ];
    }

    public function encodePassword(ViewEvent $event){

        $user = $event->getControllerResult();

        if($user instanceof User && $event->getRequest()->getMethod() === 'POST'){
            $user->setPassword($this->encoder->hashPassword($user, $user->getPassword()));
        }

    }

}