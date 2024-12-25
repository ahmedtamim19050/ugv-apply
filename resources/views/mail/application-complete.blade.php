{{-- @dd($data) --}}
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
        }

        .header {
            background-color: #1f396b;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            border-radius: 8px 8px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
            color: #333333;
        }

        .content h2 {
            font-size: 20px;
            color: #004080;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #004080;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }

        .button:hover {
            background-color: #002a59;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666666;
        }

        .footer a {
            color: #004080;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>University of Global Village</h1>
        </div>
        <div class="content">
            <h2>Application Completed!</h2>
            <p>Dear {{ $data['name'] }},</p>
            <p>Thank you for submitting your application to <strong>University of Global Village</strong>. We have
                successfully received your application and will begin processing it shortly.</p>
            <p style="text-align: center;">
                <a href="{{ route('apply.view', $data['uid']) }}" class="button">View Your Application</a>
            </p>
            <p>Best regards,</p>
            <p><strong>Admissions Team</strong></p>
        </div>
        <div class="footer">
            <p>&copy; 2024 University of Global Village. All rights reserved.</p>
            <p><a href="https://ugv.edu.bd/">Visit our website</a></p>
        </div>
    </div>
</body>

</html>
