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
                        New Download
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add Download</h5>
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
                                  <div class="col-12 mb-0">
                                    <label for="emailWithTitle" class="form-label">Title</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="title"
                                      placeholder="Title or Download name"
                                    />
                                  </div>
                                  <div class="col-12 mb-0">
                                    <label for="dobWithTitle" class="form-label">Seen By</label>
                                    <select name="privilege" id="" class='form-control' required>
                                    <option value="Choose Media Type" disabled selected>Choose Seen By</option>
                                    <option value="1">All (Public)</option>
                                    <option value="2">Only Staff</option>
                                    </select>
                                  </div>
                                  <div class="col-12 mb-0">
                                    <label for="emailWithTitle" class="form-label">Choose Document</label>
                                    <input
                                      type="file"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="document"
                                    />
                                  </div>
                                  
                                </div>
                                </div>
                                <div class="row g-2">

                                  <div class="col mb-0">
                                    <input type="hidden" name="id" value="">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="save_download" value="Upload">
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
                <h5 class="card-header">Available Downloads</h5>
                <div class="table-responsive text-nowrap">
                <input class="form-control m-2 p-2" id="myInput" type="text" placeholder="Search By title,Seen By, Uploaded etc" style="width:98%;">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Seen By</th>
                        <th>Uploaded</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="myTable">
                    <!-- NEWS -->
                    <?php
                    $fetch_media="SELECT*FROM downloads ORDER BY id DESC";
                    $qry=mysqli_query($con,$fetch_media);
                    while($row=mysqli_fetch_array($qry)): ?>
                      <tr>
                      <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-lg pull-up"
                              title="<?php echo $row['title']?>"
                            >
                              <img src="./assets/img/icons/unicons/cc-primary.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><?php echo $row['title']?></td>
                        <?php if($row['privilege']==1){
                            $seen_by="All (Public)";
                        }else{
                            $seen_by="Only Staff";
                        } ?>
                        <td><?php echo $seen_by ?></td>
                        <td><span class="badge bg-label-primary me-1"><?php echo $row['uploaded']?></span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="./?trx_name=downloads&media_edit=<?php echo base64_encode($row['id'])?>&type=news#edit"
                                ><i class="bx bx-edit-alt me-1"></i> Edit & Preview</a
                              >
                              <a class="dropdown-item" href="./process/?delete_media=<?php echo $row['id']?>&type=downloads"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endwhile;?>
                    <!-- // NEWS -->
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->

              <hr class="my-5" />
              <?php if(isset($_GET['media_edit'])): ?>
              <?php
              $media_id=base64_decode($_GET['media_edit']);
              $media="SELECT*FROM downloads WHERE id='$media_id'";
              $row=mysqli_fetch_array(mysqli_query($con,$media));

              ?>
              <!-- START EDIT FORM -->
              <div class="col-xl" id="edit">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Edit & Preview Download</h5>
                      <small class="text-muted float-end"><a href="./?trx_name=downloads">Cancel Editing</a></small>
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
                                      placeholder="Title or Download name"
                                      value="<?php echo $row['title']?>"
                                      required
                                    />
                                  </div>
                                  <div class="col-12 mb-0">
                                    <label for="dobWithTitle" class="form-label">Seen By</label>
                                    <select name="privilege" id="" class='form-control' required>
                                    <option value="Choose Media Type" disabled>Choose Seen By</option>
                                    <option value="1" <?php if($row['privilege']==1 ){echo "selected";}?>>All (Public)</option>
                                    <option value="2" <?php if($row['privilege']==2 ){echo "selected";}?>>Only Staff</option>
                                    </select>
                                  </div>
                                </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col-12 mb-0">
                                  <div class="card">
                                    <label for="emailWithTitle" class="form-label">Current Document</label>
                                   <iframe src="../assets/uploads/docs/<?php echo $row['document']?>" frameborder="0" height="300"></iframe>
                                  </div>
                                  </div>
                                  <div class="col-12 mb-0">
                                  <label for="emailWithTitle" class="form-label">Choose Document</label>
                                    <input
                                      type="file"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="document"
                                    />
                                    <small><i>Leave empty if you don't want to change</i></small>
                                    <input type="hidden" name="id" value="<?php  echo $row['id']?>">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                              <a href="./?trx_name=downloads"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button></a>
                              <input type="submit" class="btn btn-primary" name="save_download" value="Save">
                              </div>
                              </form>
                    </div>
                  </div>
                </div>
                <!-- END EDIT FORM -->
                <?php endif; ?>
              </div>
            <!-- / Content -->