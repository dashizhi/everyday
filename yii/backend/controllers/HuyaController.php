<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\user;

/**
 * Site controller
 */
class HuyaController extends Controller
{
   	public $enableCsrfValidation = false;
	public function actionLogin()
	{	
		return $this->render('login');
	}
	public function actionDenglu(){
		$res = 	Yii::$app->request->post();
		$phone = $res['phone'];
		$pwd = $res['pwd'];
		$model = new user();
		$res = $model->find()->where(['phone'=>$phone,'pwd'=>$pwd])->asArray()->one();
		if($res){
			return $this->redirect('index.php?r=huya/index');
		}else{
			echo "用户手机号或密码不正确";
		}

	}
	public function actionRegister()
	{
		return $this->render('register');
	}
	public function actionZhuce()
	{
		$zhuce = Yii::$app->request->post();
		if($zhuce['pwd'] != $zhuce['password']){
			echo "两次输入的密码不一致";die;
		}
		if($zhuce['phone'] == ""){
			echo "电话不能为空";die;
		}
		if($zhuce['pwd'] == ""){
			echo "密码不能为空";die;
		}
		if($zhuce){
			$db = Yii::$app->db;
			$arr['phone'] = $zhuce['phone'];
			$arr['pwd'] = $zhuce['pwd'];
			$res = $db->createCommand()->insert('user',$arr)->execute();
			if($res){
				return $this->redirect('index.php?r=huya/login');
			}
		}
	}
	public function actionIndex(){

		return $this->render('index');
		
	}
    }