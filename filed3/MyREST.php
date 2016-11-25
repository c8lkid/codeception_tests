<?php
namespace Codeception\Module;
use Codeception\Module\REST;

class MyREST extends REST
{
    protected function execute($method, $url, $parameters = [], $files = [])
	{
        // allow full url to be requested
        if (strpos($url, '://') === false) {
            $url = $this->config['url'] . $url;
        }

        $this->params = $parameters;

        $parameters = $this->encodeApplicationJson($method, $parameters);

        if (is_array($parameters) || $method === 'GET') {
            if (!empty($parameters) && $method === 'GET') {
                if (strpos($url, '?') !== false) {
                    $url .= '&';
                } else {
                    $url .= '?';
                }
                $url .= http_build_query($parameters);
				$url = urldecode($url);
            }
            if ($method == 'GET') {
                $this->debugSection("Request", "$method $url");
                $files = [];
            } else {
                $this->debugSection("Request", "$method $url " . json_encode($parameters));
                $files = $this->formatFilesArray($files);
            }
            $this->response = (string)$this->connectionModule->_request($method, $url, $parameters, $files);
        } else {
            $requestData = $parameters;
            if (!ctype_print($requestData) && false === mb_detect_encoding($requestData, mb_detect_order(), true)) {
                // if the request data has non-printable bytes and it is not a valid unicode string, reformat the
                // display string to signify the presence of request data
                $requestData = '[binary-data length:' . strlen($requestData) . ' md5:' . md5($requestData) . ']';
            }
            $this->debugSection("Request", "$method $url " . $requestData);
            $this->response = (string)$this->connectionModule->_request($method, $url, [], $files, [], $parameters);
        }
        $this->debugSection("Response", $this->response);
    }
    // {
    //     if("GET" == $method) {
    //         var_dump("OK");
    //     } else
    //     { parent::execute($method, $url, $parameters = [], $files = []); }
    // }
}
