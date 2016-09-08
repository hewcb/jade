<?php
namespace Application\Factory;

use Interop\Container\ContainerInterface;
use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\Factory\FactoryInterface;
use Application\Service\ActivityRecorder;

class ApplicationControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $em = $container->get(EntityManager::class);
        $ar = $container->get(ActivityRecorder::class);
        return new $requestedName($em, $ar);
    }
}