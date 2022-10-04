<?php
namespace Rafli\Php1Secmail;
class SecMail{
    const GET = "https://www.1secmail.com/api/v1/";


    public function call($array)
    {
        $query = http_build_query($array);
        $result = file_get_contents(self::GET."?".$query);
        return (new Parser($array['action'],$result));
    }
    public function genRandomMailBox($max = 10)
    {
        $arr = ["action"=>"genRandomMailbox","count"=>$max];
        $result = $this->call($arr)->getResponse()->getMail();
        return $result;
    }
}