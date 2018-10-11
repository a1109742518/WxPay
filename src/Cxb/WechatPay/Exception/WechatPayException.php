<?php

namespace Cxb\WechatPay\Exception;


class WechatPayException extends \Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}