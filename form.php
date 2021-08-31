<?php

// var_dump(isset($_POST['submit']));
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['email_error'] = "Invalid Email";
    }
    $message = $_POST['message'];
    $_SESSION['name'] = $name;
    if(empty($_SESSION['name'])){
        $_SESSION['name_error'] = "Please enter name";
    }
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message;
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        echo $_POST['name'] . '<br>0000' . $_POST['email'] . '<br>' . $_POST['message'];
        $_SESSION = array();
    } 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Form with PHP</h1>
                </div>
                <div class="col-md-12">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                                value="<?php if(!empty($_SESSION))  {echo $_SESSION['name']; } else {echo '';} ?>">
                            <strong class="text-danger">
                                <?php if(!empty($_SESSION))  {echo $_SESSION['name_error']; } else {echo '';} ?>
                            </strong>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                                value="<?php if(!empty($_SESSION))  {echo $_SESSION['email']; } else {echo '';} ?>">
                            <strong class="text-danger">
                                <?php if(!empty($_SESSION))  {echo $_SESSION['email_error']; } else {echo '';} ?>
                            </strong>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"
                                placeholder="Message"><?php if(!empty($_SESSION))  {echo $_SESSION['message']; } else {echo '';} ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>

</html>