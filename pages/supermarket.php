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
        <h1 style="display:inline" class="me-4">Supermarket</h1>
        <div class="mb-4" <?php if ($_SESSION['lv'] == 100) echo "style='display:inline'" ?>>
          <button style="display:inline" data-bs-toggle="modal" data-bs-target="#insertSupermarket" class="btn btn-primary rounded-pill mb-4" <?php if ($_SESSION['lv'] != 100) echo 'hidden' ?>>
            Add Supermarket
          </button>
        </div>
      </div>
      <section class="section">
          <div class="card h-100 mb-4">
            <div class="card-header">
              <!-- <h3 class="card-title">
                <-- <img class="me-3" src="<?=$department['departAva']?>" style="width:30px;">Department: <?= $supermarket['Name'] ?> 
              </h3> -->
            </div>
            <div class="card-body" style="width:100%">
              <table class="table table-hover datatable">
                <thead>
                  <tr>
                    <th>Supermarket ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Number of Employee</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($supermarketArray as $em) {
                  ?>
                    <tr>
                      <td><?= $em['SCode'] ?></td>
                      <td><?= $em['Name'] ?></td>
                      <td>
                        <!-- <div class="avatar me-3">
                          <img src="<?= $em['avatar'] ?>" style="object-fit: cover;" alt="" srcset="" />
                        </div>--><?= $em['Location']?> 
                      </td>
                      <td><?= $em['Number_of_employees'] ?></td>
                      <td>
                        <!-- <button data-bs-toggle="modal" data-bs-target="#viewSupermarket<?= $em['SCode'] ?>" class="btn btn-sm rounded-pill btn-outline-primary" <?php if ($_SESSION['lv'] != 100) echo "hidden" ?>>
                          View
                        </button> -->
                        <button data-bs-toggle="modal" data-bs-target="#updateSupermarket<?= $em['SCode'] ?>" class="btn btn-sm rounded-pill btn-outline-primary" <?php if ($_SESSION['lv'] != 100) echo "hidden" ?>>
                          Update
                        </button>
                        <a href="./index.php?page=supermarket-delete-processing&id=<?= $em['SCode'] ?>" class="btn btn-sm rounded-pill btn-outline-danger" <?php if ($_SESSION['lv'] != 100) echo "hidden" ?>>
                          Delete
                        </a>
                      </td>
                    </tr>
                      <div class="modal fade" id="updateSupermarket<?= $em['SCode'] ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Update Supermarket</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="index.php?page=supermarket-update-processing&id=<?= $em['SCode'] ?>" method="POST" class="form form-horizontal">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Name</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="text" name="name" value="<?= $em['Name']?> "class="form-control"  placeholder="Name..." id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="bi bi-shop"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label>Location</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="text" name="location" value="<?= $em['Location']?>" class="form-control"  placeholder="Location..." id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="bi bi-geo-alt-fill"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label>Number of employees</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="text" name="number_of_employees" value="<?= $em['Number_of_employees']?>" class="form-control"  placeholder="Number of employees..." id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="fa-regular fa-hashtag"></i>
                            </div>
                          </div>
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
                    <!-- <div class="modal fade" id="viewEmployee<?= $em['employeeID'] ?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5">Employee information</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <dl class="row mt-2">
                              <dt class="col-sm-4">Employee ID</dt>
                              <dd class="col-sm-8"><?= $em['employeeID'] ?></dd>

                              <dt class="col-sm-4">Name</dt>
                              <dd class="col-sm-8"><?= $em['name'] ?></dd>

                              <dt class="col-sm-4">username</dt>
                              <dd class="col-sm-8"><?= $em['username'] ?></dd>

                              <dt class="col-sm-4">Gender</dt>
                              <dd class="col-sm-8"><?= $em['gender'] ?></dd>

                              <dt class="col-sm-4">Date of Birth</dt>
                              <dd class="col-sm-8"><?= $em['dob'] ?></dd>

                              <dt class="col-sm-4">Nationality</dt>
                              <dd class="col-sm-8"><?= $em['nationality'] ?></dd>

                              <dt class="col-sm-4">Address</dt>
                              <dd class="col-sm-8"><?= $em['address'] ?></dd>

                              <dt class="col-sm-4">Phone</dt>
                              <dd class="col-sm-8"><?= $em['phone'] ?></dd>

                              <dt class="col-sm-4">Salary</dt>
                              <dd class="col-sm-8"><?= $em['salary'] ?></dd>

                              <dt class="col-sm-4">Start Date</dt>
                              <dd class="col-sm-8"><?= $em['startDate'] ?></dd>

                              <dt class="col-sm-4">Department</dt>
                              <dd class="col-sm-8"><?= $em['departID'] ?></dd>
                            </dl>
                          </div>
                          <div class="modal-footer" <?php if ($em['role'] == 'head') echo "hidden" ?>>
                            <a href="index.php?page=employee-sethead-processing&username=<?= $em['username'] ?>&depart=<?= $em['departID'] ?>" class="btn btn-primary">
                              Set head
                            </a>
                          </div>
                        </div>
                      </div>
                    </div> -->
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

  <div class="modal fade" id="insertSupermarket" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Add new supermarket</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./index.php?page=supermarket-insert-processing" method="POST" class="form form-horizontal">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <label>Name</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="name" class="form-control" placeholder="Name..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-shop"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>Location</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="location" class="form-control" placeholder="Location..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="bi bi-geo-alt-fill"></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <label>No.employees</label><span class="text-danger">*</span>
              </div>
              <div class="col-md-8">
                <div class="form-group has-icon-left">
                  <div class="position-relative">
                    <input type="text" name="number_of_employees" class="form-control" placeholder="Number of employees..." id="first-name-icon" required autocomplete="off" />
                    <div class="form-control-icon">
                      <i class="fa-regular fa-hashtag"></i>
                    </div>
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
?>