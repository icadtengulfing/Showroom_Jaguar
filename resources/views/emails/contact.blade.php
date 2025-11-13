<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 30px -30px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 0.2em;
        }
        .info-section {
            margin-bottom: 25px;
        }
        .info-section h2 {
            color: #000000;
            border-bottom: 2px solid #000000;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 18px;
        }
        .info-row {
            margin-bottom: 12px;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 3px solid #000000;
        }
        .info-label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            min-width: 100px;
        }
        .info-value {
            color: #333;
        }
        .message-box {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 3px solid #000000;
            margin-top: 10px;
            white-space: pre-wrap;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>JAGUAR</h1>
            <p style="margin: 10px 0 0 0; font-size: 14px;">New Contact Form Submission</p>
        </div>

        <div class="info-section">
            <h2>Contact Information</h2>
            <div class="info-row">
                <span class="info-label">Full Name:</span>
                <span class="info-value">{{ $data['fullname'] }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Email:</span>
                <span class="info-value">{{ $data['email'] }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Phone:</span>
                <span class="info-value">{{ $data['phone'] }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Country:</span>
                <span class="info-value">{{ $data['country'] }}</span>
            </div>
            @if(isset($data['model']) && $data['model'])
            <div class="info-row">
                <span class="info-label">Model:</span>
                <span class="info-value">{{ $data['model'] }}</span>
            </div>
            @endif
        </div>

        <div class="info-section">
            <h2>Message</h2>
            <div class="message-box">{{ $data['message'] }}</div>
        </div>

        @if(isset($data['dealer']) && $data['dealer'])
        <div class="info-section">
            <h2>Dealer Information</h2>
            <div class="info-row">
                <span class="info-label">Dealer:</span>
                <span class="info-value">{{ $data['dealer']->name ?? 'N/A' }}</span>
            </div>
        </div>
        @endif

        <div class="footer">
            <p>This email was sent from the JAGUAR website contact form.</p>
            <p>Please respond to: {{ $data['email'] }}</p>
        </div>
    </div>
</body>
</html>
