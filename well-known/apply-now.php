<?php 
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("header.php");?>
        <section class="account-page-area section-gap-equal" style="background-color:#f7f7f7">
            <div class="container position-relative">
                <div class="row g-5 justify-content-center" >
                    <div class="col-lg-8">
                        <div class="login-form-box" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                           
                            <form method="post" action="">
                                <div class="row g-5" > 
                                <div class="form-group">
                                    <input type="text" name="name" id="current-log-email" placeholder="Full Name">
                                   
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="current-log-email" placeholder="Email Address">
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="current-log-email" placeholder="Contact No">
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" name="location" id="current-log-email" placeholder="City">
                                   
                                </div>
                                <div class="form-group">
                                   
                                    <center><input type="submit" class="edu-btn btn-medium" name="submit" value="submit" style="background-color:black;color:white;width:30%"></center>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php

          if (isset($_REQUEST['submit'])) {
    include("admin/modal.php");
    include("admin/config.php");

    $sql = "INSERT INTO contacts (name, phone, email, location) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $name);

    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $phone = mysqli_real_escape_string($conn, $phone);

    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $email);

    $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
    $location = mysqli_real_escape_string($conn, $location);

    $stmt->bind_param("ssss", $name, $phone, $email, $location);
    $stmt->execute();

    if ($stmt) {
        $last_id = $conn->insert_id;

        // Get the user's email from the form
        $userEmail = $_POST['email'];

        // Send a thank-you email to the user
        $subject = "Thank You for Submitting the Form";
        $message = "Dear " . $name . ",\n\nThank you for submitting the form. We appreciate your interest.\n\nSincerely,\nTeam Mentoria Overseas Education";
        $headers = "From: noreply@mentoriaoverseas.com"; // Change this to your email

        // Check if the email is sent successfully
        if (mail($userEmail, $subject, $message, $headers)) {
            echo '<script type="text/javascript">';
            echo 'swal({
                    title: "Wow!",
                    text: "Details have been submitted Successfully. Thank you!",
                    type: "success"
                })';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Something Went Wrong with sending the email")';
            echo '</script>';
        }

        // Redirect the user
        header("location: assestment-form?id=$last_id");
        exit;
    } else {
        echo '<script language="javascript">';
        echo 'alert("Something Went Wrong")';
        echo '</script>';
    }
}

ob_end_flush(); // Flush the output buffer
exit; // Terminate the script
?>
                </div>
                <ul class="shape-group">
                    <li class="shape-1 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="Shape"></li>
                    <li class="shape-2 scene"><img data-depth="-2" src="assets/images/about/shape-13.png" alt="Shape"></li>
                    <li class="shape-3 scene"><img data-depth="2" src="assets/images/counterup/shape-02.png" alt="Shape"></li>
                </ul>
            </div>
        </section>
       
        <?php include("footer.php"); ?>