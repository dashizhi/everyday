<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Field;

class TestoneController extends Controller
{
	public $enableCsrfValidation=false;

	public function actionAdd(){
		$data = Yii::$app->request->post();
		if($data){
				if($data['is_need'] == 1){
			if($data['fi_name'] == ''){
			echo '名称必填，因为你选择了必填';die;
			}
			if($data['fi_val'] == ''){
				echo '字段必填,因为你选择了必填';die;
			}
			if($data['fi_option_one'] == ''){
				echo '字段选择必填，因为你选择了必填，不服可以回去取消';die;
			}
		}
		}
	
		$model = new Field();
		if ($post=Yii::$app->request->post()) {
			$id=Yii::$app->request->post('ssid');
			
			if ($id){
				// print_r($id);die;
				// $post=Yii::$app->request->post("Field");
				// print_r($post);die;
				$model = Field::find()->where("id='$id'")->One();
				$model->fi_name=$post['fi_name'];
				$model->fi_l_start=$post['fi_l_start'];
				$model->fi_l_end=$post['fi_l_end'];
				$model->fi_type=$post['fi_type'];
				$model->fi_val=$post['fi_val'];
				$model->is_need=$post['is_need'];
				$model->fi_rule=$post['fi_rule'];
				$model->fi_option_one=$post['fi_option_one'];
				$model->fi_option_two=$post['fi_option_two'];
				$res=$model->save();

			if ($res) {
				return $this->redirect(['index']);
			}
			}
			
				$model->fi_name=$post['fi_name'];
				$model->fi_l_start=$post['fi_l_start'];
				$model->fi_l_end=$post['fi_l_end'];
				$model->fi_type=$post['fi_type'];
				$model->fi_val=$post['fi_val'];
				$model->is_need=$post['is_need'];
				$model->fi_rule=$post['fi_rule'];
				$model->fi_option_one=$post['fi_option_one'];
				$model->fi_option_two=$post['fi_option_two'];
				$res=$model->save();

			if ($res) {
				return $this->redirect(['index']);
			}
		}else{
			
			if ($id=Yii::$app->request->get('id')) {
				$model = $model->find()->where(["id"=>$id])->asArray()->all();
				$model=$model[0];
			}
				return $this->render('add',['model'=>$model]);
		}
	}
	//展示页面视图
	public function actionIndex(){
		$model = new Field();
		$data = $model->find()->asArray()->all();
		return $this->render('index',['data'=>$data]);
	}
	//删除
	public function actionDel(){
		$model = new Field();
		$id = Yii::$app->request->get('id');
		$res = $model->deleteAll('id = :id',[':id'=> $id]);
		if ($res) {
			return $this->redirect(['add']);
		}
	}

}