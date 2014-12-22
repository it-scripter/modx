<?php

class Facebook extends Requests implements ServiceInterface
{

    public function getName()
    {
        return 'facebook';
    }

    public function getRequest($url)
    {
        $facebookURL = 'https://api.facebook.com/method/fql.query?';
        $facebookURL .= http_build_query( array('format' => 'json',
                                                'query'  => 'select share_count from link_stat where url="' . $url . '"') );
        return $this->createRequest($facebookURL);
    }

    public function extractCount($data)
    {
        return $data[0]['share_count'];
    }
}