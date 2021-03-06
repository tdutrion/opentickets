<?php

namespace OpenTickets\Tickets\Service\Factory\Projection;

use OpenTickets\Tickets\Domain\Service\Configuration as OpenTicketsConfiguration;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TicketCountsFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator, $name = null, $requestedName = null)
    {
        $serviceLocator = $serviceLocator->getServiceLocator();
        return new $requestedName(
            $serviceLocator->get('doctrine.entitymanager.orm_default'),
            $serviceLocator->get(OpenTicketsConfiguration::class)
        );
    }
}