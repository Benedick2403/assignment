
<?php
    include 'dbcon.php';

    // need to para mag retain yung user_id pag nag login siya later
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // eto yung sign up
    if(isset($_POST['user_email'], $_POST['user_password'], $_POST['confirm_password'])) {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $confirm_password = $_POST['confirm_password'];


        if ($user_password !== $confirm_password) {
            echo "<script>alert('Password and Confirm Password do not match.');</script>";

        } else {
            $check_email_sql = "SELECT * FROM user_info WHERE user_email = ?";
            $check_email_stmt = $con->prepare($check_email_sql);
            $check_email_stmt->bind_param("s", $user_email);
            $check_email_stmt->execute();

            $check_email_result = $check_email_stmt->get_result();

            if ($check_email_result->num_rows > 0) {
                echo "<script>alert('Email has already been used.');</script>";

                echo "<script>
                            setTimeout(function() {
                                window.location.href = 'signup.php';
                            }, 300);
                        </script>";

            } else {
                $insert_sql = "INSERT INTO user_info (user_email, user_password) VALUES (?, ?)";
                $insert_stmt = $con->prepare($insert_sql);

                if ($insert_stmt) {
                    $insert_stmt->bind_param("ss", $user_email, $user_password);
                    $insert_stmt->execute();

                    if ($insert_stmt->affected_rows > 0) {
                        echo "<script>alert('User registered successfully!');</script>";

                        echo "<script>
                            setTimeout(function() {
                                window.location.href = 'login.php';
                            }, 300);
                        </script>";
                    } else {
                        echo "<script>alert('Error: " . $insert_stmt->error . "');</script>";
                    }

                    $insert_stmt->close();
                } else {
                    echo "<script>alert('Error: " . $con->error . "');</script>";
                }
            }

            $check_email_stmt->close();
        }

        $con->close();
    }

    if(isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM user_info WHERE user_email = ? AND user_password = ?";
        $stmt = $con->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if ($result->num_rows == 1) {
    
                $row = $result->fetch_assoc();
                $user_id = $row['user_id'];
    
                $_SESSION['user_id'] = $user_id;
    
                // Check if the user has made an appointment
                $appointment_query = "SELECT * FROM appointment WHERE user_id = ?";
                $appointment_stmt = $con->prepare($appointment_query);
    
                if ($appointment_stmt) {
                    $appointment_stmt->bind_param("i", $user_id);
                    $appointment_stmt->execute();
    
                    $appointment_result = $appointment_stmt->get_result();
    
                    if ($appointment_result->num_rows > 0) {
                        // User has made an appointment, redirect to the appointment page
                        header("Location: appointment.php");
                        exit();
                    } else {
                        // User has not made an appointment, redirect to the appointment scheduling page
                        header("Location: reservation.php");
                        exit();
                    }
    
                    $appointment_stmt->close();
                } else {
                    echo "Error: " . $con->error;
                }
            } else {
                echo "Incorrect email or password. Please try again.";
            }
    
            $stmt->close();
        } else {
            echo "Error: " . $con->error;
        }
    }

    // magpapasok palang ng data sa database so eto yung tagahawak sa reservation.php
    if(isset($_POST['name'], $_POST['contact'],  $_POST['date'], $_POST['time'])){
        $name = $_POST['name']; 
        $contact = $_POST['contact'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    
        $user_id = $_SESSION['user_id'];
    
        $sched_insert = "INSERT INTO appointment (username, contact, appoint_date, appoint_time, user_id)
                         VALUES (?, ?, ?, ?, ?)";
        $sched_stmt = $con->prepare($sched_insert);
    
        if ($sched_stmt) {
            $sched_stmt->bind_param("sisss", $name, $contact, $date, $time, $user_id);
            $sched_stmt->execute();
            $sched_stmt->close();
            
            echo "<script>alert('Appointment made successfully!');</script>";

            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'appointdetail.php';
                    }, 300);
                  </script>";
        } else {
            echo "<script>alert('Error: " . $con->error . "');</script>";
        }
    }

    $con->close();
?>

<?php
    include 'dbcon.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // eto yung tagahawak dun sa nag login na user (id lang hawak niya unique yun eh)
    $user_id = $_SESSION['user_id'];

    // dito kukunin yung mga data sa database para i post sa table
    $reservation_query = "SELECT * FROM appointment WHERE user_id = ?";
    $reservation_stmt = $con->prepare($reservation_query);

    if ($reservation_stmt) {
        $reservation_stmt->bind_param("i", $user_id);
        $reservation_stmt->execute();

        $reservation_result = $reservation_stmt->get_result();

        while ($row = $reservation_result->fetch_assoc()) {
            echo '<tr>
                    <td class="text-center">' . $row['appoint_id'] . '</td>
                    <td class="text-center">' . $row['username'] . '</td>
                    <td class="text-center">' . $row['contact'] . '</td>
                    <td class="text-center">' . $row['appoint_date'] . '</td>
                    <td class="text-center">' . $row['appoint_time'] . '</td>
                  </tr>';
        }
        $reservation_stmt->close();
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
?>
