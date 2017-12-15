<?php

/** .-----------------------------------------------------------------------------------------------------------------
 * |  Github: https://github.com/Tinywan
 * |  Blog: http://www.cnblogs.com/Tinywan
 * |-------------------------------------------------------------------------------------------------------------------
 * |  Author: Tinywan(ShaoBo Wan)
 * |  DateTime: 2017/12/15 15:38
 * |  Mail: Overcome.wan@Gmail.com
 * '------------------------------------------------------------------------------------------------------------------*/

namespace live;

use Exception;

class Live
{

    /**
     * 初始化
     * @param array $config
     * @return string
     */
    public function init($config = [])
    {
        return "Nignx Live";
    }

    /**
     * 检查Redis是否安装
     * @return bool
     * @throws Exception
     */
    public function checkRedis()
    {
        if (!class_exists('redis', false)) {
            throw new Exception("必须安装redis扩展，请检查扩展是否安装");
        }
        return true;
    }
}