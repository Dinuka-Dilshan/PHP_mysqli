<?php
    include('./sql.php');

    $result = executeQuery("SELECT * FROM users");
    if($result){
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
    }



    if(isset($_POST['add'])){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $sql = "INSERT INTO `users`(`Name`, `Email`, `Phone`) VALUES ('$firstName $lastName','$email','$phone')";

        $result = executeQuery($sql);
        header("location:index.php");
    }

    if(isset($_POST['delete']) && isset($_POST['id'])){
        $id = $_POST["id"];
        $sql = "DELETE FROM `users` WHERE `id`='$id'";
        $result = executeQuery($sql);
        header("location:index.php");
    }

    if(isset($_POST['update']) && isset($_POST['id'])){
        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $sql = "UPDATE `users` SET `Name`='$firstName $lastName',`Email`='$email',`Phone`='$phone' WHERE `ID`= '$id'";
        $result = executeQuery($sql);
        header("location:index.php");
    }

    

    
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>PHP CRUD</title>

    <style>

        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        .scroll{
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    


            


    <div class="container-md  ">

        <div class="row mt-5">

            <!--Form-->
            
            <div class="col-md-12 col-lg-6">

                    <form action="index.php" method="POST">
                        <div class="row">
                            <div class="col mx-3 mt-3">
                                <input id="firstName" required name="firstName" type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col mx-3 mt-3 ">
                                <input id="lastName" required name="lastName" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>

                        <div class="m-3">
                            <input id="email"required  name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
                        </div>
                        <div class="m-3">
                            <input  id="phone" required name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                        </div>
                            <input type="hidden" name="id" id="id" value="">
                        <div class="m-3">
                        <button type="submit" class="btn btn-primary px-4" name="add">ADD</button>
                        <button type="submit" class="btn btn-primary px-4" name="delete">DELETE</button>
                        <button type="submit" class="btn btn-primary px-4" name="update">UPDATE</button>
                        <button id="reset" type="button" class="btn btn-primary px-4" >RESET</button>
                        </div>
                    </form>    
            </div>
       
            <!--Table-->
            <div class="col-md-12 col-lg-6 ">
                

            <table class="table table-striped table-hover m-3" id="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $count = 1 ?>
                    <?php foreach($users as $user):?>
                    <tr id="<?php echo $count ?>">
                        <th scope="row"><?php echo $count?></th>
                        <td id="ID<?php echo $count ?>" ><?php echo $user['ID']?></td>
                        <td id="Name<?php echo $count ?>"><?php echo $user['Name']?></td>
                        <td id="Email<?php echo $count ?>"><?php echo $user['Email']?></td>
                        <td id="Phone<?php echo $count ?>"><?php echo $user['Phone']?></td>
                    </tr>
                    <?php $count++?>
                    <?php endforeach?>
                    <input id="count" type="hidden"  value="<?php echo $count?>">
                </tbody>

            </table>

            </div>
        </div>

    </div>

   
 <script src="./table.js"></script>
</body>
</html>