<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.filters_builder.resolver' shared service.

return $this->services['prestashop.filters_builder.resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \PrestaShopBundle\Controller\ArgumentResolver\FiltersBuilderResolver(($this->services['prestashop.core.search.builder'] ?? $this->load('getPrestashop_Core_Search_BuilderService.php'))), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));