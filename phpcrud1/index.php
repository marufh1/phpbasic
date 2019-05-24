<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome PHP Crud Operation</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Maruf Hossain Created date 24 05 2019 -->
    <?php require_once 'process.php'; ?>
    <div class="container">
      <div class="row justify-content-left">
          <!-- Insert Information into data base html code -->
          <div class="col-md-4">
          <form class="" action="process.php" method="post">
            <div class="form-group">
              <label >First Name</label>
              <input type="text" class="form-control" name="fname" value="">
              <label>Last Name</label>
              <input type="text" class="form-control" name="lname" value="">
              <label>School</label>
              <input type="text" class="form-control" name="schoolname" value="">
              <label>Passing Year</label>
              <input type="text" class="form-control" name="passingyear" value="">
            </div>
            <!-- Conditional Succesful or failed message  -->
            <?php if (isset($_SESSION['msg'])): ?>
              <div class="alert alert-<?php echo $_SESSION['msg-type']; ?>">
                <?php echo $_SESSION['msg']; ?>
                <?php unset($_SESSION['msg']); ?>
              </div>
            <?php endif; ?>
            <div class="form-group">
              <button type="submit" class="btn btn-info" name="save">SAVE</button>
            </div>
          </form>

        </div>
          <!-- Show All Information  -->
          <div class="col-md-8">
            <div class="form table">
              <?php require 'configdB.php'; ?>
              <?php $result = $mysqli->query("SELECT * FROM tb_information");
               $i = 1 ;
              ?>
              <!-- Table  -->
              <table>
                <thead>
                  <tr>
                  <th>SL NO</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>School</th>
                  <th>Passing Year</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php while ($row=$result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['scname']; ?></td>
                  <td><?php echo $row['passyear']; ?></td>
                  <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php } ?>
                </thead>
              </table>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>
