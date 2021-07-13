<?php

namespace ContainerXxqrsfv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd6cae = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer47898 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7e9d = [
        
    ];

    public function getConnection()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getConnection', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getMetadataFactory', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getExpressionBuilder', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'beginTransaction', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getCache', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getCache();
    }

    public function transactional($func)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'transactional', array('func' => $func), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->transactional($func);
    }

    public function commit()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'commit', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->commit();
    }

    public function rollback()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'rollback', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getClassMetadata', array('className' => $className), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'createQuery', array('dql' => $dql), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'createNamedQuery', array('name' => $name), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'createQueryBuilder', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'flush', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'clear', array('entityName' => $entityName), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->clear($entityName);
    }

    public function close()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'close', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->close();
    }

    public function persist($entity)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'persist', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'remove', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'refresh', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'detach', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'merge', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getRepository', array('entityName' => $entityName), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'contains', array('entity' => $entity), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getEventManager', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getConfiguration', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'isOpen', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getUnitOfWork', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getProxyFactory', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'initializeObject', array('obj' => $obj), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'getFilters', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'isFiltersStateClean', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'hasFilters', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return $this->valueHolderd6cae->hasFilters();
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

        $instance->initializer47898 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd6cae) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd6cae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd6cae->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, '__get', ['name' => $name], $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        if (isset(self::$publicPropertiese7e9d[$name])) {
            return $this->valueHolderd6cae->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6cae;

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

        $targetObject = $this->valueHolderd6cae;
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
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6cae;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd6cae;
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
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, '__isset', array('name' => $name), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6cae;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd6cae;
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
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, '__unset', array('name' => $name), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6cae;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd6cae;
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
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, '__clone', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        $this->valueHolderd6cae = clone $this->valueHolderd6cae;
    }

    public function __sleep()
    {
        $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, '__sleep', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;

        return array('valueHolderd6cae');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer47898 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer47898;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer47898 && ($this->initializer47898->__invoke($valueHolderd6cae, $this, 'initializeProxy', array(), $this->initializer47898) || 1) && $this->valueHolderd6cae = $valueHolderd6cae;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd6cae;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd6cae;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
