<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/2
 * Time: 下午2:14
 */

class Bike {
    private $speed = 0;

    public function upSpeed(){
        $this->speed = $this->speed<1?1:$this->speed*1.2;
    }

    public function downSpeed(){
        $this->speed = $this->speed<1?0:$this->speed*0.7;
    }

    public function getSpeed(){
        return $this->speed;
    }
}

class People {
    public $bike;

    public function setBike(){
        $this->bike = new Bike();
    }


}



