<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
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

        <?php if ($view != "./MVC/views/products/v_listProducts.php"
                || $view != "./MVC/views/categories/v_listCategories.php"
                || $view != "./MVC/views/staffs/v_listStaffs.php"
        ) { ?>
            td.error {
            border: 0;
        }
        <?php } ?>
        
    </style>
</head>
<body>