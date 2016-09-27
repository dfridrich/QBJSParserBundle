<?php

namespace FL\QBJSParserBundle\Model;

class ParserQuery
{
    /**
     * @var string
     */
    private $className;

    /**
     * @var string
     */
    private $jsonString;

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @param string $className
     * @return ParserQuery
     */
    public function setClassName(string $className): ParserQuery
    {
        $this->className = $className;

        return $this;
    }

    /**
     * @return string
     */
    public function getJsonString(): string
    {
        return $this->jsonString;
    }

    /**
     * @param string $jsonString
     * @return ParserQuery
     */
    public function setJsonString(string $jsonString): ParserQuery
    {
        $this->jsonString = $jsonString;

        return $this;
    }
}