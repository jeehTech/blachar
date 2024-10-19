       <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Blachar Portal 🎉</h5>
                          <p class="mb-4">
                            You are <span class="fw-bold">Admin</span> of <b>Blachar Portal</b>,..
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Blachar Admin</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="./assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="./assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">New</a>
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">View All</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Windows</span>
                          <h3 class="card-title mb-2"><?php echo $bil->query("SELECT * FROM bil_projects WHERE project_service LIKE '%window%'")->num_rows; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="./assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">New</a>
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">View All</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Doors</span>
                          <h3 class="card-title mb-2"><?php echo $bil->query("SELECT * FROM bil_projects WHERE project_service LIKE '%door%'")->num_rows; ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- TAMSYA Laeders -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Blachar Users</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="./?trx_name=blachar_admins">View More</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                      <?php
                    $fetch_users="SELECT*FROM bil_users";
                    $qry=mysqli_query($bil,$fetch_users);
                    while($row=mysqli_fetch_array($qry)): ?>

                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/uploads/male.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Admin</small>
                              <h6 class="mb-0"><?php echo $row['username']?></h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <a href="javascript:void(0);"><h6 class="mb-0 text-primary">View</h6></a>
                            </div>
                          </div>
                        </li>

                        <?php endwhile;?>

                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ TAMSYA Laeders -->

                <!-- News And Events -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Projects</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item" href="./?trx_name=blachar_projects">New</a>
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <?php
                        $media=mysqli_query($bil,"SELECT*FROM bil_projects ORDER BY project_date DESC LIMIT 0,7");
                        while($row=mysqli_fetch_array($media)): ?>
                      <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/uploads/<?php echo $row['project_image']?>" alt="project" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1"><?php echo $row['project_date']?></small>
                              <h6 class="mb-0"><?php echo substr($row['project_title'],0,14)?>..</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <a href="javascript:void(0);"><h6 class="mb-0 text-primary">View</h6></a>
                            </div>
                          </div>
                        </li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ News And Events -->


                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="./assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">New</a>
                                <a class="dropdown-item" href="./?trx_name=blachar_projects">View All</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Showers</span>
                          <h3 class="card-title mb-2"><?php echo $bil->query("SELECT * FROM bil_projects WHERE project_service LIKE '%shower%'")->num_rows; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="./assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Architech</span>
                          <h3 class="card-title mb-2"><?php echo $bil->query("SELECT * FROM bil_projects WHERE project_service LIKE '%Architech%'")->num_rows; ?></h3>
                        </div>
                      </div>
                    </div>


                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">WebApp Visitors</h5>
                                <span class="badge bg-label-warning rounded-pill">Today</span>
                              </div>
                              <div class="mt-sm-auto">
                                <?php
                                $var=rand(0,5);
                                if($var<=2){
                                  $text="success";
                                  $dir="chevron-up";
                                }else{
                                  $text="danger";
                                  $dir="chevron-down";
                                }
                                ?>
                                <small class="text-<?php echo $text?> text-nowrap fw-semibold"
                                  ><i class="bx bx-<?php echo $dir?>"></i><?php echo 2+rand(0,98);?></small
                                >
                                <h3 class="mb-0"><?php echo rand(0,629);?></h3>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>
            <!-- / Content -->