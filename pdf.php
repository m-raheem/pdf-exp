<!DOCTYPE html>
<html>
<head>
    <title>Read /etc/passwd</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #555;
        }
        pre {
            background-color: #eaeaea;
            padding: 15px;
            border-radius: 5px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Contents of /etc/passwd</h1>
        <?php
        // Path to the file
        $file = '/etc/passwd';

        // Check if the file exists
        if (file_exists($file)) {
            // Read and display the file contents
            echo '<pre>' . htmlspecialchars(file_get_contents($file)) . '</pre>';
        } else {
            echo '<p>File does not exist.</p>';
        }
        ?>
    </div>
</body>
</html>
