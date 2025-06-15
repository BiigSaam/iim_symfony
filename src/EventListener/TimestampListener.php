<?php

namespace App\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use DateTimeImmutable;

class TimestampListener
{
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (method_exists($entity, 'setCreatedAt') && method_exists($entity, 'setUpdatedAt')) {
            $now = new DateTimeImmutable();
            $entity->setCreatedAt($now);
            $entity->setUpdatedAt($now);
        }
    }

    public function preUpdate(PreUpdateEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (method_exists($entity, 'setUpdatedAt')) {
            $entity->setUpdatedAt(new DateTimeImmutable());
        }
    }
}
?>