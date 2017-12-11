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
class AdminController extends Controller
{
	public function actionRelease()
	{
		return $this->render('release');
	}
	public function actionRecord(){
		return $this->render('record');
	}
}