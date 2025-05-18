<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Leads Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #333;
        }
        .header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .panel {
            padding: 12px;
            background-color: #f6f6f6;
            border-left: 4px solid #4CAF50;
            margin-bottom: 16px;
        }
        .footer {
            margin-top: 24px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="header">📥 New Leads Received</div>

    <p>You have received new leads in the last 30 minutes.</p>

    <div class="panel">
        <strong>Total Leads Captured:</strong> {{ $leadCount }}
    </div>

    <p>The CSV file containing lead details is attached with this email.</p>

    <div class="footer">
        Thanks,<br>
        <strong>TaxBizLegal Team</strong>
    </div>

</body>
</html>
