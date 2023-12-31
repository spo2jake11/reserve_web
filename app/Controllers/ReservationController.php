<?php

namespace App\Controllers;

date_default_timezone_set('Asia/Manila');

use App\Controllers\BaseController;
use App\Models\ReservesModel;

class ReservationController extends BaseController
{
    public function index()
    {
        return view('pages/reservation');
    }
    public function create()
    {
        //Validation Rules
        $rules = [
            "Name"      => "required|min_length[8]",
            "Email"     => "required|valid_email|isGmail",
            "Table"     => "isTaken",
            "Date"      => "required|isLate",
            "Time"      => "noTime",
            "Payment"   => "isPayment"
        ];
        $message = [
            "Email"     => [
                "isGmail" => "Sorry. Only Gmail is accepted as of now."
            ],
            "Table"     => [
                "isTaken" => "Accepting reservation for at least 1 person."
            ],
            "Date"      => [
                "isLate" => "Only accepting at least a day after for reservation. Cannot accept previous date."
            ],
            "Time"      => [
                "noTime" => "Please select time available."
            ],
            "Payment"   => [
                "isPayment" => "Please select a payment method available."
            ]
        ];

        //Data to be Transfer
        $data = [
            'name'          => $this->request->getPost('Name'),
            'email'         => $this->request->getPost('Email'),
            'seat_taken'    => $this->request->getPost('Table'),
            'reserve_date'  => $this->request->getPost('Date'),
            'reserve_time'  => date('H:i', (int)$this->request->getPost('Time')),
            'payment_mode'  => $this->request->getPost('Payment'),
            'status'        => "Waiting",
            'reserve_code'  => rand(000000000, 999999999),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ];

        //If validation returns false
        if (!$this->validate($rules, $message)) {
            return redirect()
                ->to('/reserve')
                ->withInput()
                ->with('validation', $this->validator);
        } //It doesn't need else because it already redirected

        //If the condition is true and skipped

        $reservesModel = new ReservesModel();
        $reservesModel->save($data);

        $this->print($data); //This function calls the printable to be saved as .txt file
        return redirect()
            ->to('reserve')
            ->with('message', "Reservation completed. Please show the code given to the reception upon arrival.");
    }
    public function print($data)
    {
        $textOutput = "
            Subject: Reservation Information\n

            Dear Mr/Ms/Mrs " . $data['name'] . "\n
            
            Your reservation is scheduled for:\n\n

            Date: " . $data['reserve_date'] . "\n
            Time: " . $data['reserve_time'] . "\n
            
            Your reference number for your reservation is: " . $data['reserve_code'] . "\n
            
            Kindly present the reference code at your arrival.\n
            
            Kind regards,\n
            Chik n' Yats Dining";

        $text = str_replace(' ', '_', preg_replace('/[^a-zA-Z0-9\s]/', ' ', $data['created_at'])) . '.txt';
        $filePath = WRITEPATH . 'uploads/' . $text;

        file_put_contents($filePath, $textOutput);
    }
}
