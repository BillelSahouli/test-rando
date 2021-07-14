<?php

namespace Container6juB6op;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4fbf0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1fe0c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8df13 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getConnection', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getMetadataFactory', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getExpressionBuilder', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'beginTransaction', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getCache', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'transactional', array('func' => $func), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->transactional($func);
    }

    public function commit()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'commit', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->commit();
    }

    public function rollback()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'rollback', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getClassMetadata', array('className' => $className), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'createQuery', array('dql' => $dql), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'createNamedQuery', array('name' => $name), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'createQueryBuilder', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'flush', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'clear', array('entityName' => $entityName), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->clear($entityName);
    }

    public function close()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'close', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->close();
    }

    public function persist($entity)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'persist', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'remove', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'refresh', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'detach', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'merge', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'contains', array('entity' => $entity), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getEventManager', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getConfiguration', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'isOpen', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getUnitOfWork', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getProxyFactory', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'initializeObject', array('obj' => $obj), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'getFilters', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'isFiltersStateClean', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'hasFilters', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return $this->valueHolder4fbf0->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1fe0c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4fbf0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4fbf0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4fbf0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, '__get', ['name' => $name], $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        if (isset(self::$publicProperties8df13[$name])) {
            return $this->valueHolder4fbf0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbf0;

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

        $targetObject = $this->valueHolder4fbf0;
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
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbf0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4fbf0;
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
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, '__isset', array('name' => $name), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbf0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4fbf0;
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
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, '__unset', array('name' => $name), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbf0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4fbf0;
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
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, '__clone', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        $this->valueHolder4fbf0 = clone $this->valueHolder4fbf0;
    }

    public function __sleep()
    {
        $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, '__sleep', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;

        return array('valueHolder4fbf0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1fe0c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1fe0c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1fe0c && ($this->initializer1fe0c->__invoke($valueHolder4fbf0, $this, 'initializeProxy', array(), $this->initializer1fe0c) || 1) && $this->valueHolder4fbf0 = $valueHolder4fbf0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4fbf0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4fbf0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
