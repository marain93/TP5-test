<?php
/**
 * Created by PhpStorm.
 * User: marain
 * Date: 2018-12-07
 * Time: 09:51
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends Validate
{
    protected  $rule = [
        'id'=> 'require|isPositiveInteger'
    ];
    protected  function isPositiveInteger($value, $rule= '', $data= '', $field =''){
        if(is_numeric($value) && is_init($value + 0) && ($value + 0 )> 0){
            return true;
        }
        else {
            return $field."必须是正整数";
        }
    }
}