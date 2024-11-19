<?php
// Display the main page with a hint on how to find the secret flag
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Insecure .env File Exposure - CTF</title>
    <!-- Bootstrap 5 CDN -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fa;
            margin-top: 30px;
        }
        .container {
            max-width: 900px;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card {
            background-color: #fafafa;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }
        .hint {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f8f9fa;
            display: none;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.8rem;
            color: #6c757d;
        }
        .card-body {
            position: relative;
        }
        .hint-button {
            font-size: 0.85rem;
            text-decoration: underline;
            color: #007bff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1 class='display-4 text-center text-primary'>Insecure .env File Exposure</h1>
        <div class='card mt-4'>
            <div class='card-body'>
                <p class='lead text-center'>Welcome to this Capture The Flag challenge! Your task is to discover a vulnerability in this web application that exposes sensitive data.</p>
                <p class='text-center'>Can you find the hidden flag?</p>
                <p class='text-center'>A hint might be hidden somewhere in the application. Have you explored all possible paths?</p>
                
                <!-- Hint Toggle Button -->
                <p class='text-center'>
                    <span class='hint-button' onclick='document.querySelector(\".hint\").style.display = \"block\";'>Need a hint?</span>
                </p>

                <!-- Hint Section -->
                <div class='hint'>
                    <strong>Hint:</strong> Sometimes, sensitive files are not directly visible in the app but can be accessed via direct URLs. Try to find a file that may contain sensitive configuration information.
                </div>
            </div>
        </div>

        <div class='footer'>
            <p>CTF Challenge by Securinets ISET Zaghwen</p>
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js'></script>
</body>
</html>
";
?>

