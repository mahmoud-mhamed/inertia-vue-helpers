<?php

namespace Mahmoudmhamed\InertiaVueHelpers;

class Test
{
    public function justDoIt2()
    {
        $response = ['quote' => '44 test quote', 'author' => 'this is test message test'];

        return $response['quote'].' -'.$response['author'];
    }
}
