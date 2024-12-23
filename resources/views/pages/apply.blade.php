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

            .card-body {
                padding: 20px;
            }

            .card .form-title {
                padding-bottom: 10px;
                border-bottom: 2px solid #444545b3;
            }
        </style>
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    @endpush

    @push('js')
        <!-- Load FilePond library -->
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- Turn all file input elements into ponds -->
    @endpush

    <div class="banner v__1" style="height: 40vh;align-items:center">
        <div class="container">
            <div class="col-sm-12">
                <div class="">

                    <div class="banner__wrapper--middle">
                        <div class="banner__content">
                            <div class="breadcrumb-content">

                                <h2 class="section-title text-center text-white" style="margin-top:80px">Application for
                                    International students
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
        <form action="{{route('apply.post')}}" enctype="multipart/form-data" method="post" x-data="{ application: 'Under Graduate' }">
        @csrf
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
                                                <select name="application" x-model="application" id="application">
                                                    <option value="">Select Graduate or Under Graduate</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="Under Graduate">Under Graduate</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="session">Session <span
                                                    class="text-danger">*</span></label>
                                                <select name="session" id="session" >
                                                    <option value="">Select session</option>
                                                    <option value="January">January</option>
                                                    <option value="June">June</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <div class="single-input-item">

                                                <label for="course">Course <span
                                                    class="text-danger">*</span></label>
                                                <select name="course" id="course" >
                                                    <option value="">Select course</option>
                                                    
                                                        <option x-show="application == 'Graduate'" value="Master of Arts in English">Master of Arts in
                                                            English</option>
                                                        <option x-show="application == 'Graduate'" value="Master in Business Administration">Master in
                                                            Business Administration</option>
                                                    
                                                        <option x-show="application == 'Under Graduate'" value="Bachelor of Arts in English">Bachelor of Arts in
                                                            English</option>
                                                        <option x-show="application == 'Under Graduate'" value="Bachelor Of Business Administration">Bachelor Of
                                                            Business Administration</option>
                                                        <option x-show="application == 'Under Graduate'"
                                                            value="Bachelor Of Science in Computer Science and Engineering">
                                                            Bachelor Of Science in
                                                            Computer Science and Engineering</option>
                                                        <option x-show="application == 'Under Graduate'"
                                                            value="Bachelor of Science in Electrical and Electronics Engineering">
                                                            Bachelor of Science in Electrical
                                                            and Electronics Engineering</option>
                                                        <option x-show="application == 'Under Graduate'" value="Bachelor of Science in Civil Engineering">
                                                            Bachelor of Science in
                                                            Civil Engineering</option>
                                                 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="form-title">Personal Information</h5>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="profileImage">Student's Image <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="image]" id="profileImage"
                                                            accept="image/png, image/jpeg, image/gif" >
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="name">Full Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name]" id="name"
                                                            placeholder="Enter student's full name" >
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="email">Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" name="email]" id="email"
                                                            placeholder="Enter your mail" >
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="contact_number">Contact Number <span
                                                                class="text-danger">*</span></label>
                                                        <small> ( with country code )</small>
                                                        <input type="tel" name="contact_number]" id="contact_number"
                                                            placeholder="Enter Student's Contact Number " >
                                                    </div>
                                                </div>
                                                <div class="single-input">

                                                    <div class="single-input-item">
                                                        <label for="gender">Gender <span
                                                                class="text-danger">*</span></label>
                                                        <select name="gender]" id="gender" >
                                                            <option value="">Gender</option>
                                                            @foreach (App\Constant::Gender as $gender)
                                                                <option value="{{ $gender }}">{{ $gender }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="gender">Blood Group <span
                                                                class="text-danger">*</span></label>
                                                        <select name="blood_group" id="blood" >
                                                            <option value="">Blood Group</option>
                                                            @foreach (App\Constant::BloodGroup as $group)
                                                                <option value="{{ $group }}">{{ $group }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="religion">Religion <span
                                                                class="text-danger">*</span></label>
                                                        <select name="religion" id="religion" >
                                                            <option value="">Religion</option>
                                                            @foreach (App\Constant::Religion as $religion)
                                                                <option value="{{ $religion }}">{{ $religion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="datepicker">Date of Birth <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="dob" id="datepicker"
                                                            placeholder="dd/mm/yy" >
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="passport">Passport Number <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="passport" id="passport"
                                                            placeholder="Enter student's passport number" >
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="country">Country</label>
                                                        <select name="country" id="country" >
                                                            <option value="">Country</option>
                                                            @foreach (App\Constant::Countries as $country)
                                                                <option value="{{ $country }}">{{ $country }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="state">State/Province/Region</label>
                                                        <input type="text" name="state" id="state"
                                                            placeholder="Enter student's state">
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="address">Address</label>
                                                        <input type="text" name="address" id="address"
                                                            placeholder="Enter student's Address">
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="city">City/Town</label>
                                                        <input type="text" name="city" id="city"
                                                            placeholder="Enter student's city">
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="post_code">Postal Code</label>
                                                        <input type="text" name="post_code" id="post_code"
                                                            placeholder="Enter student's postal code">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="form-title">Family Background</h5>
                                                <div class="single-form-part">
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_name">Father's name <span
                                                                    class="text-danger"> *</span></label>
                                                            <input name="father_name" id="father_name" type="text"
                                                                placeholder="Father's name" >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_name">Mother's name<span
                                                                    class="text-danger"> *</span></label>
                                                            <input name="mother_name" id="mother_name" type="text"
                                                                placeholder="Mother's name" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_occupation">Father's occupation</label>
                                                            <input name="father_occupation" id="father_occupation"
                                                                type="text" placeholder="Father's occupation"
                                                                >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_occupation">Mother's occupation</label>
                                                            <input name="mother_occupation" id="mother_occupation"
                                                                type="text" placeholder="Mother's occupation" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_passport">Father's Passport
                                                                Number</label>
                                                            <input name="father_passport" id="father_passport"
                                                                type="text" placeholder="Father's Passport Number"
                                                                >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_passport">Mother's Passport
                                                                Number</label>
                                                            <input name="mother_passport" id="mother_passport"
                                                                type="text" placeholder="Mother's Passport Number"
                                                                >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="single-form-part">
                                                    <h5 class="form-title">Academic Information</h5>

                                                    <h5>SSC or Equivalent</h5>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_exam_name">Exam name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_exam_name" id="ssc_exam_name"
                                                                type="text" placeholder="Exam name [eg: SSC]"
                                                                >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_year">Passing Year <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_year" id="ssc_year" type="text"
                                                                placeholder="Passing Year [eg: 2022]" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_inistitute">Institue Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_inistitute" id="ssc_inistitute"
                                                                type="text" placeholder="Institute Name" >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="gpa2">Grade / Marks / GPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="ssc_gpa" id="ssc_gpa"
                                                                placeholder="Grade / Marks / GPA" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_ministry">Ministry of education <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="ssc_ministry"
                                                                id="ssc_ministry" placeholder="Ministry of education"
                                                                >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file" name="attachment[ssc_academic_transcript]"
                                                                id="ssc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif" >
                                                        </div>
                                                    </div>
                                                    <h5>HSC or Equivalent</h5>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="hsc_exam_name">Exam name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_exam_name" id="hsc_exam_name"
                                                                type="text" placeholder="Exam name [eg: HSC]"
                                                                >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_year">Passing Year <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_year" id="hsc_year" type="text"
                                                                placeholder="Passing Year [eg: 2022]" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="hsc_inistitute">Institue Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_inistitute" id="hsc_inistitute"
                                                                type="text" placeholder="Institute Name" >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="gpa2">Grade / Marks / GPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="hsc_gpa" id="hsc_gpa"
                                                                placeholder="Grade / Marks / GPA" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_ministry">Ministry of education <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="hsc_ministry"
                                                                id="hsc_ministry" placeholder="Ministry of education"
                                                                >
                                                        </div>

                                                        <div class="single-input-item">
                                                            <label for="hsc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file" name="attachment[hsc_academic_transcript]"
                                                                id="hsc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf" >
                                                        </div>
                                                    </div>
                                                    <h5 x-show="application == 'Graduate'">Undergraduate Education
                                                    </h5>
                                                    <div class="single-input" x-show="application == 'Graduate'">
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_course">Degree Title <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="undergraduate_course"
                                                                id="undergraduate_course" type="text"
                                                                placeholder="Degree Title (e.g., Bachelor of Science in Computer Science)"
                                                                >
                                                        </div>

                                                    </div>
                                                    <div class="single-input" x-show="application == 'Graduate'">
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_inistitute">Institue Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="undergraduate_inistitute"
                                                                id="undergraduate_inistitute" type="text"
                                                                placeholder="Institute Name" >
                                                        </div>
                                                        <div class="single-input-item"
                                                            x-show="application == 'Graduate'">
                                                            <label for="undergraduate_inistitute_country">Country of
                                                                Institue <span class="text-danger">*</span></label>
                                                            <select name="undergraduate_inistitute_country"
                                                                id="undergraduate_inistitute_country" >
                                                                <option value="">Country of Institue</option>
                                                                @foreach (App\Constant::Countries as $country)
                                                                    <option value="{{ $country }}">
                                                                        {{ $country }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="single-input" x-show="application == 'Graduate'">
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_year">Year of Graduation <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="undergraduate_year"
                                                                id="undergraduate_year"
                                                                placeholder="Year of Graduation" >
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_cgpa">CGPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="undergraduate_cgpa"
                                                                id="undergraduate_cgpa"
                                                                placeholder="Undergraduate CGPA" >
                                                        </div>
                                                    </div>
                                                    <div class="single-input" x-show="application == 'Graduate'">
                                                        <div class="single-input-item">
                                                            <label for="hsc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file"
                                                                name="attachment[undergraduate_academic_transcript]"
                                                                id="hsc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf" >
                                                        </div>
                                                        <div class="single-input-item"
                                                            x-show="application == 'Graduate'">
                                                            <label for="undergraduate_certificate">Certificate/Degree
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file" name="attachment[undergraduate_certificate]"
                                                                id="undergraduate_certificate"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf" >
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="form-title">Attachments</h5>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="police_verification">Police verification <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[police_verification]" id="police_verification"
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf"
                                                            >
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="passport_copy">Passport <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[passport]" id="passport_copy"
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf"
                                                            >
                                                    </div>

                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="statement_of_purpose">Statement of Purpose (SOP)
                                                            <span class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[statement_of_purpose]"
                                                            id="statement_of_purpose"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                            >
                                                    </div>
                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="letter_of_recomandation_1">Letter of Recomandation <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[letter_of_recomandation_1]"
                                                            id="letter_of_recomandation_1"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="letter_of_recomandation_2">Letter of Recomandation <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[letter_of_recomandation_2]"
                                                            id="letter_of_recomandation_2"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                            >
                                                    </div>
                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="others">Others</label>
                                                        <small>(multiple upload supported)</small>
                                                        <input type="file" name="attachment[others]"
                                                            id="others" multiple
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                            >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <br>



                                    <div class="single-form-part">
                                        <h5 class="form-title">Agreement and Submission</h5>
                                        <p>By submitting this application, I confirm that all information provided is
                                            accurate and complete. I understand that any false
                                            information may result in the disqualification of my application.
                                        </p>


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
