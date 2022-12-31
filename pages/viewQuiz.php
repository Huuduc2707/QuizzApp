<?php
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
} else {
  // Page
  require_once "./database.php";
  require "./components/head.php";
  $deid = $_SESSION['departID'];
  $sql = "SELECT * FROM supermarket";
  $supermarketArray = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
?>

  <div id="main-content">
    <div class="page-heading">
      <div class="page-title mb-2">
        <h1 style="display:inline" class="me-4">Employee</h1>
        <div class="mb-4" <?php if ($_SESSION['role'] == 1) echo "style='display:inline'" ?>>
          <button style="display:inline" data-bs-toggle="modal" data-bs-target="#insertEmployee" class="btn btn-primary rounded-pill mb-4" <?php if ($_SESSION['lv'] != 100) echo 'hidden' ?>>
            Add employee
          </button>
        </div>
      </div>
      <section class="section">
        <?php
        foreach ($supermarketArray as $supermarket) {
          // if ($supermarket['departID'] == 'DE0001' || $supermarket['departID'] == 'DE0002')
          //   continue;
          $deid = $supermarket['SCode'];
          if ($_SESSION['lv'] != 100 && $_SESSION['departID'] != $deid)
            continue;
          $sql = "SELECT * FROM employee WHERE employee.Supermarket_Scode='$deid'";
          $emArray = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        ?>
          <div class="card h-100 mb-4">
            <div class="card-header">
              <h3 class="card-title">
                <!-- <img class="me-3" src="<?=$department['departAva']?>" style="width:30px;">-->Department: <?= $supermarket['Name'] ?> 
              </h3>
            </div>
            <div class="card-body" style="width:100%">
              <table class="table table-hover datatable">
                <thead>
                  <tr>
                    <th>Employee ID</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($emArray as $em) {
                  ?>
                    <tr>
                      <td><?= $em['ID'] ?></td>
                      <td><?= $em['Role'] ?></td>
                      <td>
                        <!-- <div class="avatar me-3">
                          <img src="<?= $em['avatar'] ?>" style="object-fit: cover;" alt="" srcset="" />
                        </div>--><?= $em['Last_name']." ".$em['First_name'] ?> 
                      </td>
                      <td><?= number_format($em['Salary']) ?></td>
                      <td><?= $em['Phone_number'] ?></td>
                      <td>
                        <a href="./index.php?page=profile&employeeID=<?= $em['ID'] ?>" class="btn btn-sm rounded-pill btn-outline-success">
                          View
                        </a>
                        <a href="index.php?page=employee-sethead-processing&username=<?= $em['First_name'] ?>&depart=<?= $em['Supermarket_Scode'] ?>" class="btn btn-sm rounded-pill btn-outline-primary" <?php if ($_SESSION['lv'] != 100 || $em['Role'] == 'Manager') echo "hidden" ?>>
                          Set head
                        </a>
                        <a href="./index.php?page=employee-delete-processing&username=<?= $em['First_name'] ?>" class="btn btn-sm rounded-pill btn-outline-danger" <?php if ($em['Role'] == 'Manager') echo "hidden" ?>>
                          Delete
                        </a>
                      </td>
                    </tr>
                    
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        <?php } ?>
      </section>
    </div>

    <!-- <footer>
      <div class="footer clearfix mb-0 text-muted">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertEmployee" <?php if ($_SESSION['role'] != 'admin') echo "hidden" ?>>
          Add employee
        </button>
      </div>
    </footer> -->
  </div>

  <div class="modal fade" id="insertEmployee" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Add new employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./index.php?page=employee-insert-processing" method="POST" class="form form-horizontal">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <label>First name</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="firstName" class="form-control" placeholder="First name..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Last name</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="lastName" class="form-control" placeholder="Last name..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Username</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="username" class="form-control" placeholder="Username..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-person-vcard"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Password</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="password" class="form-control" placeholder="Password..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-shield-lock"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Date of birth</label>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="date" name="dob" class="form-control" placeholder="Date of birth..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-calendar"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Address</label>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="address" class="form-control" placeholder="Address..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-house"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Phone number</label>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="phone" class="form-control" placeholder="Phone..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-telephone"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Salary</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="number" name="salary" class="form-control" placeholder="Salary..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                  </div>
                </div>
              </div>
              <style>
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                  appearance: none;
                  margin: 0;
                }
              </style>

              <div class="col-md-4">
                <label>Role</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <select name="role" id="role" required style="width:100%">
                      <option selected hidden>Please choose a role...</option>
                      <option value="Manager">Manager</option>
                      <option value="Cashier">Cashier</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Supermarket</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <select name="departID" id="departID" required style="width:100%">
                      <option selected hidden>Please choose a department...</option>
                      <?php
                      foreach ($supermarketArray as $supermarket) {
                        // if ($depart['departID'] == 'DE0001' || $depart['departID'] == 'DE0002')
                        //   continue;
                      ?>
                        <option value="<?= $supermarket['SCode'] ?>"><?= $supermarket['Name'] ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Gender</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <select name="gender" id="gender" required style="width:100%">
                      <option selected hidden>Please choose employee's gender...</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Insert</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php
  require "./components/foot.php";
}
?>