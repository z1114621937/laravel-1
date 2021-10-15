<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student';
    protected $primaryKey='stuid';
    public  $timestamps=false;
    protected $guarded = [];

    /**
     * oys
     * 查询学生负责人个人信息
     * @param $stuid
     * @param $password
     * @return false
     */
    public static function oys_SelectStudent($stuid,$password){
        try {
            $res = Student::where('stuid',$stuid)->where('password',$password)->first();
            return $res;
        }catch (\Exception $e){
            logError('获取学生负责人个人信息失败',[$e->getMessage()]);
            return false;
        }
    }



}
