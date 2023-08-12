<!--Database Connection Start-->
<?php
// Declare Variables
$server = "localhost";
$userName = "root";
$password = "";
$dbName = "expensemanager";

// starting Connection with Database

$con = mysqli_connect($server, $userName, $password, $dbName);
?>
<!--Database Connection end-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link href="index.css" rel="stylesheet" />
  <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3c5ab4b467.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <script src="../assets/js/color-modes.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    body::-webkit-scrollbar {
      display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    body {
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .aprovedHedding {
      color: #141817;

    }

    .pendingHedding {
      color: black;
    }

    .ProposalCard:hover {
      transform: scale(1.05);
    }

    .tableLink.a {
      text-decoration: none;
    }

    .tableBody {
      background-color: rgb(207, 199, 199);
    }

    .hedderBody {
      background-image: url(https://i0.wp.com/juntrax.com/blog/wp-content/uploads/2021/07/What-is-Expense-Management.jpg);
    }

    .greet {
      color: white;
    }
  </style>
</head>

<body>


  <!--off canva start-->
  <!--Aproved Proposals canva body start-->
  <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdropAP" aria-labelledby="staticBackdropAPLabel" style="width: 100%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel">Approved Proposals</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        <div class="col tableBody">
          <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
            Aproved Proposals
          </h3>
          <table class="table tableBody">
            <thead>
              <tr>
                <th scope="col">Proposal ID</th>
                <th scope="col">Prposal Subject</th>
                <th scope="col">Submitte by</th>
                <th scope="col">Amount</th>
                <th scope="col">Aproved by</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <?php
              $queryap = "SELECT * from proposal WHERE Status =" . "'Approved';";
              $resultap = mysqli_query($con, $queryap);
              while ($row = mysqli_fetch_assoc($resultap)) {
              ?>
                <div>
                  <td>
                    <?php
                    $provar = $row['ProID'];
                    echo '<div><a href="proposal.php?proposal=' . $provar . '" style="text-decoration: none; color: black;">' . $row['ProID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Subject'] ?></td>
                  <td>
                    <?php
                    $empvar = $row['EmpID'];
                    echo '<div><a href="Profile.php?profile=' . $empvar . '" style="text-decoration: none; color: black;">' . $row['EmpID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Amount'] ?></td>
                  <td> <?php
                        $fivar = $row['FID'];
                        echo '<div><a href="Profile.php?profile=' . $fivar . '" style="text-decoration: none; color: black;">' . $row['FID'] . '</a></div>';

                        ?></td>

                  </tr>
                <?php
              }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Approved proposal canva body End-->
  <!--Rejected Proposals canva body Start-->
  <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdropRP" aria-labelledby="staticBackdropRPLabel" style="width: 100%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel">Rejected Proposals</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        <div class="col tableBody">
          <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
            Rejected Proposals Proposals
          </h3>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Prposal Subject</th>
                <th scope="col">Submitte by</th>
                <th scope="col">Amount</th>
                <th scope="col">Rejected by</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <?php
                $queryrp = "SELECT * from proposal WHERE Status =" . "'Rejected';";
                $resultrp = mysqli_query($con, $queryrp);
                while ($row = mysqli_fetch_assoc($resultrp)) {
                ?>
                  <div>
                    <td>
                      <?php
                      $provar = $row['ProID'];
                      echo '<div><a href="proposal.php?proposal=' . $provar . '" style="text-decoration: none; color: black;">' . $row['ProID'] . '</a></div>';

                      ?></td>
                    <td><?php echo $row['Subject'] ?></td>
                    <td>
                      <?php
                      $empvar = $row['EmpID'];
                      echo '<div><a href="Profile.php?profile=' . $empvar . '" style="text-decoration: none; color: black;">' . $row['EmpID'] . '</a></div>';

                      ?></td>
                    <td><?php echo $row['Amount'] ?></td>
                    <td> <?php
                          $fivar = $row['FID'];
                          echo '<div><a href="Profile.php?profile=' . $fivar . '" style="text-decoration: none; color: black;">' . $row['FID'] . '</a></div>';

                          ?></td>

              </tr>
            <?php
                }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Rejected Proposals canva body End-->
  <!--Pending Proposals canva body Start-->
  <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdropPP" aria-labelledby="staticBackdropPPLabel" style="width: 100%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel">Pending Proposals</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        <div class="container text-center mt-5">
          <div class="row">
            <div class="col tableBody">
              <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
                Pending Proposals
              </h3>
              <table class="table tableBody">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Prposal Subject</th>
                    <th scope="col">Submitte by</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Inspected by</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <?php
                    $querypp = "SELECT * from proposal WHERE Status =" . "'Pending';";
                    $resultpp = mysqli_query($con, $querypp);
                    while ($row = mysqli_fetch_assoc($resultpp)) {
                    ?>
                      <div>
                        <td>
                          <?php
                          $provar = $row['ProID'];
                          echo '<div><a href="proposal.php?proposal=' . $provar . '" style="text-decoration: none; color: black;">' . $row['ProID'] . '</a></div>';

                          ?></td>
                        <td><?php echo $row['Subject'] ?></td>
                        <td>
                          <?php
                          $empvar = $row['EmpID'];
                          echo '<div><a href="Profile.php?profile=' . $empvar . '" style="text-decoration: none; color: black;">' . $row['EmpID'] . '</a></div>';

                          ?></td>
                        <td><?php echo $row['Amount'] ?></td>
                        <td> <?php
                              $fivar = $row['FID'];
                              echo '<div><a href="Profile.php?profile=' . $fivar . '" style="text-decoration: none; color: black;">' . $row['FID'] . '</a></div>';

                              ?></td>
                        <td><a href="<?php echo 'proposal.php?proposal=' . $provar ?>" class="btn btn-primary">Review</a></td>

                  </tr>
                <?php
                    }
                ?>

                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Pending Proposals canva body End-->

  <!--off canva end-->

  <!--Add Proposal Button Start-->
  <div class="container text-center mt-5">
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width:80%; height: 50px;">
      <div class="row"><i class="fa-thin fa-plus fa-lg" style="color: #3aa0df;"> Add Proposal</i></div>
    </button>
  </div>
  <!--Add Proposal Form Pop up Start-->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content w-150">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Proposals</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="was-validated">
            <div class="row">
              <form>
                <label for="basic-url" class="form-label">Select Expense Category</label>
                <select class="form-select  mb-3" required aria-label="select example">

                  <option value="1">Small Expenses</option>
                  <option value="2">Large Scale Expenses</option>
                  <option value="3">Running Expenses</option>
                </select>
            </div>
            <div class="row">
              <div class="mb-3">
                <label for="basic-url" class="form-label">Subject</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon3">Subject Title</span>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
                <div class="form-text" id="basic-addon4">Give a Title about expence in Short.</div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" aria-label="Amount (to the nearest Rupees)">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
              <div class="col-6">
                <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
              </div>
            </div>
            <div class="row">
              <div class="mb-3">
                <label for="validationTextarea" class="form-label">Description</label>
                <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                  Plese Describe About your Expense.
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
          <button type="button" class="btn btn-primary">Add Proposal</button>
        </div>
      </div>
    </div>
  </div>
  <!--Add Proposal Form Pop up End-->
  <!--Add proposal Button End-->


  <!--Aproved,Rejected,Pending proposals Start-->
  <div class="container text-center mt-5">
    <div class="row">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ProposalCard" style="
              background-image: url('https://www.solidbackgrounds.com/images/1920x1080/1920x1080-light-green-solid-color-background.jpg');
              background-position: center;
              object-fit: fill;
            ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
              Aproved Proposals
            </h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <span class="mt-3"><img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" alt="Aproved Proposals" width="60" height="60" class="rounded-circle border border-white mt-3" />
                  <p class="h6 mt-3">
                    <?php
                    $queryApCard = "SELECT * FROM proposal WHERE Status =" . "'Approved';";
                    $queryApCardrun = mysqli_query($con, $queryApCard);
                    $TotalAp = mysqli_num_rows($queryApCardrun);
                    echo $TotalAp;
                    ?>
                  </p>
                  <!-- <small class="mt-8">Count</small> -->
                </span>
              </li>

              <li class="d-flex align-items-center mt-3">
                <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdropAP" aria-controls="staticBackdropAP">
                  Approved Proposal
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ProposalCard" style="
              background-image: url('https://cdn.wallpapersafari.com/43/47/4KupwZ.jpg');
            ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold">
              Rejected Proposals
            </h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <span>
                  <img src="https://w7.pngwing.com/pngs/68/344/png-transparent-rejected-stamp-denied-reject-rejection-decline-refuse-deny-thumbnail.png" alt="Bootstrap" width="60" height="60" class="rounded-circle border border-white" />
                  <p class="h6 mt-3">
                    <?php
                    $queryRpCard = "SELECT * FROM proposal WHERE Status =" . "'Rejected';";
                    $queryRpCardrun = mysqli_query($con, $queryRpCard);
                    $TotalRp = mysqli_num_rows($queryRpCardrun);
                    echo $TotalRp;
                    ?>
                  </p>
                </span>
              </li>

              <li class="d-flex align-items-center">
                <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdropRP" aria-controls="staticBackdropRP">
                  Rejected Proposal
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ProposalCard" style="
              background-image: url('https://plainbackground.com/plain1024/fef65b.png');
            ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold pendingHedding">
              Pending Proposals
            </h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <span>
                  <img src="https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTEwL3JtNTg0LWVsZW1lbnQtMDIyLTZfMS5wbmc.png" alt="Bootstrap" width="60" height="60" class="rounded-circle border border-white" />
                  <p class="h6 mt-3" style="color: black">
                    <?php
                    $queryPpCard = "SELECT * FROM proposal WHERE Status =" . "'Pending';";
                    $queryPpCardrun = mysqli_query($con, $queryPpCard);
                    $TotalPp = mysqli_num_rows($queryPpCardrun);
                    echo $TotalPp;
                    ?>
                  </p>
                </span>
              </li>

              <li class="d-flex align-items-center">
                <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdropPP" aria-controls="staticBackdropPP">
                  Panding Proposals
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Aproved,Rejected,Pending proposals End-->

  <!--Tables Start-->
  <div class="container text-center mt-5">
    <div class="row">
      <div class="col tableBody">
        <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
          Aproved Proposals
        </h3>
        <table class="table tableBody">
          <thead>
            <tr>
              <th scope="col">Proposal ID</th>
              <th scope="col">Prposal Subject</th>
              <th scope="col">Submitte by</th>
              <th scope="col">Amount</th>
              <th scope="col">Aproved by</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <!--Tables part Backend Start-->
            <tr>
              <?php
              $queryap = "SELECT * from proposal WHERE Status =" . "'Approved';";
              $resultap = mysqli_query($con, $queryap);
              while ($row = mysqli_fetch_assoc($resultap)) {
              ?>
                <div>
                  <td>
                    <?php
                    $provar = $row['ProID'];
                    echo '<div><a href="proposal.php?proposal=' . $provar . '" style="text-decoration: none; color: black;">' . $row['ProID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Subject'] ?></td>
                  <td>
                    <?php
                    $empvar = $row['EmpID'];
                    echo '<div><a href="Profile.php?profile=' . $empvar . '" style="text-decoration: none; color: black;">' . $row['EmpID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Amount'] ?></td>
                  <td> <?php
                        $fivar = $row['FID'];
                        echo '<div><a href="Profile.php?profile=' . $fivar . '" style="text-decoration: none; color: black;">' . $row['FID'] . '</a></div>';

                        ?></td>

            </tr>
          <?php
              }
          ?>
          </tbody>
        </table>
      </div>
      <div class="col tableBody">
        <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
          Rejected Proposals Proposals
        </h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Proposal ID</th>
              <th scope="col">Prposal Subject</th>
              <th scope="col">Submitte by</th>
              <th scope="col">Amount</th>
              <th scope="col">Rejected by</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <?php
              $queryrp = "SELECT * from proposal WHERE Status =" . "'Rejected';";
              $resultrp = mysqli_query($con, $queryrp);
              while ($row = mysqli_fetch_assoc($resultrp)) {
              ?>
                <div>
                  <td>
                    <?php
                    $provar = $row['ProID'];
                    echo '<div><a href="proposal.php?proposal=' . $provar . '" style="text-decoration: none; color: black;">' . $row['ProID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Subject'] ?></td>
                  <td>
                    <?php
                    $empvar = $row['EmpID'];
                    echo '<div><a href="Profile.php?profile=' . $empvar . '" style="text-decoration: none; color: black;">' . $row['EmpID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Amount'] ?></td>
                  <td> <?php
                        $fivar = $row['FID'];
                        echo '<div><a href="Profile.php?profile=' . $fivar . '" style="text-decoration: none; color: black;">' . $row['FID'] . '</a></div>';

                        ?></td>

            </tr>
          <?php
              }
          ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <div class="container text-center mt-5">
    <div class="row">
      <div class="col tableBody">
        <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">
          Pending Proposals
        </h3>
        <table class="table tableBody">
          <thead>
            <tr>
              <th scope="col">Proposal ID</th>
              <th scope="col">Prposal Subject</th>
              <th scope="col">Submitte by</th>
              <th scope="col">Amount</th>
              <th scope="col">Inspected by</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <?php
              $querypp = "SELECT * from proposal WHERE Status =" . "'Pending';";
              $resultpp = mysqli_query($con, $querypp);
              while ($row = mysqli_fetch_assoc($resultpp)) {
              ?>
                <div>
                  <td>
                    <?php
                    $provar = $row['ProID'];
                    echo '<div><a href="proposal.php?proposal=' . $provar . '" style="text-decoration: none; color: black;">' . $row['ProID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Subject'] ?></td>
                  <td>
                    <?php
                    $empvar = $row['EmpID'];
                    echo '<div><a href="Profile.php?profile=' . $empvar . '" style="text-decoration: none; color: black;">' . $row['EmpID'] . '</a></div>';

                    ?></td>
                  <td><?php echo $row['Amount'] ?></td>
                  <td> <?php
                        $fivar = $row['FID'];
                        echo '<div><a href="Profile.php?profile=' . $fivar . '" style="text-decoration: none; color: black;">' . $row['FID'] . '</a></div>';

                        ?></td>
                  <td><a href="<?php echo 'proposal.php?proposal=' . $provar ?>" class="btn btn-primary">Review</a></td>

            </tr>
          <?php
              }
          ?>

          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!--Table End-->
</body>

</html>