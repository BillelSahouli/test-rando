<?php

namespace ContainerKDlrTzt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbc898 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2cb5b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4974 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getConnection', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getMetadataFactory', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getExpressionBuilder', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'beginTransaction', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getCache', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'transactional', array('func' => $func), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->transactional($func);
    }

    public function commit()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'commit', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->commit();
    }

    public function rollback()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'rollback', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getClassMetadata', array('className' => $className), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'createQuery', array('dql' => $dql), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'createNamedQuery', array('name' => $name), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'createQueryBuilder', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'flush', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'clear', array('entityName' => $entityName), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->clear($entityName);
    }

    public function close()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'close', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->close();
    }

    public function persist($entity)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'persist', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'remove', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'refresh', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'detach', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'merge', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'contains', array('entity' => $entity), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getEventManager', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getConfiguration', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'isOpen', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getUnitOfWork', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getProxyFactory', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'initializeObject', array('obj' => $obj), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'getFilters', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'isFiltersStateClean', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'hasFilters', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return $this->valueHolderbc898->hasFilters();
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

        $instance->initializer2cb5b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbc898) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbc898 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbc898->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, '__get', ['name' => $name], $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        if (isset(self::$publicPropertiesb4974[$name])) {
            return $this->valueHolderbc898->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc898;

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

        $targetObject = $this->valueHolderbc898;
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
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc898;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbc898;
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
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, '__isset', array('name' => $name), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc898;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbc898;
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
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, '__unset', array('name' => $name), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc898;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbc898;
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
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, '__clone', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        $this->valueHolderbc898 = clone $this->valueHolderbc898;
    }

    public function __sleep()
    {
        $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, '__sleep', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;

        return array('valueHolderbc898');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2cb5b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2cb5b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2cb5b && ($this->initializer2cb5b->__invoke($valueHolderbc898, $this, 'initializeProxy', array(), $this->initializer2cb5b) || 1) && $this->valueHolderbc898 = $valueHolderbc898;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc898;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc898;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
