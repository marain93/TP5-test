<?php
/**
 * Created by PhpStorm.
 * User: marain
 * Date: 2018-12-07
 * Time: 00:18
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;

class Banner
{
    public function getBanner() {
        $data = [
            'id' => "1.2"
        ];
        $validate = new IDMustBePostiveInt();
        $res = $validate->batch()->check($data);
        var_dump($validate->getError());
        var_dump($res);
    }
}