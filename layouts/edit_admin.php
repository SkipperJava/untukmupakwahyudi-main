<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
    body{
        margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            min-height: 2000vh;
            flex-direction: column;
            overflow-y: auto;
    }
</style>
<body>
    <?php
        include '../components/header.php';
    ?>
    
    <div class="m-5">
        <?php
            include '../components/form_edit_admin.php';
        ?>
    </div>
    <?php
        include '../components/footer.php';
    ?>
</body>
</html>