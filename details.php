<?php 
$conn = mysqli_connect('localhost', 'root', '', 'i-Search');


$message = '';

if (isset ($_POST['submit'])) {
    $fname = $_POST['fname'];
    $fname = mysqli_real_escape_string($conn, $fname);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO capture (name, email) 
    
    VALUES ('$name','$email')";
    $result = mysqli_query($conn,$query);
    if ($result) {
        echo "<script>
        alert('Successfully Subscribed');
        </script>";
    }else {
        echo "<script>
        alert('Unsuccessful')
        </script>";
    }
}
