<?php 
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

// use app\models\User;
use DfaFilter\SensitiveHelper;
/**
 * Demo controller
 */

class HuyaController extends Controller
{
	public function actionShow()
	{
		return $this->render('show');
	}

	public function actionServer()
	{
		return $this->render('server');
	}
}