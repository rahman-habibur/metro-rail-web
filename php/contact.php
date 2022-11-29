<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost', 'root', '');
        if(!$con){
            echo 'Not Connected';
        }
        if(!mysqli_select_db($con, 'railwayhtml')){
            echo 'Database Not Selected';
        }
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $phone = $_POST['phone'];
        $issueee = $_POST['issueee'];
        $subject = $_POST['subject'];

        $sql ="INSERT INTO contact (user_name, user_email, phone, issueee, subject) VALUES ('$name', '$email', '$phone', '$issueee', '$subject')";

        if(!mysqli_query($con, $sql)){
            echo '<script>alert("There is an error. Please try again later. Please and thank you.")</script>';
        }
        else{
            echo '<script>alert("Thenaks for your feedback. We will look into it. Please and thank you.")</script>';
            echo '<script>if(confirm("Go To Home Page.")) window.location = "../index.html"</script>';
        }
    ?>
</body>
</html>