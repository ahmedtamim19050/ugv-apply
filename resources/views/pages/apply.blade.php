<x-app>
    @push('css')
        <style>
            .card {
                border: 2px solid #444545b3;
                border-radius: 8px;
                overflow: hidden;
                cursor: pointer;
                transition: border-color 0.3s, box-shadow 0.3s, background-color 0.3s;
            }
            .card-body{
                padding: 20px;
            }

            .card .form-title{
                padding-bottom: 10px;
                border-bottom: 2px solid #444545b3;
            }

            
            

        </style>
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    @endpush

    @push('js')
        <!-- Load FilePond library -->
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

        <!-- Turn all file input elements into ponds -->
       
    @endpush

    <div class="banner v__1" style="height: 40vh;align-items:center">
        <div class="container">
            <div class="col-sm-12">
                <div class="">

                    <div class="banner__wrapper--middle">
                        <div class="banner__content">
                            <div class="breadcrumb-content">

                                <h2 class="section-title text-center text-white" style="margin-top:80px">Apply to UGV
                                </h2>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="grid-line">
            <div class="grid-lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <form action="" method="post">

            <div class="rts-page-content ">
                <div class="container">

                    <div class="row sticky-coloum-wrap g-5 mt--45">
                        <div class="col-lg-12">
                            <div class="rts-ap-section">

                                <div class="rts-application-form">
                                    <div class="single-form-part">


                                        <div class="single-input">

                                            <div class="single-input-item">
                                                <h5 class="form-title">Application for <span
                                                        class="text-danger">*</span></h5>
                                                <select name="application" id="application" required>
                                                    <option value="">Select Graduate or Under Graduate</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="Under Graduate">Under Graduate</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">

                                                <label for="session">Session</label>
                                                <select name="session" id="session" required>
                                                    <option value="">Select session</option>
                                                    <option value="January">January</option>
                                                    <option value="June">June</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="form-title">Personal Information</h5>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="fname">Student's Image <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="profileImage" id="profileImage"
                                                        accept="image/png, image/jpeg, image/gif" required>
                                                    </div>
        
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="fname">Full Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name" id="name"
                                                            placeholder="Enter student's full name" required>
                                                    </div>
        
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="email">Email <span class="text-danger">*</span></label>
                                                        <input type="email" name="email" id="email"
                                                            placeholder="Enter your mail" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="contact_number">Contact Number <span
                                                                class="text-danger">*</span></label>
                                                        <small> ( with country code )</small>
                                                        <input type="tel" name="contact_number" id="contact_number"
                                                            placeholder="Enter Student's Contact Number " required>
                                                    </div>
                                                </div>
                                                <div class="single-input">
        
                                                    <div class="single-input-item">
                                                        <label for="gender">Gender <span class="text-danger">*</span></label>
                                                        <select name="gender" id="gender" required>
                                                            <option value="">Gender</option>
                                                            @foreach (App\Constant::Gender as $gender)
                                                                <option value="{{ $gender }}">{{ $gender }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="gender">Blood Group <span
                                                                class="text-danger">*</span></label>
                                                        <select name="blood" id="blood" required>
                                                            <option value="">Blood Group</option>
                                                            @foreach (App\Constant::BloodGroup as $group)
                                                                <option value="{{ $group }}">{{ $group }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="religion">Religion <span
                                                                class="text-danger">*</span></label>
                                                        <select name="religion" id="religion" required>
                                                            <option value="">Religion</option>
                                                            @foreach (App\Constant::Religion as $religion)
                                                                <option value="{{ $religion }}">{{ $religion }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="dob">Date of Birth <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="dob" id="datepicker"
                                                            placeholder="dd/mm/yy" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="dob">Passport Number <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="dob"
                                                            placeholder="Enter student's passport number" required>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="country">Country</label>
                                                        <select name="country" id="country" required>
                                                            <option value="">Country</option>
                                                            @foreach (App\Constant::Countries as $country)
                                                                <option value="{{ $country }}">{{ $country }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="state">State/Province/Region</label>
                                                        <input type="text" name="state" id="state" placeholder="Enter student's state">
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="address">Address</label>
                                                        <input type="text" name="address" id="address" placeholder="Enter student's Address">
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="city">City/Town</label>
                                                        <input type="text" name="city" id="city" placeholder="Enter student's city">
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="post_code">Postal Code</label>
                                                        <input type="text" name="post_code" id="post_code" placeholder="Enter student's postal code">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                             
                                    
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="single-form-part">
                                                <h5 class="form-title">Academic Information</h5>
                                                
                                        <h6>SSC or equivalent</h6   >
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="ssc_exam_name">Exam name</label>
                                                        <input name="ssc_exam_name" id="ssc_exam_name" type="text"
                                                            placeholder="Exam name [eg: SSC]" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="ssc_year">Passing Year</label>
                                                        <input name="ssc_year" id="ssc_year" type="text"
                                                            placeholder="Passing Year [eg: 2022]" required>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="cname2">Institue Name</label>
                                                        <input name="cname2" id="cname2" type="text"
                                                            placeholder="Current College" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="gpa2">Current GPA</label>
                                                        <input type="text" name="gpa2" id="gpa2"
                                                            placeholder="Current GPA" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="single-form-part">
                                        <h5 class="form-title">Financial Information</h5>

                                        <div class="single-input">
                                            <div class="single-input-item">
                                                <label for="income">Household Income</label>
                                                <select name="income" id="income" required>
                                                    <option value="">Select Income</option>
                                                    <option value="Less than $1k">Less than $1k</option>
                                                    <option value="Less than $2k">Less than $2k</option>
                                                    <option value="Less than $3k">Less than $3k</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="financial_aid">Applying for need-based financial
                                                    aid</label>
                                                <select name="financial_aid" id="financial_aid" required>
                                                    <option value="">Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-form-part">
                                        <h5 class="form-title">Agreement and Submission</h5>
                                        <p>By submitting this application, I confirm that all information provided is
                                            accurate and complete. I understand that any false
                                            information may result in the disqualification of my application.
                                        </p>
                                        <div class="single-input-item">
                                            <label for="sub">Application Submission:</label>
                                            <input type="file" name="file" id="sub" accept=".pdf,.doc">
                                        </div>
                                        <div class="d-flex align-items-center single-checkbox mt--20">
                                            <input type="checkbox" name="privacy_agreement" id="exampleCheck1">
                                            <label for="exampleCheck1">By submitting this form, you agree to the Unipix
                                                University Privacy Notice</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="rts-theme-btn primary with-arrow">Submit
                                        Application<span><i class="fa-thin fa-arrow-right"></i></span></button>

                                    <div id="form-messages-admission" class="mt-20"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app>
