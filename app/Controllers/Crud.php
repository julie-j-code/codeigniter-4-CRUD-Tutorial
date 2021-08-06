<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CrudModel;

class Crud extends BaseController{
    function index (){
        // echo "Hello, this is a test";
        $crudModel = new CrudModel();
        $data['user_data']= $crudModel->orderBy('id', 'DESC')->paginate(10);
        $data['pagination_link'] = $crudModel->pager;

		return view('crud_view', $data);
    }
}

?>