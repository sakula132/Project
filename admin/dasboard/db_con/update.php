<?php 

    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {

        $userid = $_GET['mem_id'];
        $mnumber = $_POST['mem_number'];
        $username = $_POST['username'];
        $mnme = $_POST['mem_name'];
        $lname = $_POST['mem_lname'];
        $age = $_POST['mem_age'];

        $sql = $updatedata->update($mnumber, $username, $mnme, $lname, $age, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Update Page</h1>
        <hr>
        <?php 

            $userid = $_GET['mem_id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
        ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="mem_number" class="form-label">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" name="mem_number" 
                    value="<?php echo $row['mem_number']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username"
                    value="<?php echo $row['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="mem_name">ชื่อ</label>
                <input type="text" class="form-control" name="mem_name" 
                    value="<?php echo $row['mem_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="mem_lname">นามสกุล</label>
                <input type="text" class="form-control" name="mem_lname"
                    value="<?php echo $row['mem_lname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="mem_age">อายุ</label>
                <input type="text" class="form-control" name="mem_age"
                    value="<?php echo $row['mem_age']; ?>" required>
            </div>
            
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    
</body>
</html>

