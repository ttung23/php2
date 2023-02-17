<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_SESSION['title'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        td, th {
            border: 1px solid #000;
            padding: 5px;
        }

        input, textarea, select {
            outline: none;
            width: 100%;
        }

        td.error {
            border: 0;
        }

        .alert {
            box-shadow: 0 0 5px #000;
        }
        
    </style>
</head>
<body>