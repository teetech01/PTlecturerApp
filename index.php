<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>APPLICATION FORM</title>
</head>

<body>
    <script>
        window.readURL = function(input) {
            console.log(input.files[0].name);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                    $('#passport_filename').attr('value', input.files[0].name);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <h1>APPLICATION FORM FOR APPOINTMENT AS A LECTURER ON THE (SPTSR) PROGRAMME: 2019/2020</h1>
    <div class="row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
            <form action="includes/upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:<br>
                        <img id="blah" src="#" />
                        <br><input type="file" name="fileToUpload" onchange="readURL(this);" id="fileToUpload" style="padding: 0;width: auto !important;font-size: small;">
                        <button type="submit" name="submitImage" style="padding: 5px !important;margin-top: 3px;font-size: small;">Upload Image</button>
            </form>
        </div>
    </div>
    <form id="regForm" action="includes/apply.inc.php" method="post">
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <div class="row">
                <div class="col-sm-6">
                    <input type="hidden" value="" name="fileToUpload" id="passport_filename">
                    <div class="form-group">
                        <label for="usr">Select Session:</label>
                        <!-- <input type="text" class="form-control validate" name="session"> -->
                        <select name="session" class="custom-select mb-3">
                            <option selected value="2019/2020">2019/2020</option>
                            <option value="2018/2019">2018/2019</option>
                            <option value="2017/2018">2017/2018</option>
                        </select>                        
                    </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                        <label for="usr">Department Desired:</label>
                        <!-- <input type="text" class="form-control validate" name="desire_department"> -->
                        <select name="desire_department" class="custom-select mb-3">
                            <?php
                                include_once 'includes/dbh.inc.php';
                                //echo "<option selected value='ACCOUNTANCY'>ACCOUNTANCY</option>";
                                $sql = "SELECT * FROM sptsr_lect_dept";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0){
                                        // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<option selected value='".$row["dept_name"]."'>".$row["dept_name"]."</option>";
                                    }
                                } else {
                                    echo "<option selected value='ERROR LOADING DEPARTMENT'>ERROR LOADING DEPARTMENT</option>";                                
                                }
                            ?>
                        </select>                                            
                    </div>

                </div>
            </div>
            <p><u>PERSONAL INFORMATION:</u> <small style="color: red;">ALL INFORMATION TO BE COMPLETED IN BLOCK LETTERS
                    BY THE APPLICANTS</small></p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="usr">Surname:</label>
                        <input type="text" class="form-control validate" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="usr">Email:</label>
                        <input type="email" class="form-control validate" name="email">
                    </div>
                    <div class="form-group">
                        <label for="usr">Home Address:</label>
                        <input type="text" class="form-control validate" name="home_address">
                    </div>
                    <div class="form-group">
                        <label for="usr">Position Held:</label>
                        <input type="text" class="form-control validate" name="position">
                    </div>
                    <div class="form-group">
                        <label for="usr">Religion:</label>
                        <!-- <input type="text" class="form-control validate" name="religion"> -->
                        <select name="religion" class="custom-select mb-3">
                            <option selected value="CHRISTIANITY">CHRISTIANITY</option>
                            <option value="ISLAM">ISLAM</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="usr">State of Origin:</label>
                        <input type="text" class="form-control validate" name="state">
                    </div>
                    <div class="form-group">
                        <label for="usr">Marital Status:</label>
                        <!-- <input type="text" class="form-control validate" name="marital"> -->
                        <select name="marital" class="custom-select mb-3">
                            <option selected value="SINGLE">SINGLE</option>
                            <option value="MARRIED">MARRIED</option>
                            <option value="DIVORCED">DIVORCED</option>
                            <option value="WIDOWED">WIDOWED</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="usr">Name of Referee:</label>
                        <input type="text" class="form-control validate" name="referee_name">
                    </div>
                    <div class="form-group">
                        <label for="usr">Referee Position:</label>
                        <input type="text" class="form-control validate" name="referee_position">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="usr">Othername:</label>
                        <input type="text" class="form-control validate" name="othername">
                    </div>
                    <div class="form-group">
                        <label for="usr">Mobile Phone Number:</label>
                        <input type="number" class="form-control validate" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="usr">Office Address:</label>
                        <input type="text" class="form-control validate" name="office_address">
                    </div>
                    <div class="form-group">
                        <label for="usr">Date of Birth:</label>
                        <input type="date" class="form-control validate" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="usr">Nationality:</label>
                        <!-- <input type="text" class="form-control validate" name="nationality"> -->
                        <select name="nationality" class="custom-select mb-3">
                            <option selected value="NIGERIAN">NIGERIAN</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="usr">Gender:</label>
                        <!-- <input type="text" class="form-control validate" name="gender"> -->
                        <select name="gender" class="custom-select mb-3">
                            <option selected value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="usr">Name of Spouse:</label>
                        <input type="text" class="form-control validate" name="spouse_name">
                    </div>
                    <div class="form-group">
                        <label for="usr">Referee Office Address:</label>
                        <input type="text" class="form-control validate" name="referee_address">
                    </div>
                    <div class="form-group">
                        <label for="usr">Referee Phone Number:</label>
                        <input type="text" class="form-control validate" name="referee_phone">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="usr">Name & Address of Next of Kin:</label>
                <input type="text" class="form-control validate" name="kin_details">
            </div>
        </div>

        <div class="tab">
            <p><u>EDUCATIONAL BACKGROUND/QUALIFICATIONS:</u> <small style="color: red;">Enter your highest Academic & Professional Qualification</small></p>
            <div class="row">
                <div class="col-sm-6">
                    <p>ACADEMIC QUALIFICATION:</p>
                    <div class="form-group">
                        <label for="usr">Institution:</label>
                        <input type="text" class="form-control validate" name="institution_attended">
                    </div>
                    <div class="form-group">
                        <label for="usr">From:</label>
                        <input type="text" class="form-control validate" name="from_year">
                    </div>
                    <div class="form-group">
                        <label for="usr">To:</label>
                        <input type="text" class="form-control validate" name="to_year">
                    </div>
                    <div class="form-group">
                        <label for="usr">Qualification:</label>
                        <!-- <input type="text" class="form-control validate" name="sch_qualification"> -->
                        <select name="sch_qualification" class="custom-select mb-3">
                            <option selected value="PhD/Msc">PhD/Msc</option>
                            <option value="MBA/Bsc">MBA/Bsc</option>
                            <option value="Btech/HND">Btech/HND</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="usr">Date of Award:</label>
                        <input type="text" class="form-control validate" name="sch_award_date">
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>PROFESSIONAL QUALIFICATION:</p>
                    <div class="form-group">
                        <label for="usr">Qualification:</label>
                        <input type="text" class="form-control validate" name="pro_qualification">
                    </div>
                    <div class="form-group">
                        <label for="usr">Awarding Body/Society:</label>
                        <input type="text" class="form-control validate" name="awarding_body">
                    </div>
                    <div class="form-group">
                        <label for="usr">Date of Award:</label>
                        <input type="text" class="form-control validate" name="pro_award_date">
                    </div>
                    <div class="form-group">
                        <label for="usr">BOOK PUBLISHED: <small style="color: red;">Enter your recent book published</small></label>
                        <input type="text" class="form-control" name="book_published">
                    </div>
                    <div class="form-group">
                        <label for="usr">JOURNAL PUBLICATION: <small style="color: red;">Enter your recent journal publication</small></label>
                        <input type="text" class="form-control" name="journal_publication">
                    </div>
                </div>
            </div>
        </div>

        <div class="tab">
            <p><u>WORKING EXPERIENCE:</u></p>
            <div class="row">
                <div class="col-sm-4">
                    <p>Teaching Experience in the last 3 Year:</p>
                    <div class="form-group">
                        <label for="usr">School:</label>
                        <input type="text" class="form-control validate" name="work_school">
                    </div>
                    <div class="form-group">
                        <label for="usr">Department:</label>
                        <input type="text" class="form-control validate" name="work_department">
                    </div>
                    <div class="form-group">
                        <label for="usr">Course taught:</label>
                        <input type="text" class="form-control validate" name="course_taught">
                    </div>
                    <div class="form-group">
                        <label for="usr">Category of students:</label>
                        <input type="text" class="form-control validate" name="student_category">
                    </div>
                </div>
                <div class="col-sm-4">
                    <p>Examination Invigilation/Supervision Experience: <small style="color: red;">Enter your recent experience</small></p>
                    <div class="form-group">
                        <label for="usr">School:</label>
                        <input type="text" class="form-control validate" name="invigilated_school">
                    </div>
                    <div class="form-group">
                        <label for="usr">Program:</label>
                        <input type="text" class="form-control validate" name="invigilated_program">
                    </div>
                    <div class="form-group">
                        <label for="usr">Date & Period:</label>
                        <input type="text" class="form-control validate" name="invigilated_period">
                    </div>
                </div>

                <div class="col-sm-4">
                    <p>Conference Marking Experience: <small style="color: red;">Enter your recent experience</small></p>
                    <div class="form-group">
                        <label for="usr">School:</label>
                        <input type="text" class="form-control validate" name="marked_school">
                    </div>
                    <div class="form-group">
                        <label for="usr">Department:</label>
                        <input type="text" class="form-control validate" name="marked_department">
                    </div>
                    <div class="form-group">
                        <label for="usr">Course(s) Marked:</label>
                        <input type="text" class="form-control validate" name="marked_course">
                    </div>
                    <div class="form-group">
                        <label for="usr">Date & Period:</label>
                        <input type="text" class="form-control validate" name="marked_period">
                    </div>
                </div>

            </div>
        </div>
        <div class="tab">
            <p><u>PERSONAL UNDERTAKING:</u></p>
            <p>
                I understand that the School operates mostly weekend lecture i.e Friday – Sunday, and I shall make
                myself available to teach the courses allotted to me within time assigned by the School Authorities.
                <br><br>I undertake to invigilate students during Examinations and participate in any marking system that
                may be adopted by the Polytechnic and submit the graded and marked scripts within the time stipulated by
                the School authorities.
                <br><br>I further understand that the sale of handouts, organizing of private coaching classes and
                collection of money from students (under any guise/circumstance) are strictly prohibited.
                <br><br>I undertake to promptly perform with diligence any official duties as may be assigned to me from
                time to time.
                <br><br>I hereby pledge to abide by all the rules and regulations and to be of good conduct in all my
                affairs in the school.
                <br><br>I hereby undertake to accept any disciplinary measure that may be imposed by the Polytechnic for a
                breach of its rules and regulations and for providing any incorrect information.
            </p>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">I Agree the above Terms & Conditions.
                </label>
            </div>
        </div>
        <!-- BUTTONS -->
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:0px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form>

    <script src="index.js"></script>
</body>

</html>