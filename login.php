<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("assets/view/nav.php");
    ?>
    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="shadow-sm w-50 p-5 ">
            <h3 class="text-center mb-2">Log In To See Post</h3>
            <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input user name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input password">
                </div>
                <div class="">
                    <button class="btn btn-success float-end">Login</button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>