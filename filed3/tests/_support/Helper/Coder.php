<?php
namespace Helper;

// Code/decode requets
class Coder extends \Codeception\Module
{
    function __construct() {}

    protected $url = "http://teststand60.adtech.rambler.ru:5555/coder.php?";

    public function encoder($req)
    {
        $s = preg_split("/\s+/", file_get_contents($this->url . "encode_url=" . $req));
        return $s;
    }

    public function decoder($req)
    {
        $s = preg_split("/\s+/", file_get_contents($this->url . "url=" . $req));
        return $s;
    }
}
