<?php
namespace Mrzkit\LaravelExtensionStructureStrategy;

trait StructureStrategy
{
    /**
     * @var string
     */
    protected $structureType;

    /**
     * @var string
     */
    protected static $underLine = 'underline';

    /**
     * @var string
     */
    protected static $hump = 'hump';

    /**
     * @desc 获取下划线标识
     * @return string
     */
    public static function getUnderline() : string
    {
        return static::$underLine;
    }

    /**
     * @desc 获取驼峰标识
     * @return string
     */
    public static function getHump() : string
    {
        return static::$hump;
    }

    /**
     * @return string
     */
    public function getStructureType() : string
    {
        return $this->structureType;
    }

    /**
     * @param string $structureType
     * @return $this
     */
    public function setStructureType(string $structureType)
    {
        $this->structureType = $structureType;

        return $this;
    }

    /**
     * @desc 是否下划线
     * @return bool
     */
    final public function isUnderline() : bool
    {
        return $this->getStructureType() == static::getUnderline();
    }

    /**
     * @desc 是否驼峰
     * @return bool
     */
    final public function isHump() : bool
    {
        return $this->getStructureType() == static::getHump();
    }

    /**
     * @desc 使用下划线
     * @return $this
     */
    final public function useUnderline()
    {
        return $this->setStructureType(static::getUnderline());
    }

    /**
     * @desc 使用驼峰
     * @return $this
     */
    final public function useHump()
    {
        return $this->setStructureType(static::getHump());
    }
}
