<?php
/**
 * author   tangxiaowen
 * time     18-8-9 17:30
 * mail     846506584@qq.com
 * describe Url管理
 */

namespace app\api\controller;


class Url extends Base{

    static $urlTable = 'url';

    /**
     * 创建url
     */
    public function setUrl(){



    }

    /**
     * 获取url
     * @return json
     */
    public function getUrl(){

        $result = db('url')->where('status',1)->select();
        return controllerReturnResult($result,$result,'','没有数据');

    }

}