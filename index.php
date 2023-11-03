
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title></title>
    </head>
    <body>
        
        
    <center><h2>Student Lists <button id="addStudent" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-info">Add New</button></h2></center>
        

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- Add new body -->
                  <input type="hidden" id="editid">
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control-plaintext" id="name" placeholder="e.g. Mohan">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control-plaintext" id="cls" placeholder="e.g.MCA">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control-plaintext" id="eml" placeholder="email@example.com">
                    </div>
                  </div>
                  <!-- End body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" id="add" >Add</button>
                <button type="button" class="btn btn-success" id="upd" style="display:none">Update</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- STUDENTS LIST -->
        
        <!--  Table Code -->
    
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>

                <tbody id="dataBody"></tbody>
              </table>


        <!-- End table code -->
        
        <!-- Student ID card -->
            
                <!-- Modal -->
                <div class="modal fade "  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Student Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <table>
                              <tr>
                                  <td rowspan="5">
                                      <img src="https://th.bing.com/th/id/OIP.kcaJsnMsMsFRdU6d1m2v6AHaHa?pid=ImgDet&rs=1" width="100px" height="100px">
                                  </td>
                              </tr>
                              <tr >
                                  <td id="spac">  Roll No.</td>
                                  <td><b><div id="rollno"></div></b></td>
                              </tr>
                              <tr>
                                  <td id="spac">  Name</td>
                                  <td><b><div id="nameID"></div></b></td>
                              </tr>
                              <tr>
                                  <td id="spac">  Class</td>
                                  <td><b><div id="classID"></div></b></td>
                              </tr>
                              <tr>
                                  <td id="spac">  Email</td>
                                  <td><b><div id="emailID"></div></b></td>
                              </tr>
                          </table>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                          <p class="text-center" style="color: green;font-weight: bold;">GJIMT,SECTOR-54,PHASE-2 MOHALI</p>
                      </div>
                    </div>
                  </div>
                </div>
        
        <!-- End ID code -->
        
        <script src="js.js"></script>
    </body>
</html>

<style>

    #spac 
    {
        padding-left: 20px;
    }
</style>