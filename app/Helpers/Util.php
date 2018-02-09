<?php
/**
 * Created by PhpStorm.
 * User: 15770
 * Date: 2018/2/9
 * Time: 10:10
 */

namespace App\Helpers;


class Util
{

    public static function getExceptionMessage($e, $needTraceDetail = 2)
    {
        $needTraceDetailEnv = intval(env('EXCEPTION_NEED_TRACE_DETAIL'));
        if ($needTraceDetailEnv == 3) {
            return $e->getMessage() . "\r\n File: " . $e->getFile() . "\r\n Line: " . $e->getLine();
        }
        if ($needTraceDetail == 2) {
            $needTraceDetail = intval(env('EXCEPTION_NEED_TRACE_DETAIL'));
        }
        if ($needTraceDetail != 0) {
            $msg = $e->getMessage() . "\r\n File: " . $e->getFile() . "\r\n Line: " . $e->getLine() . "\r\n Trace :" . $e->getTraceAsString();
        } else {
            $msg = $e->getMessage() . "\r\n File: " . $e->getFile() . "\r\n Line: " . $e->getLine();
        }
        return $msg;
    }

}