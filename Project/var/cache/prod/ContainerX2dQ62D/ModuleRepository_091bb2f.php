<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf15d6 = null;
    private $initializer0a07f = null;
    private static $publicProperties162cc = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'getList', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'getInstalledModules', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'getMustBeConfiguredModules', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'getUpgradableModules', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'setActionUrls', array('collection' => $collection), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return $this->valueHolderf15d6->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer0a07f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderf15d6) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderf15d6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderf15d6->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, '__get', ['name' => $name], $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        if (isset(self::$publicProperties162cc[$name])) {
            return $this->valueHolderf15d6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf15d6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf15d6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf15d6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf15d6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, '__isset', array('name' => $name), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf15d6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf15d6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, '__unset', array('name' => $name), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf15d6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf15d6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, '__clone', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        $this->valueHolderf15d6 = clone $this->valueHolderf15d6;
    }
    public function __sleep()
    {
        $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, '__sleep', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
        return array('valueHolderf15d6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0a07f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0a07f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer0a07f && ($this->initializer0a07f->__invoke($valueHolderf15d6, $this, 'initializeProxy', array(), $this->initializer0a07f) || 1) && $this->valueHolderf15d6 = $valueHolderf15d6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf15d6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf15d6;
    }
}
