<?php
namespace Rafli\Php1Secmail;
class Parser{
    private $response;
    public $parser = [
        'genRandomMailbox' => 'Rafli\Php1Secmail\Response\genRandomMailbox'
    ];
    function __construct($action,$result)
    {
        try{
            $this->response = new $this->parser[$action]($result);
        }catch(\Exception $e){
            throw new $e;
        }

    }
    function getResponse()
    {
        return $this->response;
    }
}