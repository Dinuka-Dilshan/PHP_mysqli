<?php
    $connection = mysqli_connect('localhost','Dinuka','abcd1234','ShineWay');
    $users;
    $count = 1;
    if(!$connection){
        echo mysqli_connect_error();
    }else{
        //echo 'connected';

        //create sql query
        $query = 'SELECT * FROM users';

        //execute the query on the server and get back the results
        $result = mysqli_query($connection,$query);

        //convert result object to an associative array(so we can access with the field name)
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<div class="container-md pt-lg-5">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">NIC</th>
    </tr>
  </thead>
  <tbody>
       
   
      
    <?php foreach($users as $user):?>
        <tr>    
            <th scope="row"><?php echo $count?></th>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['username']?></td>
            <td><?php echo $user['email']?></td>
            <td><?php echo $user['Telephone']?></td>
            <td><?php echo $user['NIC']?></td>
        </tr>
    <?php $count++;?>
    <?php endforeach?>

   



  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>