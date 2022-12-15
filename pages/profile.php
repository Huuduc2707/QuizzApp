<?php
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
} else {
  // Page
  require_once "./database.php";
  $employeeID = $_GET['employeeID'];
  $sql = "SELECT * FROM (employee LEFT JOIN login_info ON employee.First_name = login_info.username) WHERE employee.ID='$employeeID'";
  $em = $conn->query($sql)->fetch_all(MYSQLI_ASSOC)[0];
  $sql = "SELECT * FROM supermarket";
  $supermarketArray = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
  require "./components/head.php";
?>
  <!-- ///////////////////////////////////////////////////////// -->
  <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
  <a href="./processing/download-processing.php?file=../uploads/task assignment.png">click to download</a> -->
  <!-- ///////////////////////////////////////////////////////// -->
  <div id="main-content">
    <div class="page-heading">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 style="display:inline" class="me-4">Personal Profile</h3>
            <!-- <p class="text-subtitle text-muted">
              Navbar will appear on the top of the page.
            </p> -->
          </div>
          <!-- <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Layout Vertical Navbar
                </li>
              </ol>
            </nav>
          </div> -->
        </div>

      </div>
      <section class="section">

        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><?= $em['Last_name']." ".$em['First_name'] ?></h4>
          </div>
          <div class="card-body">
            <!-- <div class="avatar me-3">
              <img src="<?= $em['avatar'] ?>" style="object-fit: cover; height:130px; width:130px" alt="" srcset="" />
            </div> -->
            <form class="form form-horizontal">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Employee ID</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['ID'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-id-card"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Name</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['Last_name']." ".$em['First_name'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-person"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Username</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['First_name'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-user"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Password</label>
                    <div class="position-relative">
                      <?php $pass = $_SESSION['lv'] == 100 ? 'text' : 'password'; ?>
                      <input type="<?= $pass ?>" id="first-name-column" class="form-control" value="<?= $em['password'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-lock"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Gender</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['Gender'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-venus-mars"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Date of birth</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= date_format(date_create($em['Date_of_birth']), "d/m/Y") ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-cake-candles"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Address</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['Address'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-location-dot"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Phone number</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['Phone_number'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Salary</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['Salary'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-dollar-sign"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Start date</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= date_format(date_create($em['Start_date']), "d/m/Y") ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Supermarket</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['Supermarket_Scode'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-building"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div style="text-align:right">
              <button data-bs-toggle="modal" data-bs-target="#updateEmployee" class="btn btn-primary" <?php if ($_SESSION['lv'] != 100) echo "hidden" ?>>
                Update
              </button>
            </div>
          </div>
          <div class="modal fade" id="updateEmployee" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Update employee</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./index.php?page=employee-update-processing&emid=<?= $em['ID'] ?>" method="POST" class="form form-horizontal">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Address</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <textarea placeholder="Address..." name="address" class="form-control" id="first-name-icon" autocomplete="off" style="resize:none;" rows="5" cols="30"><?= $em['Address'] ?></textarea>
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
                            <input type="text" name="phone" class="form-control" value="<?= $em['Phone_number'] ?>" placeholder="Phone..." id="first-name-icon" required autocomplete="off" />
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
                            <input type="number" value="<?= $em['Salary'] ?>" name="salary" class="form-control" placeholder="Salary..." id="first-name-icon" required autocomplete="off" />
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

                      <div class="col-md-4" <?php if ($em['Role'] == "Manager") echo "hidden" ?>>
                        <label>Supermarket</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <select name="departID" value="<?= $em['Supermarket_Scode'] ?>" <?php if ($em['Role'] == "Manager") echo "hidden" ?> style="width:100%;" id="first-name-icon">
                            <?php
                            foreach ($supermarketArray as $supermarket) {
                              // if ($depart['name'] == 'Admin' || $depart['departID'] == 'DE0001')
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
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <footer>
    <div class="footer clearfix mb-0 text-muted">


    </div>
  </footer>
  </div>

<?php
  require "./components/foot.php";
}
?>