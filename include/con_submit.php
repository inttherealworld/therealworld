<?php
    require("./config.php");


    if(isset($_POST['save_submit'])){

        $frist_name = $_POST['frist_name'];
        $last_name = $_POST['last_name'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $houses = $_POST['houses'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $card_number = $_POST['card_number'];
        $expdate = $_POST['expdate'];
        $cvc = $_POST['cvc'];
        $biling_add = $_POST['biling_add'];
        $card_name = $_POST['card_name'];



      if($password === $cpassword){
        $sql = "INSERT INTO general_pyper (frist_name, last_name, day, month, year, phone, address, houses, city, state, zip, country, email, username, password, cpassword , card_number, expdate, cvc, biling_add, card_name)values( '$frist_name', '$last_name', '$day', '$month', '$year', '$phone', '$address', '$houses', '$city', '$state', '$zip', '$country','$email', '$username','$password','$cpassword', '$card_number', '$expdate', '$cvc', '$biling_add', '$card_name' )";

         $query = mysqli_query($conn,$sql) or die("cannot create".mysqli_error($conn));

           if($conn->query($sql) === TRUE){
                    // echo "<script>window.alert('sign up successfully')</script>";
                    echo "<script>window.open('checkmark.php','_self')</script>";
           }
           else{
             echo "<script>window.alert('Invalid error')</script>";
             echo "<script>window.open('index.php','_self')</script>"; 
           }

           //.$conn->error($conn);

      }
      else{
        echo "<script>window.alert('Password Does Not Match')</script>";
        echo "<script>window.open('resgisation.php','_self')</script>";   
      }
        
}
?>





