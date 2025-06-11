<?php

namespace App\EventListener;

class TimestampListener
{
    public function prePersist(object $entity): void
    {
        if (method_exists($entity, 'setCreatedAt') && method_exists($entity, 'setUpdatedAt')) {
            $now = new \DateTimeImmutable();
            $entity->setCreatedAt($now);
            $entity->setUpdatedAt($now);
        }
    }

    public function preUpdate(object $entity): void
    {
        if (method_exists($entity, 'setUpdatedAt')) {
            $entity->setUpdatedAt(new \DateTimeImmutable());
        }
    }
}