<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; 
        background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; color: #333;">Appointment Information</h2>

        <p>Dear Mr/Ms/Mrs <?= $name ?>,</p>

        <p>Your reservation is scheduled for:</p>

        <ul>
            <li><strong>Date:</strong> <?= $reserve_date ?></li>
            <li><strong>Time:</strong> <?= $reserve_time ?></li>
        </ul>

        <p>Your reference code for the reservation is: <strong><?= $reserve_code ?></strong></p>

        <p>Kind regards,<br>Logo here</p>
    </div>

</body>

</html>