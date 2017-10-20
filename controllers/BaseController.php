<?php  
/** 
 * Created by Jerome Peng. 
 * User: Administrator 
 * Date: 2017/10/20 
 * Time: 21:41
 */  
  
namespace app\controllers;  

use Yii;
use yii\web\Controller;  
  
class BaseController extends Controller
{   
    public function beforeAction($action)
    {
       return Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    }
}  