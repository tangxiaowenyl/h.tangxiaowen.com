<?php
/**
 * author   tangxiaowen
 * time     18-8-9 17:32
 * mail     846506584@qq.com
 * describe Url验证类
 */

namespace app\api\validate;

use think\Validate;

class Url extends Validate{

    protected $rule = [
        'open_id'      => 'require',
    ];

    protected $message = [
        'open_id'  => ['require' => 'open_id不能为空'],
    ];

    protected $scene = [
        'addUser'   => ['open_id'],
    ];

}