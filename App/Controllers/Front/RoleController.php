<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;
use App\Models\RoleModel;

class RoleController extends FrontController{


    public function getRoleById($id){
        return RoleModel::newSelf()->getRoleById($id);
    }
}