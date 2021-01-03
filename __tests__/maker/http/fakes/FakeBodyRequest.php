<?php

namespace CoreTest\fakes\http\mocks;

class FakeBodyRequest
{
    public static function loadBody()
    {
        return json_encode(array(
            'testFiledOne' => 'testValuOne',
            'testFiledTwo' => 'testValueTwo'
        ), true);
    }
}
