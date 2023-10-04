<?php

namespace Knp\DoctrineBehaviors\Bundle;

use Knp\DoctrineBehaviors\Bundle\DependencyInjection\DoctrineBehaviorsExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class DoctrineBehaviorsBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new DoctrineBehaviorsExtension();
    }
}
