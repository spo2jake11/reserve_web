<?php

namespace App\Controllers;

date_default_timezone_set('Asia/Manila');

use App\Controllers\BaseController;
use App\Models\ReservesModel;

class ReservationController extends BaseController
{
    public function index()
    {
        $data = [
            'message' => null
        ];
        return view('pages/reservation', $data);
    }
    public function create()
    {
        //Validation Rules
        $rules = [
            'userName' => 'trim|required|min_length[8]',
            'userEmail' => 'trim|required|valid_email',
            'userDate, userTime, userTable' => 'trim|required'
        ];

        //Data to be Transfer
        $data = [
            'name' => $this->request->getPost('userName'),
            'email' => $this->request->getPost('userEmail'),
            'seat_taken' => $this->request->getPost('userTable'),
            'reserve_date' => $this->request->getPost('userDate'),
            'reserve_time' => strtotime((string)$this->request->getPost('userTime')),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($this->validate($rules)) {
            return redirect()->to('/reserve')->with('errors', $this->validator->getErrors());
        }

        $reservesModel = new ReservesModel();
        $reservesModel->save($data);
        return redirect()->to('/reserve')->with('message', 'Reservation Success!!');
    }
}
