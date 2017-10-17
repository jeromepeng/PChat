<?php  
/** 
 * Created by PhpStorm. 
 * User: Administrator 
 * Date: 2016/3/16 
 * Time: 23:03 
 */  
  
namespace app\controllers\auth;  
  
use app\controllers\BaseController;
use app\models\auth\BaseAuth;
use Yii;
  
class BaseAuthController extends BaseController
{   
    public function actionAuth()
    {  
        $baseAuth = new BaseAuth();
        $baseAuth->username = 'llaiaipp';
        $baseAuth->password = '123';
        return $baseAuth->oneInfo();
    }  
}  