<?php
    include_once ("validation.php");

/* This is the name row */
    $firstname = $_POST ['fname'];
    echo "First Name: ",$firstname,"<br>";
    $lastname = $_POST ['lname'];
    echo "Last Name: ",$lastname,"<br>";
    $middlename = $_POST ['mname'];
    echo "Middle Name: ",$middlename,"<br>";

/* This is the Address and Status row */
    $address = $_POST ['address'];
    echo "Address: ",$address,"<br>";
    $status = $_POST ['status'];
    echo "Civil Status: ",$status,"<br>";

/* This is DOB, POB, Gender row */
    $dob = $_POST ['dob'];
    echo "Date of Birth: ",date('m-d-Y',strtotime($dob)),"<br>";
    $pob = $_POST ['pob'];
    echo "Place of Birth: ",$pob,"<br>";
    $gender = $_POST ['gender'];
    echo "Gender: ",$gender,"<br>";

/* This is guardian and contact number row */
    $guardian = $_POST ['guardian'];
    echo "Guardian: ",$guardian,"<br>";
    $contactno = $_POST ['contactno'];
    echo "Contact Number: ",$contactno,"<br>";
    $email = $_POST ['email'];
    echo "Email: ",$email,"<br>";

/* This is the Course, Year level, School Year row */
    $course = $_POST ['course'];
    echo "Course: ",$course,"<br>";
    $yearlevel = $_POST ['yearlevel'];
    echo "Year Level: ",$yearlevel,"<br>";
    $sy = $_POST ['sy'];
    echo "School Year: ",$sy,"<br> <br>";

    echo "-----VALIDATION-----","<br> <br>";

/* 1 */
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($pob) && notEmp($guardian) && notEmp($status) && notEmp($sy) && notEmp($email)){
        echo "Filled up correctly", "<br>";
    }
    else{
        echo "Should fill this area", "<br>";
    }

/* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($pob) && shouldnotNum($guardian) && shouldnotNum($status) && shouldnotNum($email)){
        echo "Filled up correctly", "<br>";
    }
    else{
        echo "Should not contain numbers", "<br>";
    }
/* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($pob) && notSpecialChar($guardian) && notSpecialChar($status) && notSpecialChar($sy) && notSpecialChar($email)){
        echo "Filled up correctly", "<br>";
    }
    else{
        echo "Should not contain special characters", "<br>";
    }
/* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "Filled up correctly", "<br>";
    }
    else{
        echo "Should be more than 2 characters", "<br>";
    }
/* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($pob) && notags($guardian) && notags($status) && notags($sy) && notags($email)){
    echo "Filled up correctly", "<br>";
    }
    else{
        echo "Should not contain tags", "<br>"; 
    }
/* 6 */
    if (emailFormat($email)){
        echo "Filled up correctly", "<br>";
    }
    else{
        echo "Invalid email address", "<br>";
    }
/* 7 */
    if (philpreffix($contactno)){
        echo "Filled up correctly";
    }
    else{
        echo "Should start at +63 plus 10 digit numbers";
    }
?>