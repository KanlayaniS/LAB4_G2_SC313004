<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.profile' shared service.

return $this->services['prestashop.core.form.choice_provider.profile'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ProfileChoiceProvider(($this->services['prestashop.adapter.data_provider.profile'] ?? $this->load('getPrestashop_Adapter_DataProvider_ProfileService.php'))->getProfiles(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguage()->id));
