<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.no9llaW' shared service.

return $this->privates['.service_locator.no9llaW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'appointmentRepository' => ['privates', 'App\\Repository\\AppointmentRepository', 'getAppointmentRepositoryService.php', true],
]);