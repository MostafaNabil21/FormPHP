

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Cairo', sans-serif; 
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 50rem;">
        <div class="card-body">
        <h1 class="card-title">
            Welcome 
            <?php 
            echo $_POST["gender"] === 'male'
                ? 'Mr.'. ' ' . $_POST["first_name"] . ' ' . $_POST["last_name"]
                : 'Miss' . $_POST["first_name"] . ' ' . $_POST["last_name"];
            ?></h1>
            <h3 class="card-title mb-2 text-muted">Please Review Your Information</h3>
            <p class="card-text">
                <?php
                    echo '<strong>Name: </strong>' . $_POST["first_name"] . ' ' . $_POST["last_name"] . '<br />';
                ?>
            </p>
            <p class="card-text">
                <?php
                    echo '<strong>Address: </strong>' . $_POST["address"] . '<br />';
                ?>
            </p>
            <p class="card-text">
                <?php
                    echo '<strong>Country: </strong>' . $_POST["country"] . '<br />';
                ?>
            </p>
            <p class="card-text">
                <?php
                    echo "<strong>Skills: </strong><br />";
                    if(isset($_POST['skills'])){
                        if(!empty($_POST['skills'])){
                            foreach($_POST['skills'] as $selected){
                                echo $selected."<br>";
                            }
                        }
                    }
                ?>
            </p>
            <p class="card-text">
                <?php
                    echo '<strong>Department: </strong>' . $_POST["department"] . '<br />';
                ?>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
