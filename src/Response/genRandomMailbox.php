<?php
namespace Rafli\Php1Secmail\Response;
class genRandomMailbox{
    private $result;
    function __construct($result)
    {
        $this->result = $result;
    }
    function getMail()
    {
        return $this->result;
    }
}