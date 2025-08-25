<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
        $email = $_POST["email"];
            $password = $_POST["password"];
                $course = $_POST["courses"];
                    $tnc = isset($_POST["tnc"]) ? "Agreed" : "Not Agreed";

                        echo "<h1>Registration Successful!</h1>";
                            echo "<p><strong>Name:</strong> $name</p>";
                                echo "<p><strong>Email:</strong> $email</p>";
                                    echo "<p><strong>Password:</strong> $password</p>";
                                        echo "<p><strong>Selected Course:</strong> $course</p>";
                                            echo "<p><strong>Terms & Conditions:</strong> $tnc</p>";
                                            } else {
                                                echo "Form not submitted properly.";
                                                }
                                                ?>