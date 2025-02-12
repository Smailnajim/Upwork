<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;
use App\Models\RoleModel;

class RoleController {


    public function getRoleById($id){
        return RoleModel::newSelf()->getRoleById($id);
    }
}