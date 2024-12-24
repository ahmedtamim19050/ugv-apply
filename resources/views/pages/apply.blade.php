<x-app>
    @push('css')
        <style>
            .rts-ap-section .rts-application-form .single-form-part .single-input-item label{
                text-transform: none;
            }
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('apply.save') }}" enctype="multipart/form-data" method="post" x-data="{ application: 'Undergraduate' }">
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
                                                <label class="form-title">Application for <span
                                                        class="text-danger">*</span></label>
                                                <select name="application" x-model="application" id="application"
                                                    required>
                                                    <option value="">Select Postgraduate or Undergraduate</option>
                                                    <option value="Postgraduate">Postgraduate</option>
                                                    <option value="Undergraduate">Undergraduate</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="session">Session <span class="text-danger">*</span></label>
                                                <select name="session" id="session" required>
                                                    <option value="">Select session</option>
                                                    <option value="June-2025">June-2025</option>
                                                    <option value="January-2026">January-2026</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <div class="single-input-item">

                                                <label for="course">Course <span class="text-danger">*</span></label>
                                                <select name="course" id="course" required>
                                                    <option value="">Select course</option>

                                                    <option x-show="application == 'Postgraduate'"
                                                        value="Master of Arts in English">Master of Arts in
                                                        English</option>
                                                    <option x-show="application == 'Postgraduate'"
                                                        value="Master in Business Administration">Master in
                                                        Business Administration (MBA)</option>

                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Arts in English">Bachelor of Arts in
                                                        English</option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Business Administration">Bachelor of
                                                        Business Administration (BBA)</option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Science in Computer Science and Engineering">
                                                        Bachelor of Science in
                                                        Computer Science and Engineering</option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Science in Electrical and Electronics Engineering">
                                                        Bachelor of Science in Electrical
                                                        and Electronics Engineering</option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Science in Civil Engineering">
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
                                                        <input type="file" name="photo" id="profileImage"
                                                            accept="image/png, image/jpeg, image/gif" required>
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="name">Full Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name" id="name"
                                                            value="{{ old('name') }}"
                                                            placeholder="Enter student's full name" required>

                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="email">Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" name="email" value="{{ old('email') }}"
                                                            id="email" placeholder="Enter your mail" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="contact_number">Contact Number <span
                                                                class="text-danger">*</span></label>
                                                        <small> ( with country code )</small>
                                                        <input type="tel" name="contact_number"
                                                            value="{{ old('contact_number') }}" id="contact_number"
                                                            placeholder="Enter Student's Contact Number " required>
                                                    </div>
                                                </div>
                                                <div class="single-input">

                                                    <div class="single-input-item">
                                                        <label for="gender">Gender <span
                                                                class="text-danger">*</span></label>
                                                        <select name="gender" id="gender" required>
                                                            <option value="">Gender</option>
                                                            @foreach (App\Constant::Gender as $gender)
                                                                <option value="{{ $gender }}">{{ $gender }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="gender">Blood Group </label>
                                                        <select name="blood_group" id="blood">
                                                            <option value="">Blood Group</option>
                                                            @foreach (App\Constant::BloodGroup as $group)
                                                                <option value="{{ $group }}">{{ $group }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="religion">Religion </label>
                                                        <select name="religion" id="religion">
                                                            <option value="">Religion</option>
                                                            @foreach (App\Constant::Religion as $religion)
                                                                <option value="{{ $religion }}">
                                                                    {{ $religion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="datepicker">Date of Birth <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" name="dob" id="datepicker"
                                                            value="{{ old('dob') }}" placeholder="dd/mm/yy"
                                                            required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="passport">Passport Number <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="passport" id="passport"
                                                            placeholder="Enter student's passport number" required>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="country">Country <span
                                                            class="text-danger">*</span></label>
                                                        <select name="country" id="country" required>
                                                            <option value="">Country</option>
                                                            @foreach (App\Constant::Countries as $country)
                                                                <option value="{{ $country }}">
                                                                    {{ $country }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="state">State/Province/Region <span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" name="state" id="state"
                                                            value="{{ old('state') }}"
                                                            placeholder="Enter student's state" required>
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    
                                                    <div class="single-input-item">
                                                        <label for="city">City/Town <span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" name="city" id="city"
                                                            value="{{ old('city') }}"
                                                            placeholder="Enter student's city" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="post_code">Postal Code <span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" name="post_code" id="post_code"
                                                            value="{{ old('post_code') }}"
                                                            placeholder="Enter student's postal code" required>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="address">Address <span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" name="address" id="address"
                                                            value="{{ old('address') }}"
                                                            placeholder="Enter student's Address" required>
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
                                                                value="{{ old('father_name') }}"
                                                                placeholder="Father's name" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_name">Mother's name<span
                                                                    class="text-danger"> *</span></label>
                                                            <input name="mother_name" id="mother_name" type="text"
                                                                value="{{ old('mother_name') }}"
                                                                placeholder="Mother's name" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_occupation">Father's occupation <span
                                                                class="text-danger">*</span></label>
                                                            <input name="father_occupation" id="father_occupation"
                                                                value="{{ old('father_occupation') }}" type="text"
                                                                placeholder="Father's occupation" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_occupation">Mother's occupation <span
                                                                class="text-danger">*</span></label>
                                                            <input name="mother_occupation" id="mother_occupation"
                                                                value="{{ old('mother_occupation') }}" type="text"
                                                                placeholder="Mother's occupation" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_contact_number">Father's Contact
                                                                Number <span
                                                                class="text-danger">*</span></label>
                                                            <input name="father_contact_number"
                                                                id="father_contact_number" type="text"
                                                                value="{{ old('father_contact_number') }}"
                                                                placeholder="Father's Contact Number" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_contact_number">Mother's Contact
                                                                Number <span
                                                                class="text-danger">*</span></label>
                                                            <input name="mother_contact_number"
                                                                id="mother_contact_number" type="text"
                                                                value="{{ old('mother_contact_number') }}"
                                                                placeholder="Mother's Passport Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_email">Father's Email Address <span
                                                                class="text-danger">*</span>
                                                            </label>
                                                            <input name="father_email" id="father_email"
                                                                value="{{ old('father_email') }}" type="text"
                                                                placeholder="Father's Email Address" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_email">Mother's Email Address <span
                                                                class="text-danger">*</span></label>
                                                            <input name="mother_email" id="mother_email"
                                                                value="{{ old('mother_email') }}" type="text"
                                                                placeholder="Mother's Email Address" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_passport">Father's Passport
                                                                Number <span
                                                                class="text-danger">*</span></label>
                                                            <input name="father_passport" id="father_passport"
                                                                value="{{ old('father_passport') }}" type="text"
                                                                placeholder="Father's Passport Number" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_passport">Mother's Passport
                                                                Number <span
                                                                class="text-danger">*</span></label>
                                                            <input name="mother_passport" id="mother_passport"
                                                                value="{{ old('mother_passport') }}" type="text"
                                                                placeholder="Mother's Passport Number" required>
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
                                                            <label for="ssc_exam_name">Examination Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_exam_name" id="ssc_exam_name"
                                                                value="{{ old('ssc_exam_name') }}" type="text"
                                                                placeholder="Examination Name [eg: SSC]" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_group">Subject Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_group" id="ssc_group" type="text"
                                                                value="{{ old('ssc_group') }}"
                                                                placeholder="Subject Name [eg: Science]" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_year">Passing Year <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_year" id="ssc_year" type="text"
                                                                value="{{ old('ssc_year') }}"
                                                                placeholder="Passing Year [eg: 2022]" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_inistitute">Institute Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_inistitute" id="ssc_inistitute"
                                                                value="{{ old('ssc_inistitute') }}" type="text"
                                                                placeholder="Institute Name" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="gpa2">Grade / Marks / GPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="ssc_gpa" id="ssc_gpa"
                                                                value="{{ old('ssc_gpa') }}"
                                                                placeholder="Grade / Marks / GPA" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_ministry">Ministry of education <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="ssc_ministry"
                                                                id="ssc_ministry" placeholder="Ministry of education"
                                                                value="{{ old('ssc_ministry') }}" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file"
                                                                name="attachment[ssc_academic_transcript]"
                                                                id="ssc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_certificate">Degree Certificate
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file" name="attachment[ssc_certificate]"
                                                                id="ssc_certificate"
                                                                accept="image/png, image/jpeg, image/gif" required>
                                                        </div>
                                                    </div>
                                                    <h5>HSC or Equivalent</h5>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="hsc_exam_name">Examination Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_exam_name" id="hsc_exam_name"
                                                                type="text"
                                                                placeholder="Examination Name [eg: Science]"
                                                                value="{{ old('hsc_exam_name') }}" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_group">Subject Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_group" id="hsc_group" type="text"
                                                                value="{{ old('hsc_group') }}"
                                                                placeholder="Subject Name [eg: Science]" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_year">Passing Year <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_year" id="hsc_year" type="text"
                                                                value="{{ old('hsc_year') }}"
                                                                placeholder="Passing Year [eg: 2022]" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="hsc_inistitute">Institute Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_inistitute" id="hsc_inistitute"
                                                                value="{{ old('hsc_inistitute') }}" type="text"
                                                                placeholder="Institute Name" required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="gpa2">Grade / Marks / GPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="hsc_gpa" id="hsc_gpa"
                                                                value="{{ old('hsc_gpa') }}"
                                                                placeholder="Grade / Marks / GPA" required>
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_ministry">Ministry of education <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="hsc_ministry"
                                                                value="{{ old('hsc_ministry') }}" id="hsc_ministry"
                                                                placeholder="Ministry of education" required>
                                                        </div>

                                                        <div class="single-input-item">
                                                            <label for="hsc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file"
                                                                name="attachment[hsc_academic_transcript]"
                                                                id="hsc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf"
                                                                required>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_certificate">Degree Certificate
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file" name="attachment[hsc_certificate]"
                                                                id="hsc_certificate"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <h5 x-show="application == 'Postgraduate'">Undergraduate Education
                                                    </h5>
                                                    <div class="single-input" x-show="application == 'Postgraduate'">
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_course">Degree Title <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="undergraduate_course"
                                                                id="undergraduate_course" type="text"
                                                                value="{{ old('undergraduate_course') }}"
                                                                placeholder="Degree Title (e.g., Bachelor of Science in Computer Science and Engineering)">
                                                        </div>

                                                    </div>
                                                    <div class="single-input" x-show="application == 'Postgraduate'">
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_inistitute">Institute Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="undergraduate_inistitute"
                                                                id="undergraduate_inistitute" type="text"
                                                                value="{{ old('undergraduate_inistitute') }}"
                                                                placeholder="Institute Name">
                                                        </div>
                                                        <div class="single-input-item"
                                                            x-show="application == 'Postgraduate'">
                                                            <label for="undergraduate_inistitute_country">Country of
                                                                Institute <span class="text-danger">*</span></label>
                                                            <select name="undergraduate_inistitute_country"
                                                                id="undergraduate_inistitute_country">
                                                                <option value="">Country of Institute</option>
                                                                @foreach (App\Constant::Countries as $country)
                                                                    <option value="{{ $country }}">
                                                                        {{ $country }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="single-input" x-show="application == 'Postgraduate'">
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_year">Year of Graduation <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="undergraduate_year"
                                                                id="undergraduate_year"
                                                                value="{{ old('undergraduate_year') }}"
                                                                placeholder="Year of Graduation">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="undergraduate_cgpa">CGPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="undergraduate_cgpa"
                                                                id="undergraduate_cgpa"
                                                                value="{{ old('undergraduate_cgpa') }}"
                                                                placeholder="Undergraduate CGPA">
                                                        </div>
                                                    </div>
                                                    <div class="single-input" x-show="application == 'Postgraduate'">
                                                        <div class="single-input-item">
                                                            <label for="hsc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file"
                                                                name="attachment[undergraduate_academic_transcript]"
                                                                id="hsc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf">
                                                        </div>
                                                        <div class="single-input-item"
                                                            x-show="application == 'Postgraduate'">
                                                            <label for="undergraduate_certificate">Degree Certificate
                                                                <span class="text-danger">*</span></label>
                                                            <input type="file"
                                                                name="attachment[undergraduate_certificate]"
                                                                id="undergraduate_certificate"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf">
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
                                                        <label for="police_verification">Police verification </label>
                                                        <input type="file" name="attachment[police_verification]"
                                                            id="police_verification"
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf"
                                                            >
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="medical_examination">Medical examination <span class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[medical_examination]"
                                                            id="medical_examination" required
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf"
                                                            >
                                                            <p>  <a style="text-decoration: underline" class="text-danger" href="{{asset('assets/Physical Examination Form.pdf')}}">Download the format from here</a>, complete it, and then upload it.</p>
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="passport_copy">Passport <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[passport]"
                                                            id="passport_copy"
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf"
                                                            required>
                                                    </div>

                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="statement_of_purpose">Statement of Purpose (SOP)
                                                            <span class="text-danger" x-show="application == 'Postgraduate'">*</span></label>
                                                        <input type="file" name="attachment[statement_of_purpose]"
                                                            id="statement_of_purpose"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                            >
                                                    </div>
                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="letter_of_recomandation_1">Letter of Recommendation
                                                            <span class="text-danger" x-show="application == 'Postgraduate'">*</span></label>
                                                        <input type="file"
                                                            name="attachment[letter_of_recomandation_1]"
                                                            id="letter_of_recomandation_1"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                                >
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="letter_of_recomandation_2">Letter of Recommendation
                                                            </label>
                                                        <input type="file"
                                                            name="attachment[letter_of_recomandation_2]"
                                                            id="letter_of_recomandation_2"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf"
                                                            >
                                                    </div>
                                                </div>



                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="others">Others</label>
                                                        <small>(multiple upload supported)</small>
                                                        <input type="file" name="attachment[others][]"
                                                            id="others" multiple
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf">
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
                                    <div class="text-end"><button type="submit"
                                            class="rts-theme-btn primary with-arrow">Submit
                                            Application<span><i class="fa-thin fa-arrow-right"></i></span></button>
                                    </div>

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
