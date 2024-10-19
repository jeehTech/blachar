<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="./">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-primary active" href="#">Projects</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-6 mb-5">Learn More What We Have Done And Get Involved</h1>
            </div>

 <!--  Tabs -->
                <ul class="nav nav-pills mb-3" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-all"
                          aria-controls="navs-pills-top-all"
                          aria-selected="true"
                        >
                          All
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-windows"
                          aria-controls="navs-pills-top-windows"
                          aria-selected="false"
                        >
                        Windows
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-doors"
                          aria-controls="navs-pills-top-doors"
                          aria-selected="false"
                        >
                          Doors
                        </button>
                      </li>

                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-showers"
                          aria-controls="navs-pills-top-showers"
                          aria-selected="false"
                        >
                        Showers
                        </button>
                      </li>

                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-architect"
                          aria-controls="navs-pills-top-architect"
                          aria-selected="false"
                        >
                        Architect
                        </button>
                      </li>
                </ul>

        <div class="tab-content">
        <div class="tab-pane fade show container-fluid text-left active" id="navs-pills-top-all" role="tabpanel">
            <div class="row">

            <?php
                    $fetch_media="SELECT*FROM bil_projects";
                    $qry=mysqli_query($bil,$fetch_media);
                    while($row=mysqli_fetch_array($qry)): ?>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">  
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>All</small>
                            </div>
                            <h5 class="mb-3"><?php echo $row['project_title']?></h5>
                            <p><?php echo $row['about_project']?></p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark"> <?php echo $row['project_client']?> <br><small class="text-body">Client</small></p>
                                    <p class="text-dark"><?php echo $row['project_date']?> <br> <small class="text-body">Date</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="./assets/uploads/<?php echo $row['project_image']?>" alt="<?php echo $row['project_title']?>">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="./?bil=contact">
                                    Get Offer
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
               </div>
               <?php endwhile;?>

          </div>
       </div>

        <div class="tab-pane fade" id="navs-pills-top-windows" role="tabpanel">
        <div class="row">

        <?php
        $fetch_media="SELECT*FROM bil_projects WHERE project_service LIKE '%Windows%'";
        $qry=mysqli_query($bil,$fetch_media);
        while($row=mysqli_fetch_array($qry)): ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">  
        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
            <div class="text-center p-4 pt-0">
                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                    <small>Windows</small>
                </div>
                <h5 class="mb-3"><?php echo $row['project_title']?></h5>
                            <p><?php echo $row['about_project']?></p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark"> <?php echo $row['project_client']?> <br><small class="text-body">Client</small></p>
                                    <p class="text-dark"><?php echo $row['project_date']?> <br> <small class="text-body">Date</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="./assets/uploads/<?php echo $row['project_image']?>" alt="<?php echo $row['project_title']?>">
                            <div class="causes-overlay">
                    <a class="btn btn-outline-primary" href="./?bil=contact">
                        Get Offer
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
   </div>
   <?php endwhile;?>

</div>
</div>

        <div class="tab-pane fade" id="navs-pills-top-doors" role="tabpanel">
        <div class="row">

        <?php
        $fetch_media="SELECT*FROM bil_projects WHERE project_service LIKE '%Doors%'";
        $qry=mysqli_query($bil,$fetch_media);
        while($row=mysqli_fetch_array($qry)): ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">  
        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
            <div class="text-center p-4 pt-0">
                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                    <small>Doors</small>
                </div>
                <h5 class="mb-3"><?php echo $row['project_title']?></h5>
                            <p><?php echo $row['about_project']?></p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark"> <?php echo $row['project_client']?> <br><small class="text-body">Client</small></p>
                                    <p class="text-dark"><?php echo $row['project_date']?> <br> <small class="text-body">Date</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="./assets/uploads/<?php echo $row['project_image']?>" alt="<?php echo $row['project_title']?>">
                            <div class="causes-overlay">
                    <a class="btn btn-outline-primary" href="./?bil=contact">
                        Get Offer
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
   </div>
   <?php endwhile;?>

</div>
</div>

<div class="tab-pane fade" id="navs-pills-top-showers" role="tabpanel">
        <div class="row">

        <?php
        $fetch_media="SELECT*FROM bil_projects WHERE project_service LIKE '%Showers%'";
        $qry=mysqli_query($bil,$fetch_media);
        while($row=mysqli_fetch_array($qry)): ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">  
        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
            <div class="text-center p-4 pt-0">
                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                    <small>Showers</small>
                </div>
                <h5 class="mb-3"><?php echo $row['project_title']?></h5>
                            <p><?php echo $row['about_project']?></p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark"> <?php echo $row['project_client']?> <br><small class="text-body">Client</small></p>
                                    <p class="text-dark"><?php echo $row['project_date']?> <br> <small class="text-body">Date</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="./assets/uploads/<?php echo $row['project_image']?>" alt="<?php echo $row['project_title']?>">
                            <div class="causes-overlay">
                    <a class="btn btn-outline-primary" href="./?bil=contact">
                        Get Offer
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
   </div>
   <?php endwhile;?>

</div>
</div>

<div class="tab-pane fade" id="navs-pills-top-architect" role="tabpanel">
        <div class="row">

        <?php
        $fetch_media="SELECT*FROM bil_projects WHERE project_service LIKE '%Architech%'";
        $qry=mysqli_query($bil,$fetch_media);
        while($row=mysqli_fetch_array($qry)): ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">  
        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
            <div class="text-center p-4 pt-0">
                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                    <small>Architect</small>
                </div>
                <h5 class="mb-3"><?php echo $row['project_title']?></h5>
                            <p><?php echo $row['about_project']?></p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark"> <?php echo $row['project_client']?> <br><small class="text-body">Client</small></p>
                                    <p class="text-dark"><?php echo $row['project_date']?> <br> <small class="text-body">Date</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="./assets/uploads/<?php echo $row['project_image']?>" alt="<?php echo $row['project_title']?>">
                            <div class="causes-overlay">
                    <a class="btn btn-outline-primary" href="./?bil=contact">
                        Get Offer
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
   </div>
   <?php endwhile;?>

</div>
</div>

     </div>

            <!-- / Tabs -->

        </div>
    </div>
    <!-- Service End -->