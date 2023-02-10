<?php  
// Include config file
 require_once "layouts/config.php";
 include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Internship Registration | Presence Learning Private Limited</title>
    <?php include 'layouts/head.php'; ?>

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">
    <!-- choices css -->
    <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/classic.min.css" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/monolith.min.css" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css" /> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Registration</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Internship</a></li>
                                    <li class="breadcrumb-item active">Apply</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Internship Application Session 2022-23</h4>
                            </div>
                            <div class="card-body">

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Personal Details">
                                                    <i class="bx bx-list-ul"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Educational Details">
                                                    <i class="bx bx-book-bookmark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                                    <i class="bx bxs-bank"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div id="bar" class="progress mt-4">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                    </div>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="text-center mb-4">
                                                <h5>Applicant Details</h5>
                                                <p class="card-title-desc">Personal Information</p>
                                            </div>
                                            <form id="application" name="application_form" method="POST" action="">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-firstname-input">Full name</label>
                                                            <input type="text" name="name" class="form-control" id="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-lastname-input">Phone</label>
                                                            <input type="text"  name="phone" class="form-control" id="phone"required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-phoneno-input">Email</label>
                                                            <input type="email"  name="email" class="form-control" id="email"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Date Of Birth</label>
                                                            <input type="date"  name="dob" class="form-control" id="dob"required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="progresspill-address-input">Address</label>
                                                            <textarea id="address"  name="address" class="form-control" rows="2"required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" >Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="progress-company-document">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>Education Details</h5>
                                                    <span id="error"></span>
                                                    <p class="card-title-desc">Fill all information below</p>
                                                </div>
                                                
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3"> 
                                                                <label for="progresspill-pancard-input" class="form-label">Course</label>
                                                                
                                                                <select name="course" id="progresspill-pancard-input" class="form-control"required>
                                                                <option value="">Select Course</option>
                                                                <option value="B.Tech">B.Tech</option>
                                                                <option value="B.C.A">B.C.A</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="progresspill-vatno-input" class="form-label">Branch</label>
                                                                

                                                                <select name="branch" id="progresspill-vatno-input" class="form-control"required>
                                                                <option value="">Select Branch</option>
                                                                <option value="Civil Engineering">Civil Engineering</option>
                                                                <option value="Computer Science Engineering">Computer Science Engineering</option>
                                                                <option value="Electrical Engineering">Electrical Engineering</option>
                                                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="c_year" class="form-label">Completion Year</label>
                                                                
                                                                <select  id="c_year"  name="c_year" class="form-control">
                                                                    <option value="0" >--Select Year--</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">College</label>
                                                            <select class="form-select" name="college"   name="college" id="choices-single-default" placeholder="Type to search"required>
                                                             <option value="">Select Your College</option>
                                                             
                                                            </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="internship" class="form-label">Internship</label>
                                                                <select class="form-select" name="internship" data-trigger name="internship" id="internship" class="form-control" placeholder="Type to search"required>
                                                                    <option value="">Select Internship</option>
                                                                    <option value="SME">(SME) Subject Matter Expert</option>
                                                                    <option value="IMS">(IMS) Internship In MS Word</option>
                                                                    <option value="IWD">(IWD) Internship In Web Developement</option>
                                                                    <option value="IVE">(IVE) Internship In Video Editing</option>
                                                                    
                                                                </select>
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="duration" class="form-label">Duration</label>
                                                                <select name="duration" class="form-select" name="internship" data-trigger name="internship" id="duration" class="form-control" placeholder="Type to search"required>
                                                                    <option value="">--Select Duration--</option>
                                                                    <option value="1">1 Month</option>
                                                                    <option value="2">2 Month</option>
                                                                    <option value="3">3 Month</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" ><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" >Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-bank-detail">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>Bank Details</h5>
                                                    <p class="card-title-desc">Required for Incentive Payout</p>
                                                </div>
                                               
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="progresspill-namecard-input" class="form-label">UPI Address</label>
                                                                <input type="text" name="upi" class="form-control" id="progresspill-namecard-input"required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Name</label>
                                                                <input type="text" name="upi_name"  class="form-control" id=""required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </form>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" ><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                            Changes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- Modal -->
        <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="mb-3">
                                <i class="bx bx-check-circle display-4 text-success"></i>
                            </div>
                            <h5>Confirm Save Changes</h5>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal" onclick="event.preventDefault(); validateForm();">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
        <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $c_year=$_POST['c_year'];
    $college=$_POST['college'];
    $internship=$_POST['internship'];
    $duration=$_POST['duration'];
    $upi=$_POST['upi'];
    $upi_name=$_POST['upi_name'];

    $sql="SELECT id,name FROM internship_application WHERE phone = '$phone' AND internship_name = '$internship'";
    $result=mysqli_query($link,$sql);
    if(mysqli_num_rows($result)>0){
        echo'<script>alert("Already Applied"); </script>';
    
    }else{
        $sql="INSERT INTO `internship_application`(`name`, `email`, `phone`, `dob`, `address`, `course`, `branch`, `college`, `completion_year`, `internship_name`, `internship_duration`, `stipend_range`, `upi_id`, `upi_name`) VALUES ('$name','$email','$phone','$dob','$address','$course','$branch','$college','$c_year','$internship','$duration', '1000-5000', '$upi','$upi_name')";
		
		if(mysqli_query($link, $sql)){  
                     echo'<script>alert("Applied"); </script>';
             }else{  
                     $err= "Could not insert record: ". mysqli_error($link);  
				     echo'<script>alert("'.$err.'"); </script>';
        }   
    }

}

        ?>

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<script>
    function validateForm() {
        var error = "";
  let name = document.forms["application_form"]["name"].value;
  if (name == "") {
    alert("Name must be filled out");
     error = "yes";
    return false;
  }
  let phone = document.forms["application_form"]["phone"].value;
  if (phone == "") {
    alert("Phone must be filled out");
     error = "yes";
    return false;
  }
  let email = document.forms["application_form"]["email"].value;
  if (email == "") {
    alert("Email must be filled out");
     error = "yes";
    return false;
  }
  let dob = document.forms["application_form"]["dob"].value;
  if (dob == "") {
    alert("D.O.B must be filled out");
     error = "yes";
    return false;
  }
  let address = document.forms["application_form"]["address"].value;
  if (address == "") {
    alert("Address must be filled out");
    error = "yes";
    return false;
  }
  let course = document.forms["application_form"]["course"].value;
  if (course == "") {
    alert("Course must be filled out");
    error = "yes";
    return false;
  }
  let branch = document.forms["application_form"]["branch"].value;
  if (branch == "") {
    alert("Branch must be filled out");
    error = "yes";
    return false;
  }
  let c_year = document.forms["application_form"]["c_year"].value;
  if (c_year == "") {
    alert("Completion Year must be filled out");
    error = "yes";
    return false;
  }
  const collegeE = new Choices(document.getElementById('choices-single-default'));
  let college =  collegeE.getValue(true);
  var element1 = document.createElement("input");element1.type = "hidden";element1.value = college;element1.name = "college";
  document.getElementById("application").appendChild(element1);
   var  elementS = document.getElementById('choices-single-default');elementS.value = college;
  if (college == "") {
    alert("College must be filled out");
    error = "yes";
    return false;
  }
  const internshipE = new Choices(document.getElementById('internship'));
  let internship =  internshipE.getValue(true);
  var element2 = document.createElement("input");element2.type = "hidden";element2.value = internship;element2.name = "internship";
  document.getElementById("application").appendChild(element2);
  if (internship == "") {
    alert("Internship must be filled out");
    error = "yes";
    return false;
  }
  const durationE = new Choices(document.getElementById('duration'));
  let duration =  durationE.getValue(true); 
  var element3 = document.createElement("input");element3.type = "hidden";element3.value = duration;element3.name = "duration";
  document.getElementById("application").appendChild(element3);
  if (duration == "") {
    alert("Duration must be filled out");
    error = "yes";
    return false;
  }
  let upi = document.forms["application_form"]["upi"].value;
  if (upi == "") {
    alert("UPI must be filled out");
    error = "yes";
    return false;
  }
  let upi_name = document.forms["application_form"]["upi_name"].value;
  if (upi_name == "") {
    alert("UPI Name must be filled out");
    error = "yes";
    return false;
  }
  if(error !== "yes"){
    document.getElementById("application").submit();
  }
}
          
        </script>
