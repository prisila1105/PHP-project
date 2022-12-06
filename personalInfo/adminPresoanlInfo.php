<?php include('../model/constants.php'); ?>
<?php 

    $name = mysqli_fetch_assoc($res);

    $_SESSION['id'] = $name['id'];

    $_SESSION['name'] = $name['name'];

    $profilePicture = mysqli_fetch_assoc($res);

    $_SESSION['profilePicture'] = $name['profilePicture'];

    $type = mysqli_fetch_assoc($res);

    $_SESSION['type'] = $name['type'];

    $gender = mysqli_fetch_assoc($res);

    $_SESSION['gender'] = $name['gender'];

    $email = mysqli_fetch_assoc($res);

    $_SESSION['email'] = $name['email'];

    $phone = mysqli_fetch_assoc($res);

    $_SESSION['phone'] = $name['phone'];

    $address = mysqli_fetch_assoc($res);

    $_SESSION['address'] = $name['address'];

    $dob = mysqli_fetch_assoc($res);

    $_SESSION['dob'] = $name['dob'];
    

    

?>