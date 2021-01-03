<?php

namespace CoreTest\maker\http\fakes;

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
