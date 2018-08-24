<?php

namespace RefrigeratorController;

session_start();

require_once './Models/RefrigeratorModel.php';
require_once './Views/RefrigeratorView.php';

use RefrigeratorModel\RefrigeratorModel;
use RefrigeratorView\RefrigeratorView;


class RefrigeratorController
{

    public function actionStart()
    {
       $model = new RefrigeratorModel();
       $view = new RefrigeratorView();

       $query = 'select timestampdiff(day, "'.date('Y-m-d').'", datelimit) as limitonnow, id, name, datebuy, datemake, datelimit, timestampdiff(day, "'.date('Y-m-d').'", datelimit) as limitonnow_ from refrigerator order by limitonnow';
       $view->Dom($model->queryDB($query));
    }

    public function actionEnter()
    {
       $model = new RefrigeratorModel();

       $action = mysqli_real_escape_string($model->link, $_POST['type_action']);
       $id = intval($_POST['id']);
       $name = mysqli_real_escape_string($model->link, $_POST['name_title']);
       $datebuy = mysqli_real_escape_string($model->link, $_POST['buy_date']);
       $datemake = mysqli_real_escape_string($model->link, $_POST['make_date']);
       $datelimit = mysqli_real_escape_string($model->link, $_POST['limit_date']);
       if($model->queryValidate($name, $datebuy, $datemake, $datelimit))
       {
           if($action == 'add')
           {
              $query = 'insert into refrigerator(name, datebuy, datemake, datelimit) values("'.$name.'", "'.$datebuy.'", "'.$datemake.'", "'.$datelimit.'")';
           }
           else if($action == 'update')
           {
              $query = 'update refrigerator set name="'.$name.'", datebuy="'.$datebuy.'", datemake="'.$datemake.'", datelimit="'.$datelimit.'" where id='.$id;
           }
           mysqli_query($model->link, $query);
       }
       else
       {
           $dataReturn['error'] = "Error of entering of data(field name must be <u>not empty</u>, fields date of... must be <u>yyyy-mm-dd</u>)";
       }
       echo json_encode($dataReturn);
    }

    public function actionRemove()
    {
       $model = new RefrigeratorModel();

       $id = intval($_POST['id']);
       $query = 'delete from refrigerator where id='.$id;
       $model->queryDB($query);

    }

}