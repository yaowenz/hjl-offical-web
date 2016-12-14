<?php
namespace App;

class Constants
{
    const ERR_CUSTOM = 999999;
    const ERR_INPUT = 900000;
    const ERR_API_SYSTEM = 600999;

    public static $errorMsg = [
        0 => 'success',
        self::ERR_CUSTOM => '出错了',
        self::ERR_INPUT => 900000,
        self::ERR_API_SYSTEM => '系统错误'
    ];
}
