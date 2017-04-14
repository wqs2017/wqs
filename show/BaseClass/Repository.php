<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2016/9/29
 * Time: 14:54
 */
namespace show\BaseClass;

//仓库类 --- 定义模型的操作CURD
class Repository
{
    protected $Model;
    //根据ID查找单条数据
    public function findById($id)
    {
        return app($this->Model)->find($id);
    }
    //根据条件进行查询
    public function findByKey($key, $value, $first = true)
    {
        if ($first) {
            return app($this->Model)->where($key, $value)->first();
        } else
            return app($this->Model)->where($key, $value)->get();
    }
    //查询所有数据
    public function getData(){
        return app($this->Model)->get();
    }
    //统计总个数
    public function countAll()
    {
        return app($this->Model)->count();
    }
    //根据条件获取个数
    public function countByLimitation($key,$limit,$value)
    {
        return app($this->Model)->where($key,$limit,$value)->count();
    }
    //查询所有的数据，一分页的形式
    public function pageNew($page){
        return app($this->Model)->paginate($page);
    }
    //添加数据----以数组的方式
    public function insertNew($model)
    {
        return app($this->Model)->create($model);
    }

    //修改数据---传入的参数---条件 数组
    public function updateNew($key, $value, $array)
    {
        return app($this->Model)->where($key, $value)->update($array);
    }
    //修改数据
    public  function update($where,$array){
        return app($this->Model)->where($where)->update($array);
    }

    //删除数据---传入条件
    public function deleteNew($key,$value)
    {
        return app($this->Model)->where($key,$value)->delete();
    }
    //删除数据，根据ID值
    public function deleteById($id){
        return app($this->Model)->destroy($id);
    }
}