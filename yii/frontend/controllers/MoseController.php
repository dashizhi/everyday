<?php 

	namespace frontend\controllers;

	use Yii;
	use yii\web\Controller;
	use frontend\models\Ceshi;
	use frontend\models\Tent;
	use yii\data\Pagination;

    use DfaFilter\SensitiveHelper;

	class MoseController extends Controller{
		public $enableCsrfValidation=false;
		public function actionIndex(){
			
			return $this->render('index');
		}
	}

?>