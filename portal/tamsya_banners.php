       <!-- Content wrapper -->
       <div class="content-wrapper">
            <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
                       <!-- START POP UP MODAL  -->
                  <!-- Vertically Centered Modal -->
                  <div class="col-lg-4 col-md-6">
                  <div class="mt-2 mb-2">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-light"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter"
                        >
                          New Banner
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add New Banner</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <form action="./process/" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">
                                <div class="row">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Title</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="title"
                                      placeholder="Banner Heading"
                                    />
                                  </div>
                                </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">About</label>
                                    <textarea
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="about"
                                      placeholder="Say something..."
                                    ></textarea>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Thumbnail</label>
                                    <input
                                      type="file"
                                      name="thumbnail"
                                      id="dobWithTitle"
                                      class="form-control"
                                    />
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name="content" value="banner">

                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="save_content" value="Add">
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END POP UP MODAL  -->
              <!-- Bootstrap Table with Header - Dark -->
              <div class="card">
                <h5 class="card-header">Available Banners</h5>
                <div class="table-responsive text-nowrap">
                <input class="form-control m-2 p-2" id="myInput" type="text" placeholder="Search By title, about, date etc" style="width:98%;">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Banner</th>
                        <th>Title</th>
                        <th>About</th>
                        <th>Posted</th>
                        <th>Switch</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="myTable">
                    <!-- PROJECTS -->
                    <?php
                    $fetch_banner="SELECT*FROM banners ORDER BY posted DESC";
                    $qry=mysqli_query($con,$fetch_banner);
                    while($row=mysqli_fetch_array($qry)): ?>
                      <tr id="<?php echo $row['id']?>">
                      <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-lg pull-up"
                              title="<?php echo $row['title']?>"
                            >
                              <img src="../assets/uploads/img/posts/<?php  echo$row['thumbnail']?>" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1"><?php echo $row['posted']?></span></td>
                        <td><?php echo $row['title']?></td>
                        <td><?php echo substr($row['about'],0,20,)?>..</td>
                        <td>
                            <div class="form-check form-switch mb-2">
                                <?php if($row['switch']=="on"){
                                    $state="off";
                                    $switch="checked";
                                    $action="Turn Off";
                                }elseif($row['switch']=="off"){
                                    $state="on";
                                    $switch="";
                                    $action="Turn On";
                                }
                                ?>
                                <a href="./process/?switch=<?php echo base64_encode($state) ?>&banner=<?php echo base64_encode($row['id'])?>&type=<?php echo base64_encode("banners")?>">
                               <span><input class="form-check-input" type="checkbox" <?php echo $switch?>/><?php echo$action?></span>
                        </a>
                      </div>
                    </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="./?trx_name=tamsya_banners&content_edit=<?php echo base64_encode($row['id'])?>#edit"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="./process/?delete_content=<?php echo $row['id']?>&type=banner"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endwhile;?>
                    <!-- // PROJECTS -->
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->

              <hr class="my-5" />
              <?php if(isset($_GET['content_edit'])): ?>
              <?php
              $content_id=base64_decode($_GET['content_edit']);
              $table="banners";
              $content="SELECT*FROM $table WHERE id='$content_id'";
              $row=mysqli_fetch_array(mysqli_query($con,$content));

              ?>
              <!-- START EDIT FORM -->
              <div class="col-xl" id="edit">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Edit Media</h5>
                      <small class="text-muted float-end"><a href="./?trx_name=tamsya_banners">Cancel Editing</a></small>
                    </div>
                    <div class="card-body">
                    <form action="./process/" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">
                                <div class="row">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Title</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="title"
                                      placeholder="Banner Heading"
                                      value="<?php echo $row['title']?>"
                                      required
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">About</label>
                                    <textarea
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="about"
                                      placeholder="Say something..."
                                      required
                                    ><?php echo $row['about']?></textarea>
                                  </div>
                                </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Current Thumbnail</label>
                                    <img src="../assets/uploads/img/posts/<?php  echo $row['thumbnail']?>" alt="Avatar" class="img-fluid immg-responsive" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">New Thumbnail</label>
                                    <input
                                      type="file"
                                      name="thumbnail"
                                      id="dobWithTitle"
                                      class="form-control"
                                    />
                                    <small><i>Leave empty if you don't want to change the existing thumbnail/poster</i></small>
                                    <input type="hidden" name="id" value="<?php  echo $row['id']?>">
                                    <input type="hidden" name="content" value="banner">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                              <a href="./?trx_name=tamsya_projects"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button></a>
                                <input type="submit" class="btn btn-primary" name="save_content" value="Save">
                              </div>
                              </form>
                    </div>
                  </div>
                </div>
                <!-- END EDIT FORM -->
                <?php endif; ?>
              </div>
            <!-- / Content -->