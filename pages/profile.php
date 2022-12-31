<?php
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
} else {
  // Page
  require_once "./database.php";
  $playerID = $_GET['id'];
  $sql = "SELECT account.id, username, password, role, email, gender, dob, nationality, COUNT(*) AS play_attempt, AVG(score) AS avg_score, COUNT(DISTINCT quiz.id) AS quiz_created
          FROM account JOIN player ON account.id = player.id JOIN quiz ON quiz.creatorId = 1 JOIN play_attempt ON play_attempt.playerId = player.id AND play_attempt.quizId = quiz.id 
          WHERE account.id = \"$playerID\"";
  $em = $conn->query($sql)->fetch_all(MYSQLI_ASSOC)[0];
  $sql = "SELECT name, COUNT(*) AS play_attempt 
          FROM account JOIN quiz ON account.id = quiz.creatorId JOIN play_attempt ON play_attempt.quizId = quiz.id WHERE account.id = \"$playerID\"
          GROUP BY quiz.id ORDER BY play_attempt DESC LIMIT 1";
  $res = $conn->query($sql);
  $exist = 0;
  if(mysqli_num_rows($res)!=0){
    $exist = 1;
    $highestAttempt = $res->fetch_all(MYSQLI_ASSOC)[0];
  }
  require "../DB_Assignment/assets/components/head.php";
?>
  
  <div id="main-content">
    <div class="page-heading">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 style="display:inline" class="me-4">Personal Profile</h3>
          </div>
        </div>
      </div>

      <section class="section">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><?= $em['username']?></h4>
          </div>
          <div class="card-body">
            <form class="form form-horizontal">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Player ID</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['id'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-id-card"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Username</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['username'] ?>" readonly />
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
                      <input type="text" id="first-name-column" class="form-control" value="<?= $em['password'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-lock"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Role</label>
                    <div class="position-relative">
                      <?php if($em['role'] == 1) $role = "Admin"; else $role = "Player"?>
                      <input type="text" id="first-name-column" class="form-control" value="<?=$role?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-venus-mars"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12" <?= ($em['role']==1)? "hidden":""?>>
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Gender</label>
                    <div class="position-relative">
                      <?php if($em['gender'] == 1) $gender = "female"; else $gender = "male"?>
                      <input type="text" id="first-name-column" class="form-control" value="<?=$gender?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-venus-mars"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12" <?= ($em['role']==1)? "hidden":""?>>
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Date of birth</label>
                    <div class="position-relative">
                      <input type="text" id="first-name-column" class="form-control" value="<?= date_format(date_create($em['dob']), "d/m/Y") ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-cake-candles"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12" <?= ($em['role']==1)? "hidden":""?>>
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Email address</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['email'] ?>" readonly/>
                      <div class="form-control-icon">
                        <i class="fa-solid fa-location-dot"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12" <?= ($em['role']==1)? "hidden":""?>>
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Nationality</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['nationality'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Total number of attempts</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['play_attempt'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-dollar-sign"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Average score for all quizzes</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= ($em['play_attempt'])? $em['avg_score']:0 ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Number of quizzes created</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?= $em['quiz_created'] ?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="first-name-column">Most popular quiz</label>
                    <div class="position-relative">
                      <input type="text" id="last-name-column" class="form-control" value="<?=($exist)? $highestAttempt['name']." - ".$highestAttempt['play_attempt']." attempts":"No quiz created"?>" readonly />
                      <div class="form-control-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </form>

            <div style="text-align:right">
              <button data-bs-toggle="modal" data-bs-target="#updateEmployee" class="btn btn-primary" >
                Update
              </button>
            </div>

          </div>
          <div class="modal fade" id="updateEmployee" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Update profile</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./index.php?page=player-update-processing&id=<?= $em['id'] ?>" method="POST" class="form form-horizontal">
                  <div class="modal-body">
                    <div class="row">
                      
                      <div class="col-md-4">
                        <label>User name</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="text" name="username" class="form-control" value="<?= $em['username'] ?>" id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="bi bi-telephone"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <label>Password</label>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="text" name="password" class="form-control" value="<?= $em['password'] ?>" id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="bi bi-telephone"></i>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4" <?= ($em['role']==1)? "hidden":""?>>
                        <label>Email address</label>
                      </div>
                      <div class="col-md-8" <?= ($em['role']==1)? "hidden":""?>>
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="email" name="email" class="form-control" value="<?= $em['email'] ?>" id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="bi bi-telephone"></i>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4" <?= ($em['role']==1)? "hidden":""?>>
                        <label>Nationality</label>
                      </div>
                      <div class="col-md-8" <?= ($em['role']==1)? "hidden":""?>>
                        <div class="form-group has-icon-left">
                          <div class="position-relative">
                            <input type="text" name="nationality" class="form-control" value="<?= $em['nationality'] ?>" id="first-name-icon" required autocomplete="off" />
                            <div class="form-control-icon">
                              <i class="bi bi-telephone"></i>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4" <?= ($em['role']==1)? "hidden":""?>>
                        <label>Gender</label>
                      </div>
                      <div class="col-md-8" <?= ($em['role']==1)? "hidden":""?>>
                        <div class="form-group">
                          <select name="gender" value="<?= $em['gender'] ?>" style="width:100%;" id="first-name-icon">
                              <option value="1" <?= ($em['gender']== 1)? 'selected':''?> >Female</option>
                              <option value="0" <?= ($em['gender']== 0)? 'selected':''?> >Male</option>
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
  require "../DB_Assignment/assets/components/foot.php";
}
?>