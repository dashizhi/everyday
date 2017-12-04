<?php 

	namespace app\controllers;

	use Yii;
	use yii\web\Controller;
	use app\models\Ceshi;
	use app\models\Tent;
	use yii\data\Pagination;

	class CeshiController extends Controller{
		public function actionFirst(){
			$this->render('zhoukao/register.html');
		}
		public function actionHehe(){
			$res = Yii::$app->post();

		}
		public function actopnTwo(){
			$this->render('caonima');die;
		}
		