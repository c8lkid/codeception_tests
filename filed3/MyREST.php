<?php
namespace Codeception\Module;
use Codeception\Module\REST;

class MyREST extends REST
{
    protected function execute($method, $url, $parameters = [], $files = [])
    {
        if("GET" == $method) {
            var_dump("OK");
        } else
        { parent::execute($method, $url, $parameters = [], $files = []); }
    }
}