<script>
    
    window.onload = populateSelect();

    function populateSelect() {
        // CREATE AN XMLHttpRequest OBJECT, WITH GET METHOD.
        var xhr = new XMLHttpRequest(), 
            method = 'GET',
            
            url = 'college.json?_=' + new Date().getTime();        // ADD THE URL OF THE FILE. 
        //xhr.setRequestHeader('Cache-Control', 'no-cache');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
                // PARSE JSON DATA.
                let college = JSON.parse(xhr.responseText);
                var ob = "(";
                var cb = ")  ";
                let ele = document.getElementById('choices-single-default');
				//alert(college.length);
                for (let i = 0; i < college.length; i++) {
                    // BIND DATA TO <select> ELEMENT.
                    /*ele.innerHTML = ele.innerHTML + '<option value="' + college[i].Name + '">' + ob + college[i].Id + cb + college[i].Name + '</option>';*/
					//console.log('<option value="' + college[i].Name + '">' + ob + college[i].Id + cb + college[i].Name + '</option>')
					var newoption = document.createElement('option');newoption.value = college[i].Name;newoption.innerHTML = ob + college[i].Id + cb + college[i].Name;
                    ele.appendChild(newoption);
					
					
                } 
            }
        };
        xhr.open(method, url, true);
        xhr.send();
    }

  
</script>
<script type="text/javascript">
     /*window.onload = function () {
       //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 2021; i <= 2026; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };*/
</script>


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- twitter-bootstrap-wizard js -->
<script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>
<!-- choices js -->
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- color picker js -->
<script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>
<script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- datepicker js -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>


<!-- init js -->
<script src="assets/js/pages/form-advanced.init.js"></script>

<!-- form wizard init -->
<script src="assets/js/pages/form-wizard.init.js"></script>

<!-- form mask -->
<script src="assets/libs/imask/imask.min.js"></script>

<!-- form mask init -->
<script src="assets/js/pages/form-mask.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>