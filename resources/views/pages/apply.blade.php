<x-app>
    <style>
        .card {
            border: 2px solid #F8FAFC;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            transition: border-color 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        .card input {
            display: none;
        }

        .card-content {
            padding: 1rem;
            text-align: center;
            background-color: #f9f9f9;
        }

        .card:hover {
            border-color: #E84545;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card input:checked+.card-content {
            border-color: #E84545;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
            background-color: #e6f7ff;

            color: #007bff;

        }


        .card p {
            font-size: 12px;

        }
    </style>
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
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label class="card">
                        <input type="radio" name="option" value="1">
                        <div class="card-content">
                            <h6 class="banner__content--sub">Undergraduate Programs</h6>
                            <p>The University of Global Village (UGV) offers diverse undergraduate programs focused on
                                critical thinking, creativity, and practical skills, preparing students for success in
                                arts, sciences, business, and technology.
                            </p>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="card">
                        <input type="radio" name="option" value="1">
                        <div class="card-content">
                            <h6 class="banner__content--sub">Postgraduate Programs </h6>
                            <p>The University of Global Village (UGV) offers advanced postgraduate programs designed to
                                enhance expertise, foster growth, and prepare students for excellence in their fields,
                                contributing to industry, academia, and society.
                            </p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="rts-page-content ">
                <div class="container">
                  
                    <div class="row sticky-coloum-wrap g-5 mt--45">
                        <div class="col-lg-12">
                            <div class="rts-ap-section">
                              
                                <div class="rts-application-form" >
                                        <div class="single-form-part">
                                            <h5 class="form-title">Personal Information</h5>
                                            <div class="single-input">
                                                <div class="single-input-item">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" name="fname" id="fname" placeholder="First name" required>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" name="lname" id="lname" placeholder="Last name" required>
                                                </div>
                                            </div>
                                            <div class="single-input">
                                                <div class="single-input-item">
                                                    <label for="email">Enter your mail</label>
                                                    <input type="email" name="email" id="email" placeholder="Enter your mail" required>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="phone">Enter Phone Number</label>
                                                    <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" required>
                                                </div>
                                            </div>
                                            <div class="single-input">
                                                <div class="single-input-item">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" name="dob" id="datepicker" placeholder="dd/mm/yy" required>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="gender">Gender</label>
                                                    <select name="gender" id="gender" required>
                                                        <option value="">Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-input">
                                                <div class="single-input-item">
                                                    <label for="country">Select your Country</label>
                                                    <input name="country" id="country" type="text" placeholder="Country" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-form-part">
                                            <h5 class="form-title">Academic Information</h5>
                                            <div class="single-input">
                                                <div class="single-input-item">
                                                    <label for="cname">College Name</label>
                                                    <input name="cname" id="cname" type="text" placeholder="College Name" required>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="gpa">Enter your GPA</label>
                                                    <input name="gpa" id="gpa" type="text" placeholder="Enter your GPA" required>
                                                </div>
                                            </div>
                                            <div class="single-input">
                                                <div class="single-input-item">
                                                    <label for="cname2">Current College Name</label>
                                                    <input name="cname2" id="cname2" type="text" placeholder="Current College" required>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="gpa2">Current GPA</label>
                                                    <input type="text" name="gpa2" id="gpa2" placeholder="Current GPA" required>
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
                                                    <label for="financial_aid">Applying for need-based financial aid</label>
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
                                            <p>By submitting this application, I confirm that all information provided is accurate and complete. I understand that any false
                                                information may result in the disqualification of my application.
                                            </p>
                                            <div class="single-input-item">
                                                <label for="sub">Application Submission:</label>
                                                <input type="file" name="file" id="sub" accept=".pdf,.doc">
                                            </div>
                                            <div class="d-flex align-items-center single-checkbox mt--20">
                                                <input type="checkbox" name="privacy_agreement" id="exampleCheck1">
                                                <label for="exampleCheck1">By submitting this form, you agree to the Unipix University Privacy Notice</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="rts-theme-btn primary with-arrow">Submit Application<span><i class="fa-thin fa-arrow-right"></i></span></button>
                                   
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
