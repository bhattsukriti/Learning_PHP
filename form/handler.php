<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["secondname"]);
    $pet = htmlspecialchars($_POST["pets"]);

    if (empty($firstname)) {
        exit();
    }

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Result</title>
        <style>
            body {
                background-color: black;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
            }
            .result {
                text-align: center;
                background-color: #222;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            }
        </style>
    </head>
    <body>
        <div class="result">
            <h2>These are the data that the user submitted:</h2>
            <p><strong>First Name:</strong> ' . $firstname . '</p>
            <p><strong>Second Name:</strong> ' . $lastname . '</p>
            <p><strong>Pet:</strong> ' . $pet . '</p>
        </div>
    </body>
    </html>
    ';
}
?>
