<?php

class DecodeCest
{
        protected $params = array("url" => array(
                                "pad_id"=>"432345462",
                                "orig_pad_id"=>"432345462",
                                "segment"=>"3",
                                "adcampaign_id"=>"432927142",
                                "user_id"=>"429804626",
                                "place"=>"6",
                                "context_type"=>"2",
                                "server_id"=>"1043020",
                                "keywords"=>"",
                                "condition_action"=>"0",
                                "misc"=>"16388",
                                "ip"=>"91.192.151.1",
                                "rid"=>"700",
                                "time"=>"",
                                "uuid"=>"00000fa4-57b3-226b-5ff7-fa206b39e1ea",
                                "impression_id"=>"777",
                                "sex"=>"0",
                                "age"=>"0",
                                "ad_domain"=>"yandex.ramblermedia.com",
                                "upstream"=>"codes",
                                "content_type"=>"FFFFFF,FFFFFF,application/x-html",
                                "banner_id"=>"432927145",
                                "condition_id"=>"432927146",
                                "kind"=>"show",
                                "nurl"=>"%2F%2Fssp.rambler.ru%2Ftemplate%3Fbanner_id%3D432927144%26content_type%3D1%2C1%2Capplication%2Fx-html%26impression_id%3D1b940-6cb44-ec826%26jparams%3D%257B%2522adfox%2522%253A%257B%2522p1%2522%253A%2522btxxa%2522%252C%2522p2%2522%253A%2522fcuz%2522%252C%2522pct%2522%253A%2522a%2522%252C%2522puid29%2522%253A%2522m3%2522%252C%2522pli%2522%253A%2522a%2522%252C%2522plp%2522%253A%2522a%2522%252C%2522pop%2522%253A%2522a%2522%252C%2522pfc%2522%253A%2522a%2522%252C%2522pfb%2522%253A%2522a%2522%252C%2522pt%2522%253A%2522b%2522%252C%2522pd%2522%253A14%252C%2522pw%2522%253A1%252C%2522pv%2522%253A12%252C%2522prr%2522%253A%2522%2522%252C%2522pdw%2522%253A1920%252C%2522pdh%2522%253A1080%252C%2522dl%2522%253A%2522https%253A%252F%252Fweather.rambler.ru%252F%2522%252C%2522pr1%2522%253A806351%252C%2522random%2522%253A299917%252C%2522pr%2522%253A290115%252C%2522puid59%2522%253A1%252C%2522account_id%2522%253A171817%252C%2522lpdid%2522%253A%252210%253A305852186%2522%257D%252C%2522p1%2522%253A%2522btxxa%2522%252C%2522p2%2522%253A%2522fcuz%2522%252C%2522pct%2522%253A%2522a%2522%252C%2522pli%2522%253A%2522a%2522%252C%2522plp%2522%253A%2522a%2522%252C%2522pop%2522%253A%2522a%2522%252C%2522puid29%2522%253A%2522m3%2522%257D%26statid%3D16388%26segments%3D%257B%2522xtk%2522%253A%25226610%252C7685%252C147%252C7711%252C1815%252C1817%252C1816%2522%257D",
                                "cost"=>"0.00074",
                                "bid"=>"0.00074",
                                "autobid"=>"0",
                                "position"=>"0",
                                "request_id"=>"517960174",
                                "pserver_id"=>"1043020",
                                "domain"=>"",
                                "page_id"=>"4b4bfa80e899c7c9",
                                "kwtype"=>"4194304",
                                "model_ident_main"=>"baseline2",
                                "model_ident_test"=>"baseline2",
                                "cpm"=>"0.00082",
                                "test_cpm"=>"0.00082",
                                "baseline_cpm"=>"0.00082",
                                "weight"=>"1.00000",
                                "cluster_ts"=>"1433847000",
                                "cluster_id"=>"43",
                                "priority"=>"0",
                                "ctr"=>"0.01391",
                                "test_ctr"=>"0.01391",
                                "baseline_ctr"=>"0.01391",
                                "copt_seg"=>"0",
                                "copt_clu"=>"0"),
                            "eurl" => array(
                                "block_id"=>'123123123',
                                "view_type"=>"549755813888",
                                "in_upstream"=>"rambler",
                                "crc"=>""
                            ));

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function testReq(AcceptanceTester $I, \Helper\Request $req)
    {
        $url = "http://localhost:7503/file.jsp";
        $I->sendGET($url,$req->getParams($this->params));
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
    }

    public function testCoder(AcceptanceTester $I, \Helper\Request $req)
    {
        var_dump($req->getParams($this->params));
    }
}
