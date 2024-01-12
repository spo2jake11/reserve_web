<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class MenuController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $menuModel = $db->table('menu_db');
        $data = [
            'mainCourse'    => $menuModel->getWhere(['category' => 'Main courses'])->getResultArray(),
            'appetizer'    => $menuModel->getWhere(['category' => 'Appetizers'])->getResultArray(),
            'dessert'    => $menuModel->getWhere(['category' => 'Desserts'])->getResultArray(),
            'beverages'    => $menuModel->getWhere(['category' => 'Beverages'])->getResultArray()
        ];
        return view("pages/menu", $data);
    }
}
