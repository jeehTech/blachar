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
                        Add Project
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add New Project</h5>
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
                                    <label for="emailWithTitle" class="form-label">Project Title</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="project_title"
                                      placeholder="Project Title"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Service Types</label>
                                    <select name="project_service" id="" class='form-control'>
                                    <option value="Choose Service Type" disabled selected>Choose Service Type</option>
                                    <option value="Windows,Doors,Showers,Architech Services">Windows,Doors,Showers,Architech Services</option>
                                    <option value="Windows,Doors,Showers Services">Windows,Doors,Showers Services</option>
                                    <option value="Windows,Doors,Architech Services">Windows,Doors,Architech Services</option>
                                    <option value="Windows,Showers,Architech Services">Windows,Showers,Architech Services</option>
                                    <option value="Windows,Doors Services">Windows,Doors Services</option>
                                    <option value="Windows,Showers Services">Windows,Showers Services</option>
                                    <option value="Windows,Architech Services">Windows,Architech Services</option>
                                    <option value="Doors,Architech Services">Doors,Architech Services</option>
                                    <option value="Doors,Showers Services">Doors,Showers Services</option>
                                    <option value="Showers,Architech Services">Showers,Architech Services</option>
                                    <option value="Windows Service">Windows Service</option>
                                    <option value="Doors Service">Doors Service</option>
                                    <option value="Showers Service">Showers Service</option>
                                    <option value="Architech Service">Architech Service</option>
                                    </select>
                                  </div>
                                </div>
                                </div>

                                <div class="row">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Project Client</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="project_client"
                                      placeholder="Project Client eg. NSSF Njombe"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Project Date</label>
                                    <input
                                      type="date"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="project_date"
                                    />
                                  </div>
                                </div>
                                </div>

                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">About Project</label>
                                    <textarea
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="about_project"
                                      placeholder="Something about project..."
                                    ></textarea>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Project Image</label>
                                    <input
                                      type="file"
                                      name="project_image"
                                      id="dobWithTitle"
                                      class="form-control"
                                    />
                                    <input type="hidden" name="id" value="">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="save_media" value="Add">
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
                <h5 class="card-header">Available Projects</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>About</th>
                        <th>Client</th>
                        <th>Service</th>
                        <th>Project Date</th>
                        <th>Posted</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="myTable">
                    <!-- PROJECTS -->
                    <?php
                    $fetch_media="SELECT*FROM bil_projects";
                    $qry=mysqli_query($bil,$fetch_media);
                    while($row=mysqli_fetch_array($qry)): ?>
                      <tr>
                      <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-lg pull-up"
                              title="<?php echo $row['project_title']?>"
                            >
                              <img src="../assets/uploads/<?php  echo $row['project_image']?>" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><?php echo $row['project_title']?></td>
                        <td><?php echo substr($row['about_project'],0,20)?>..</td>
                        <td><?php echo $row['project_client']?></td>
                        <td><?php echo $row['project_service']?></td>
                        <td><span class="badge bg-label-danger me-1"><?php echo $row['project_date']?></span></td>
                        <td><span class="badge bg-label-primary me-1"><?php echo $row['added_at']?></span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="./?trx_name=blachar_projects&media_edit=<?php echo base64_encode($row['project_id'])?>&type=projects#edit"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="./process/?delete_media=<?php echo $row['project_id']?>&type=projects"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endwhile;?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->

              <hr class="my-5" />
              <?php if(isset($_GET['media_edit'])): ?>
              <?php
              $media_id=base64_decode($_GET['media_edit']);
              $media="SELECT*FROM bil_projects WHERE project_id='$media_id'";
              $row=mysqli_fetch_array(mysqli_query($bil,$media));

              ?>
              <!-- START EDIT FORM -->
              <div class="col-xl" id="edit">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Edit Media</h5>
                      <small class="text-muted float-end"><a href="./?trx_name=blachar_projects">Cancel Editing</a></small>
                    </div>
                    <div class="card-body">
                    <form action="./process/" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">
                                <div class="row">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Project Title</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="project_title"
                                      placeholder="Project Title"
                                      value="<?php echo $row['project_title']?>"
                                      required
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">About Project</label>
                                    <textarea
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="about_project"
                                      placeholder="Something about project..."
                                      required
                                    ><?php echo $row['about_project']?></textarea>
                                  </div>
                                </div>
                                </div>

                                <div class="row">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Project Client</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="project_client"
                                      placeholder="Project Client eg. NSSF Njombe"
                                      value="<?php echo $row['project_client']?>"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Project Date</label>
                                    <input
                                      type="date"
                                      id="emailWithTitle"
                                      class="form-control"
                                      name="project_date"
                                      value="<?php echo $row['project_date']?>"
                                    />
                                  </div>
                                </div>
                                </div>


                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Current Thumbnail</label>
                                    <img src="../assets/uploads/<?php  echo $row['project_image']?>" alt="Avatar" class="img-fluid immg-responsive" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">New Thumbnail</label>
                                    <input
                                      type="file"
                                      name="project_image"
                                      id="dobWithTitle"
                                      class="form-control"
                                    />
                                    <small><i>Leave empty if you don't want to change the existing thumbnail/poster</i></small>
                                    
                                    <div class="col my-3">
                                    <label for="dobWithTitle" class="form-label">Service Types</label>
                                    <select name="project_service" id="" class='form-control'>
                                    <option value="Choose Service Type" disabled>Choose Service Type</option>
                                    <option value="Windows,Doors,Showers,Architech Services" <?php if($row['project_service'] == 'Windows,Doors,Showers,Architech Services'){echo "selected";}?>>Windows,Doors,Showers,Architech Services</option>
                                    <option value="Windows,Doors,Showers Services" <?php if($row['project_service'] == 'Windows,Doors,Showers Services'){echo "selected";}?>>Windows,Doors,Showers Services</option>
                                    <option value="Windows,Doors,Architech Services" <?php if($row['project_service'] == 'Windows,Doors,Architech Services'){echo "selected";}?>>Windows,Doors,Architech Services</option>
                                    <option value="Windows,Showers,Architech Services" <?php if($row['project_service'] == 'Windows,Showers,Architech Services'){echo "selected";}?>>Windows,Showers,Architech Services</option>
                                    <option value="Windows,Doors Services" <?php if($row['project_service'] == 'Windows,Doors Services'){echo "selected";}?>>Windows,Doors Services</option>
                                    <option value="Windows,Showers Services" <?php if($row['project_service'] == 'Windows,Showers Services'){echo "selected";}?>>Windows,Showers Services</option>
                                    <option value="Windows,Architech Services" <?php if($row['project_service'] == 'Windows,Architech Services'){echo "selected";}?>>Windows,Architech Services</option>
                                    <option value="Doors,Architech Services" <?php if($row['project_service'] == 'Doors,Architech Services'){echo "selected";}?>>Doors,Architech Services</option>
                                    <option value="Doors,Showers Services" <?php if($row['project_service'] == 'Doors,Showers Services'){echo "selected";}?>>Doors,Showers Services</option>
                                    <option value="Showers,Architech Services" <?php if($row['project_service'] == 'Showers,Architech Services'){echo "selected";}?>>Showers,Architech Services</option>
                                    <option value="Windows Service" <?php if($row['project_service'] == 'Windows Service'){echo "selected";}?>>Windows Service</option>
                                    <option value="Doors Service" <?php if($row['project_service'] == 'Doors Service'){echo "selected";}?>>Doors Service</option>
                                    <option value="Showers Service" <?php if($row['project_service'] == 'Showers Service'){echo "selected";}?>>Showers Service</option>
                                    <option value="Architech Service" <?php if($row['project_service'] == 'Architech Service'){echo "selected";}?>>Architech Service</option>
                                    </select>
                                  </div>

                                    <input type="hidden" name="project_id" value="<?php  echo $row['project_id']?>">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                              <a href="./?trx_name=blachar_projects"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button></a>
                                <input type="submit" class="btn btn-primary" name="save_media" value="Save">
                              </div>
                              </form>
                    </div>
                  </div>
                </div>
                <!-- END EDIT FORM -->
                <?php endif; ?>
              </div>
            <!-- / Content -->