<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        //print 'ทดสอบ 1';
        $a = 5;
        $b = 6;
        $sum = $a + $b;
        $param = ['sum' => $sum, 'a' => $a, 'b' => $b];
        //return $this->render('test1',['sum'=>$sum]);
        return $this->render('test1', $param);
    }


}
