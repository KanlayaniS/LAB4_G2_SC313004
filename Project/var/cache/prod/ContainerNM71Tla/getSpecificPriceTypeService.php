<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Product\Pricing\SpecificPriceType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPriceType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Pricing\SpecificPriceType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.admin.url_generator'] ?? $this->load('getPrestashop_Core_Admin_UrlGeneratorService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $this->load('getAttributeRepositoryService.php')), new \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\SpecificPriceCombinationListener(($this->services['form.form_cloner'] ?? ($this->services['form.form_cloner'] = new \PrestaShopBundle\Form\FormCloner())), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php'))), ($this->services['PrestaShop\\PrestaShop\\Core\\Product\\Combination\\NameBuilder\\CombinationNameBuilderInterface'] ?? $this->load('getCombinationNameBuilderInterfaceService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id);
