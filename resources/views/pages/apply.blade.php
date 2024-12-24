<x-app>
    @push('css')
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/25.2.0/build/css/intlTelInput.min.css"
            integrity="sha512-X3pJz9m4oT4uHCYS6UjxVdWk1yxSJJIJOJMIkf7TjPpb1BzugjiFyHu7WsXQvMMMZTnGUA9Q/GyxxCWNDZpdHA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .rts-ap-section .rts-application-form .single-form-part .single-input-item label {
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/25.2.0/build/js/intlTelInput.min.js"
            integrity="sha512-H0skyHW3SNpqlUsVKCM9+5ufNLLipKqvFeGapbvGlgv9RV6KulEDsRNZ7wMV7R0Hs8nMxalbJAF+d+NmNdYVYA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const phoneInput = document.querySelectorAll("input[type='tel']");
                [...phoneInput].forEach((el) => {
                    let iti = intlTelInput(el, {
                        initialCountry: "auto",
                        separateDialCode: true,
                        geoIpLookup: function(callback) {
                            fetch(
                                'https://ipinfo.io/json?token=<YOUR_TOKEN>') // Replace <YOUR_TOKEN> with a valid token
                                .then(response => response.json())
                                .then(data => callback(data.country))
                                .catch(() => callback('US'));
                        },
                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js", // For formatting
                    });

                    // Set the value in the form submission
                    const form = el.closest('form');
                    form.addEventListener('submit', function() {
                        el.value = iti.getNumber(); // Set full international number
                    });


                });
                // Initialize intl-tel-input
            });
        </script>

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
                                                <select name="application" x-model="application" id="application">
                                                    <option value="">Select Postgraduate or Undergraduate</option>
                                                    <option value="Postgraduate">Postgraduate</option>
                                                    <option value="Undergraduate">Undergraduate</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="session">Session <span class="text-danger">*</span></label>
                                                <select name="session" id="session">
                                                    <option value="">Select session</option>
                                                    <option value="June-2025">June-2025</option>
                                                    <option value="January-2026">January-2026</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <div class="single-input-item">

                                                <label for="course">Course <span class="text-danger">*</span></label>
                                                <select name="course" id="course">
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
                                                    <x-form.input type="file" label="Student's Image"
                                                        id="profileImage" name="photo"
                                                        placeholder="Enter student's full name"
                                                        accept="image/png, image/jpeg, image/gif" />
                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="text" label="Full Name" id="name"
                                                        name="name" placeholder="Enter student's full name" />
                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="email" label="Email" id="email"
                                                        name="email" placeholder="Enter your E-mail" />
                                                    <x-form.input type="tel"
                                                        label="Contact Number (with country code)" id="contact_number"
                                                        name="contact_number" />


                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="select" label="Gender" id="gender"
                                                        name="gender" :options="App\Constant::Gender" />
                                                    <x-form.input type="select" label="Blood Group" id="blood"
                                                        name="blood_group" :options="App\Constant::BloodGroup" />
                                                    <x-form.input type="select" label="Religion" id="religion"
                                                        name="religion" :options="App\Constant::Religion" />
                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="date" label="Date of Birth"
                                                        id="datepicker" placeholder="dd/mm/yy" name="dob" />
                                                    <x-form.input type="email" label="Passport Number"
                                                        id="passport" name="passport"
                                                        placeholder="Enter student's passport number" />
                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="select" label="Country" id="country"
                                                        name="country" :options="App\Constant::Countries" />
                                                    <x-form.input type="text" label="State/Province/Region"
                                                        id="state" name="state"
                                                        placeholder="Enter student's state" />
                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="text" label="City/Town" id="city"
                                                        name="city" placeholder="Enter student's city" />
                                                    <x-form.input type="text" label="Postal Code" id="post_code"
                                                        name="post_code" placeholder="Enter student's postal code" />
                                                    <x-form.input type="text" label="Address" id="address"
                                                        name="address" placeholder="Enter student's Address" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="form-title">Family Background</h5>
                                                <div class="single-form-part">
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Father's name" id="father_name"
                                                        name="father_name" placeholder="Father's name" />
                                                    
                                                        <x-form.input type="text" label="Mother's name" id="mother_name"
                                                        name="mother_name" placeholder="Mother's name" />
                                                    
                                                       
                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Father's occupation" id="father_occupation"
                                                        name="father_occupation" placeholder="Father's occupation" />

                                                        <x-form.input type="text" label="Mother's occupation" id="mother_occupation"
                                                        name="mother_occupation" placeholder="Mother's occupation" />
                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="tel" label="Father's Contact" id="father_contact_number"
                                                        name="father_contact_number" placeholder="Father's Contact Number" />
                                                        
                                                        <x-form.input type="tel" label="Mother's Contact" id="mother_contact_number"
                                                        name="mother_contact_number" placeholder="Mother's Contact Number"  />
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_email">Father's Email Address <span
                                                                    class="text-danger">*</span>
                                                            </label>
                                                            <input name="father_email" id="father_email"
                                                                value="{{ old('father_email') }}" type="text"
                                                                placeholder="Father's Email Address">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_email">Mother's Email Address <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="mother_email" id="mother_email"
                                                                value="{{ old('mother_email') }}" type="text"
                                                                placeholder="Mother's Email Address">
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="father_passport">Father's Passport
                                                                Number <span class="text-danger">*</span></label>
                                                            <input name="father_passport" id="father_passport"
                                                                value="{{ old('father_passport') }}" type="text"
                                                                placeholder="Father's Passport Number">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="mother_passport">Mother's Passport
                                                                Number <span class="text-danger">*</span></label>
                                                            <input name="mother_passport" id="mother_passport"
                                                                value="{{ old('mother_passport') }}" type="text"
                                                                placeholder="Mother's Passport Number">
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
                                                                placeholder="Examination Name [eg: SSC]">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_group">Subject Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_group" id="ssc_group" type="text"
                                                                value="{{ old('ssc_group') }}"
                                                                placeholder="Subject Name [eg: Science]">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_year">Passing Year <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_year" id="ssc_year" type="text"
                                                                value="{{ old('ssc_year') }}"
                                                                placeholder="Passing Year [eg: 2022]">
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_inistitute">Institute Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="ssc_inistitute" id="ssc_inistitute"
                                                                value="{{ old('ssc_inistitute') }}" type="text"
                                                                placeholder="Institute Name">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="gpa2">Grade / Marks / GPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="ssc_gpa" id="ssc_gpa"
                                                                value="{{ old('ssc_gpa') }}"
                                                                placeholder="Grade / Marks / GPA">
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_ministry">Ministry of education <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="ssc_ministry"
                                                                id="ssc_ministry" placeholder="Ministry of education"
                                                                value="{{ old('ssc_ministry') }}">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span><span
                                                                    class="fs-5"> (must be 512kb or
                                                                    less)</span></label>
                                                            <input type="file"
                                                                name="attachment[ssc_academic_transcript]"
                                                                id="ssc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="ssc_certificate">Degree Certificate
                                                                <span class="text-danger">*</span><span
                                                                    class="fs-5"> (must be 512kb or
                                                                    less)</span></label>
                                                            <input type="file" name="attachment[ssc_certificate]"
                                                                id="ssc_certificate"
                                                                accept="image/png, image/jpeg, image/gif">
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
                                                                value="{{ old('hsc_exam_name') }}">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_group">Subject Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_group" id="hsc_group" type="text"
                                                                value="{{ old('hsc_group') }}"
                                                                placeholder="Subject Name [eg: Science]">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_year">Passing Year <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_year" id="hsc_year" type="text"
                                                                value="{{ old('hsc_year') }}"
                                                                placeholder="Passing Year [eg: 2022]">
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="hsc_inistitute">Institute Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input name="hsc_inistitute" id="hsc_inistitute"
                                                                value="{{ old('hsc_inistitute') }}" type="text"
                                                                placeholder="Institute Name">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="gpa2">Grade / Marks / GPA <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="hsc_gpa" id="hsc_gpa"
                                                                value="{{ old('hsc_gpa') }}"
                                                                placeholder="Grade / Marks / GPA">
                                                        </div>
                                                    </div>
                                                    <div class="single-input">
                                                        <div class="single-input-item">
                                                            <label for="ssc_ministry">Ministry of education <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="hsc_ministry"
                                                                value="{{ old('hsc_ministry') }}" id="hsc_ministry"
                                                                placeholder="Ministry of education">
                                                        </div>

                                                        <div class="single-input-item">
                                                            <label for="hsc_academic_transcript">Academic Transcript
                                                                <span class="text-danger">*</span><span
                                                                    class="fs-5"> (must be 512kb or
                                                                    less)</span></label>
                                                            <input type="file"
                                                                name="attachment[hsc_academic_transcript]"
                                                                id="hsc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="hsc_certificate">Degree Certificate
                                                                <span class="text-danger">*</span><span
                                                                    class="fs-5"> (must be 512kb or
                                                                    less)</span></label>
                                                            <input type="file" name="attachment[hsc_certificate]"
                                                                id="hsc_certificate"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf">
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
                                                                <span class="text-danger">*</span><span
                                                                    class="fs-5"> (must be 512kb or
                                                                    less)</span></label>
                                                            <input type="file"
                                                                name="attachment[undergraduate_academic_transcript]"
                                                                id="hsc_academic_transcript"
                                                                accept="image/png, image/jpeg, image/gif, .doc, .docx, .pdf">
                                                        </div>
                                                        <div class="single-input-item"
                                                            x-show="application == 'Postgraduate'">
                                                            <label for="undergraduate_certificate">Degree Certificate
                                                                <span class="text-danger">*</span><span
                                                                    class="fs-5"> (must be 512kb or
                                                                    less)</span></label>
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
                                                        <label for="police_verification">Police verification <span
                                                                class="fs-5"> (must be 512kb or less)</span></label>
                                                        <input type="file" name="attachment[police_verification]"
                                                            id="police_verification"
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf">
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="medical_examination">Medical examination <span
                                                                 class="text-danger">*</span></label>
                                                        <input type="file" name="attachment[medical_examination]"
                                                            id="medical_examination" required
                                                        accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf">
                                                        <p> <a style="text-decoration: underline" class="text-danger"
                                                                href="{{ asset('assets/Physical Examination Form.pdf') }}">Download
                                                                the format from here</a>, complete it, and then upload
                                                            it.</p>
                                                    </div>

                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="passport_copy">Passport <span
                                                                class="text-danger">*</span><span class="fs-5">
                                                                (must be 512kb or less)</span></label>
                                                        <input type="file" name="attachment[passport]"
                                                            id="passport_copy"
                                                            accept="image/png, image/jpeg, image/gif .doc, .docx, .pdf">
                                                    </div>

                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="statement_of_purpose">Statement of Purpose (SOP)
                                                            <span class="text-danger" 
                                                                x-show="application == 'Postgraduate'">*</span></label>
                                                        <input type="file" name="attachment[statement_of_purpose]"
                                                            id="statement_of_purpose"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf">
                                                    </div>
                                                </div>

                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="letter_of_recomandation_1">Letter of Recommendation
                                                            <span class="text-danger"
                                                            class="fs-5">*</span> <span class="fs-5"> (must be 512kb or less)</span></label>
                                                        <input type="file"
                                                            name="attachment[letter_of_recomandation_1]"
                                                            id="letter_of_recomandation_1"
                                                            accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf">
                                                    </div>
                                                </div>
                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                            <label for="letter_of_recomandation_2">Letter of
                                                                Recommendation<span class="fs-5"> (must be 512kb or
                                                                    less)</span>
                                                            </label>
                                                            <input type="file"
                                                                name="attachment[letter_of_recomandation_2]"
                                                                id="letter_of_recomandation_2"
                                                                accept="image/png, image/jpeg, image/gif ,.doc, .docx, .pdf">
                                                    </div>
                                                </div>



                                                <div class="single-input">
                                                    <div class="single-input-item">
                                                        <label for="others">Others</label>
                                                        <small>(multiple upload supported) <span class="fs-5"> (must
                                                                be 512kb or less)</span></small>
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
