<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Request extends \Codeception\Module
{
    public function getParams($params, $test_params = array())
    {
        $coder = new \Helper\Coder;
        $full_req = array();
        $params["url"]["time"] = time();
        $params["url"]["ip"] = ip2long("192.168.1.1");
        $full_req["url"] = $coder->encoder(http_build_query($params["url"]), '&')[1];
        $params["eurl"]["crc"] = crc32("url=" . $full_req["url"]);
        $full_req["eurl%5B%5D"] = $coder->encoder(http_build_query($params["eurl"]), '&')[1];
        $full_req["seq"] = "0";
        return $full_req;
    }
}
