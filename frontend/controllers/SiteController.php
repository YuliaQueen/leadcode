<?php
namespace frontend\controllers;

use common\models\User;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function actionCreateAdmin()
    {
       $user = new User();
       $user->username = 'admin';
       $user->email = 'admin@leadcode.loc';
       $user->status = User::STATUS_ACTIVE;
       $user->setPassword('admin');
       $user->generateAuthKey();
       $user->save();
       echo 'Пользователь добавлен';
    }


    /**
     * Displays 404-page
     *
     * @return mixed
     *
     */
    public function actionError()
    {
        $this->layout = 'error';
        $error = Yii::$app->response->statusCode;

        if ($error === 404) {

            return $this->render('404');
        }
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }



    public function actionServices()
    {
        return$this->render('services');
    }

    public function actionAbout()
    {
        $this->layout = 'about';
        return $this->render('about');
    }

    public function actionAvtowestway()
    {
        return $this->render('avtowestway');
    }

    public function actionBehappy()
    {
        return$this->render('behappy');
    }

    public function actionBurotetimoti()
    {
        return $this->render('burotetimoti');
    }

    public function actionCases()
    {
        return $this->render('cases');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionCovenant()
    {
        return $this->render('covenant');
    }

    public function actionFillerlab()
    {
        return $this->render('fillerlab');
    }

    public function actionFsk()
    {
        return $this->render('fsk');
    }

    public function actionIccentr()
    {
        return $this->render('iccentr');
    }

    public function actionLogos()
    {
        return $this->render('logos');
    }

    public function actionOkonika()
    {
        return $this->render('okonika');
    }

    public function actionPolicy()
    {
        return $this->render('policy');
    }

    public function actionPolimer()
    {
        return $this->render('polimer');
    }

    public function actionSeostimul()
    {
        return $this->render('seostimul');
    }

    public function actionSvmebel()
    {
        return $this->render('svmebel');
    }

    public function actionTrc()
    {
        return $this->render('trc');
    }

}
