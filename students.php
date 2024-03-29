<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"?v=<?php   time() ?> />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    <title>Students</title>
</head>
<body>

    <?php include_once "navbar.php"?>
    <div class="container-fluid">
        <div class="row">
            <?php include_once "sidebar.php"   ?>

            <div class="col-sm-10">
                 <!-- wrapper -->
                <div class="container mt-5" id="students">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Students Detail</h4>
                                </div>
                                <div class="card-body">
                                    <form action="lib/students.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="name" name="first_name" placeholder="Enter First Name" class="form-control form-control-sm" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="name" name="last_name" placeholder="Enter Last Name" class="form-control form-control-sm" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="fname">Fathers Name</label>
                                            <input type="name" name="fname" placeholder="Enter Father Name" class="form-control form-control-sm" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="class">Class</label>
                                            <input type="number" name="class" min="0" max="10" placeholder="Enter Your Class" class="form-control form-control-sm" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="section">Section</label>
                                            <input type="text" name="section" placeholder="Enter Your Section" class="form-control form-control-sm" autocomplete="off" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="roll">Roll No</label>
                                            <input type="number" name="roll" min="0" mix="500" placeholder="Enter Roll No" class="form-control form-control-sm" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Student Photo</label>
                                            <br>
                                            <input type="file" name="image" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="submit" value="STUDENTS" class="btn btn-primary btn-sm" required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Students table -->
                        <div class="col-sm-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Students</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">S#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Fathers Name</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">Roll No</th>
                                            <th scope="col">Action</th>

                                            </tr> 
                                        </thead>
                                        <!-- Include DB connection -->
                                        <?php include_once "lib/db.php" ?>
                                        <tbody>
                                            <?php  $sql = "SELECT * FROM students";
                                                $result = $con->query($sql);

                                                if($result->num_rows > 0){
                                                    // output data 
                                                    while($row = $result->fetch_assoc()){ ?>
                                                        <tr>
                                                            <td><?php echo $row["id"]?></td>
                                                            <td><?php echo $row["first_name"]?></td>
                                                            <td><?php echo $row["last_name"]?></td>
                                                            <td><?php echo $row["fname"]?></td>
                                                            <td><?php echo $row["class"]?></td>
                                                            <td><?php echo $row["section"]?></td>
                                                            <td><?php echo $row["roll"]?></td>
                                                            <td>
                                                                     <!-- botton -->
                                                                <button type="button" class="btn btn-success btn-xs"> 
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-xs"> 
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>


                                                         </tr>
                                                    <?php
                                                    }
                                                }
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>