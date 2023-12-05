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
        $validate = $this->validate([
            'userName' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Sorry. Name is required.'
                ]
            ],
            'userEmail' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Sorry. Email is required.',
                    'valid_email' => 'Email is not valid.'
                ]
            ],
            'userDate, userTime, userTable' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Please select proper information.'
                ]
            ],
            'userCode' => 'is_unique[reservation_db.reserve_code]'
        ]);

        //Data to be Transfer
        $data = [
            'name' => $this->request->getPost('userName'),
            'email' => $this->request->getPost('userEmail'),
            'seat_taken' => $this->request->getPost('userTable'),
            'reserve_date' => $this->request->getPost('userDate'),
            'reserve_time' => date('H:i', (int)$this->request->getPost('userTime')),
            'payment_mode' => $this->request->getPost('userPayment'),
            'reserve_code' => rand(000000000, 999999999),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($validate) {
            return redirect()->to('/reserve')->with('errors', $this->validator->getErrors());
        }

        $reservesModel = new ReservesModel();
        $reservesModel->save($data);
        return redirect()->to('/reserve')->with('message', 'Reservation Success!!');
    }
}
