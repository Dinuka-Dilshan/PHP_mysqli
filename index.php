







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
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col mx-3 mt-3 ">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>

                        <div class="m-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
                        </div>
                        <div class="m-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                        </div>

                        <div class="m-3">
                        <button type="button" class="btn btn-primary px-4" name="add">ADD</button>
                        <button type="button" class="btn btn-primary px-4" name="delete">DELETE</button>
                        <button type="button" class="btn btn-primary px-4" name="update">UPDATE</button>
                        <button type="button" class="btn btn-primary px-4" >RESET</button>
                        </div>
                    </form>    
            </div>
       
            <!--Table-->
            <div class="col-md-12 col-lg-6 ">
                

            <table class="table table-striped table-hover m-3">

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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>

            </table>

            </div>
        </div>

    </div>

   

</body>
</html>