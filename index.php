<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .container-fluid {
        margin-top: 50px;
    }
    body {
        background-image: url('image.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        opacity: .60;
    }
    .reg {
        background-color: #cc00ff;
        margin-top: 10px;
        border-radius: 6px;
    }
    .sub {
        background-color: #cc00ff;
    }
    .sub:hover {
        background-color: #a300cc;
    }
    .mar {
        margin-bottom: 10px;
    }
    /*.col-md-4 {
        border: 1px solid red;
    }
    .btn {
        border: 1px solid yellow;
    } */
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 card">
            <div class="car-header text-center reg"><h3>Registration Form</h3></div>
                <form action="output.php" method="post">

                    <!-- This is the Name row -->
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control" name="mname" placeholder="Enter middle name">
                            </div>
                        </div>
                    </div>

                    <!-- This is the Address and Status row -->
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="House no., Brgy., City, Province">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Civil Status</label>
                                <input type="text" class="form-control" name="status" placeholder="Enter status">
                            </div>
                        </div>
                    </div>

                    <!-- This is DOB, POB, Gender row -->
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" name="dob">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pob">Place of Birth</label>
                                <input type="text" class="form-control" name="pob" placeholder="Enter place of birth">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div><label for="gender">Gender</label></div>
                            <div class="form-group">
                                <input  type="radio" name="gender" id="gridRadios1" value="Male" checked>
                                <label  for="gridRadios1">Male</label>
                                <input  type="radio" name="gender" id="gridRadios1" value="Female">
                                <label  for="gridRadios1">Female</label>
                            </div>
                        </div>
                    </div>

                    <!-- This is guardian and contact number row -->
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="guardian">Guardian</label>
                                <input type="text" class="form-control" name="guardian" placeholder="Enter a name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contactno">Contact Number</label>
                                <input type="text" class="form-control" name="contactno" placeholder="+63">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="email@example.com">
                            </div>
                        </div>
                    </div>

                    <!-- This is the Course, Year level, School Year row -->
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course">Course</label>
                                <select class="form-control" name="course">
                                    <option value=" ">Choose course</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Technology Communication Manangement">Technology Communication Manangement</option>
                                    <option value="Computer Engineering">Computer Engineering</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="yearlevel">Year Level</label>
                                <select class="form-control" name="yearlevel">
                                    <option value=" ">Choose year</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Forth Year">Forth Year</option>
                                    <option value="Fifth Year">Fifth Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sy">School Year</label>
                                <input type="text" class="form-control" name="sy" placeholder="Enter school year">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 mar">
                            <button type="submit" class="btn sub btn-lg btn-block">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>