<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//设备表
class Equipment extends Model
{
    protected $table='equipment';
    protected $primaryKey='equipment_id';
    public  $timestamps=true;
    protected $guarded = [];


    /**
     * 设备的增加
     * @author oys
     * @param $equipment_name
     * @param $model
     * @param $number
     * @param $annex
     * @return false
     */
    public static function AddEquipment($equipment_name,$model,$number,$annex)
    {
        try {
            //设备表成功
            $res=self::create(
                [
                    'equipment_name'=>$equipment_name,
                    'model'=>$model,
                    'number'=>$number,
                    'annex'=>$annex,
                ]
            );
            return $res;
        }catch (\Exception $e){
            logError('设备录入成功',[$e->getMessage()]);
            return false;
        }
    }


    /**
     * 设备的删除
     * @author oys
     * @param $equipment_id
     * @return false
     */
    public static function DeleteEquipment($equipment_id)
    {
        try {
            $res=self::where('equipment_id',$equipment_id)->delete();
            return $res;
        }catch (\Exception $e){
            logError('设备删除成功',[$e->getMessage()]);
            return false;
        }
    }


    /**
     * 设备的修改
     * @author oys
     * @param $equipment_id
     * @param $equipment_name
     * @param $model
     * @param $number
     * @param $annex
     * @return false
     */
    public static function UpdateEquipment($equipment_id,$equipment_name,$model,$number,$annex)
    {
        try {
            $res=self::where('equipment_id',$equipment_id)->
           update([
               'equipment_name'=>$equipment_name,
                'model'=>$model,
                'number'=>$number,
                'annex'=>$annex,
            ]);
            return $res;
        }catch (\Exception $e){
            logError('设备修改成功',[$e->getMessage()]);
            return false;
        }
    }


    /**
     * 查看所有设备
     * @author oys
     * @return false
     */
    public static function AllEquipment()
    {
        try {
            //设备查看成功
            $res=self::get();
            return $res;
        }catch (\Exception $e){
            logError('设备录入成功',[$e->getMessage()]);
            return false;
        }
    }


    /**
     * 查看单个的设备
     * @author oys
     * @param $equipment_id
     * @return false
     */
    public static function SelectEquipment($equipment_id)
    {
        try {
            //设备查看成功
            $res=self::where('equipment_id',$equipment_id)->first();
            return $res;
        }catch (\Exception $e){
            logError('设备录入成功',[$e->getMessage()]);
            return false;
        }
    }


}
