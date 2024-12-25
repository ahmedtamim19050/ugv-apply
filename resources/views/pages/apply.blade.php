<x-app>
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
            integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        </script>
        <script>
            $(document).ready(function() {


                const phoneInputs = document.querySelectorAll("input[type='tel']");
                [...phoneInputs].forEach((el) => {
                    var iti = intlTelInput(el, {
                        separateDialCode: true,
                        hiddenInput: $(el).attr('name'),
                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // just for formatting/placeholders etc
                    });

                })





            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('applicationForm');
                const submitBtn = document.getElementById('submitBtn');

                form.addEventListener('submit', function(event) {
                    // Prevent form submission
                    event.preventDefault();

                    // Show SweetAlert confirmation popup
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Please review your application before submitting.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, submit it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit the form after confirmation
                            form.submit();
                        }
                    });
                });
            });
        </script>


        <!-- Load FilePond library -->
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- Turn all file input elements into ponds -->
    @endpush

    <div class="banner v__1" style="height: 60vh;align-items:center">
        <div class="container">
            <div class="col-sm-12">
                <div class="">

                    <div class="banner__wrapper--middle">
                        <div class="banner__content ">
                            <div class="breadcrumb-content text-center">
                                <img src="{{ asset('assets/UGV-Logo-01.png') }}" style="margin-top:110px;width:500px;"
                                    alt="">
                                <h2 class="section-title text-center text-white mt-3">Application for
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

        <form id="applicationForm" action="{{ route('apply.save') }}" enctype="multipart/form-data" method="post"
            x-data="{ application: 'Undergraduate' }">
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
                                                <select class="@error('application') border border-danger @enderror"
                                                    name="application" x-model="application" id="application">
                                                    <option value=""
                                                        {{ old('application') == '' ? 'selected' : '' }}>Select
                                                        Postgraduate or Undergraduate</option>
                                                    <option value="Postgraduate"
                                                        {{ old('application') == 'Postgraduate' ? 'selected' : '' }}>
                                                        Postgraduate</option>
                                                    <option value="Undergraduate"
                                                        {{ old('application') == 'Undergraduate' ? 'selected' : '' }}>
                                                        Undergraduate</option>
                                                </select>
                                                @error('application')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>


                                            <x-form.input type="select" name="session" id="session" label="Session"
                                                :options="['June-2025', 'January-2026']" />

                                        </div>
                                        <div class="single-input">
                                            <div class="single-input-item">
                                                <label for="course">Course <span class="text-danger">*</span></label>
                                                <select class="@error('course') border border-danger @enderror"
                                                    name="course" id="course">
                                                    <option value="" {{ old('course') == '' ? 'selected' : '' }}>
                                                        Select course</option>

                                                    <option x-show="application == 'Postgraduate'"
                                                        value="Master of Arts in English"
                                                        {{ old('course') == 'Master of Arts in English' ? 'selected' : '' }}>
                                                        Master of Arts in English
                                                    </option>
                                                    <option x-show="application == 'Postgraduate'"
                                                        value="Master in Business Administration"
                                                        {{ old('course') == 'Master in Business Administration' ? 'selected' : '' }}>
                                                        Master in Business Administration (MBA)
                                                    </option>

                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Arts in English"
                                                        {{ old('course') == 'Bachelor of Arts in English' ? 'selected' : '' }}>
                                                        Bachelor of Arts in English
                                                    </option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Business Administration"
                                                        {{ old('course') == 'Bachelor of Business Administration' ? 'selected' : '' }}>
                                                        Bachelor of Business Administration (BBA)
                                                    </option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Science in Computer Science and Engineering"
                                                        {{ old('course') == 'Bachelor of Science in Computer Science and Engineering' ? 'selected' : '' }}>
                                                        Bachelor of Science in Computer Science and Engineering
                                                    </option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Science in Electrical and Electronics Engineering"
                                                        {{ old('course') == 'Bachelor of Science in Electrical and Electronics Engineering' ? 'selected' : '' }}>
                                                        Bachelor of Science in Electrical and Electronics Engineering
                                                    </option>
                                                    <option x-show="application == 'Undergraduate'"
                                                        value="Bachelor of Science in Civil Engineering"
                                                        {{ old('course') == 'Bachelor of Science in Civil Engineering' ? 'selected' : '' }}>
                                                        Bachelor of Science in Civil Engineering
                                                    </option>
                                                </select>
                                                @error('course')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
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
                                                        name="blood_group" :options="App\Constant::BloodGroup" :required="false" />
                                                    <x-form.input type="select" label="Religion" id="religion"
                                                        name="religion" :options="App\Constant::Religion" :required="false" />
                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="date" label="Date of Birth"
                                                        id="datepicker" placeholder="dd/mm/yy" name="dob" />
                                                    <x-form.input type="text" label="Passport Number"
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
                                                        <x-form.input type="text" label="Father's name"
                                                            id="father_name" name="father_name"
                                                            placeholder="Father's name" />

                                                        <x-form.input type="text" label="Mother's name"
                                                            id="mother_name" name="mother_name"
                                                            placeholder="Mother's name" />


                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Father's occupation"
                                                            id="father_occupation" name="father_occupation"
                                                            placeholder="Father's occupation" />

                                                        <x-form.input type="text" label="Mother's occupation"
                                                            id="mother_occupation" name="mother_occupation"
                                                            placeholder="Mother's occupation" />
                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="tel" label="Father's Contact"
                                                            id="father_contact_number" name="father_contact_number"
                                                            placeholder="Father's Contact Number" />

                                                        <x-form.input type="tel" label="Mother's Contact"
                                                            id="mother_contact_number" name="mother_contact_number"
                                                            placeholder="Mother's Contact Number" />
                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="email" label="Father's Email Address"
                                                            id="father_email" name="father_email"
                                                            placeholder="Father's Email Address" />
                                                        <x-form.input type="email" label="Mother's Email Address"
                                                            id="mother_email" name="mother_email"
                                                            placeholder="Mother's Email Address" />

                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Father's Passport Number"
                                                            id="father_passport" name="father_passport"
                                                            placeholder="Father's Passport Number" />

                                                        <x-form.input type="text" label="Mother's Passport Number"
                                                            id="mother_passport" name="mother_passport"
                                                            placeholder="Mother's Passport Number" />


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
                                                        <x-form.input type="text" label="Examination Name"
                                                            id="ssc_exam_name" name="ssc_exam_name"
                                                            placeholder="Examination Name [eg: SSC]" />

                                                        <x-form.input type="text" label="Subject Name"
                                                            id="ssc_group" name="ssc_group"
                                                            placeholder="Subject Name [eg: Science]" />

                                                        <x-form.input type="text" label="Passing Year"
                                                            id="ssc_year" name="ssc_year"
                                                            placeholder="Passing Year [eg: 2022]" />

                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Institute Name"
                                                            id="ssc_inistitute" name="ssc_inistitute"
                                                            placeholder="Institute Name" />
                                                        <x-form.input type="text" label="Grade / Marks / GPA"
                                                            id="ssc_gpa" name="ssc_gpa"
                                                            placeholder="Grade / Marks / GPA" />
                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Ministry of education"
                                                            id="ssc_ministry" name="ssc_ministry"
                                                            placeholder="Ministry of education" />

                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Academic Transcript" id="ssc_academic_transcript"
                                                            name="attachment[ssc_academic_transcript]" />

                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Degree Certificate" id="ssc_certificate"
                                                            name="attachment[ssc_certificate]" />

                                                    </div>
                                                    <h5>HSC or Equivalent</h5>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Examination Name"
                                                            id="hsc_exam_name" name="hsc_exam_name"
                                                            placeholder="Examination Name [eg: HSC]" />

                                                        <x-form.input type="text" label="Subject Name"
                                                            id="hsc_group" name="hsc_group"
                                                            placeholder="Subject Name [eg: Science]" />

                                                        <x-form.input type="text" label="Passing Year"
                                                            id="hsc_year" name="hsc_year"
                                                            placeholder="Passing Year [eg: 2022]" />

                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Institute Name"
                                                            id="hsc_inistitute" name="hsc_inistitute"
                                                            placeholder="Institute Name" />
                                                        <x-form.input type="text" label="Grade / Marks / GPA"
                                                            id="hsc_gpa" name="hsc_gpa"
                                                            placeholder="Grade / Marks / GPA" />
                                                    </div>
                                                    <div class="single-input">
                                                        <x-form.input type="text" label="Ministry of education"
                                                            id="hsc_ministry" name="hsc_ministry"
                                                            placeholder="Ministry of education" />

                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Academic Transcript" id="hsc_academic_transcript"
                                                            name="attachment[hsc_academic_transcript]" />

                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Degree Certificate" id="hsc_certificate"
                                                            name="attachment[hsc_certificate]" />

                                                    </div>

                                                    <h5 x-show="application == 'Postgraduate'">Undergraduate Education
                                                    </h5>


                                                    <template x-if="application == 'Postgraduate'">
                                                        <div class="single-input">
                                                            <x-form.input type="text" label="Degree Title"
                                                                id="undergraduate_course" name="undergraduate_course"
                                                                placeholder="Degree Title (e.g., Bachelor of Science in Computer Science and Engineering)" />
                                                        </div>
                                                    </template>
                                                    <template x-if="application == 'Postgraduate'">
                                                        <div class="single-input">
                                                            <x-form.input label="Institute Name"
                                                                name="undergraduate_inistitute"
                                                                id="undergraduate_inistitute" type="text"
                                                                placeholder="Institute Name" />

                                                            <x-form.input
                                                                label="Country
                                                                    of
                                                                    Institute"
                                                                name="undergraduate_inistitute_country"
                                                                id="undergraduate_inistitute_country" type="select"
                                                                placeholder="Institute Name" :options="App\Constant::Countries" />
                                                        </div>
                                                    </template>

                                                    <template x-if="application == 'Postgraduate'">
                                                        <div class="single-input">

                                                            <x-form.input label="Year of Graduation"
                                                                name="undergraduate_year" id="undergraduate_year"
                                                                placeholder="Year of Graduation" />

                                                            <x-form.input label="CGPA" name="undergraduate_cgpa"
                                                                id="undergraduate_cgpa"
                                                                placeholder="Undergraduate CGPA" />

                                                        </div>
                                                    </template>

                                                    <template x-if="application == 'Postgraduate'">
                                                        <div class="single-input">
                                                            <x-form.input type="file" accept="application/pdf"
                                                                info="Must be 512kb or less . Supported format PDF"
                                                                label="Academic Transcript"
                                                                id="undergraduate_academic_transcript"
                                                                name="attachment[undergraduate_academic_transcript]" />

                                                            <x-form.input type="file" accept="application/pdf"
                                                                info="Must be 512kb or less . Supported format PDF"
                                                                label="Degree Certificate"
                                                                id="undergraduate_certificate"
                                                                name="attachment[undergraduate_certificate]" />
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="form-title">Attachments</h5>
                                                <div class="single-input">

                                                    <x-form.input type="file" accept="application/pdf"
                                                        info="Must be 512kb or less . Supported format PDF"
                                                        label="Police verification" id="police_verification"
                                                        name="attachment[police_verification]" :required="false" />


                                                </div>
                                                <div class="single-input mb-1">

                                                    <x-form.input type="file" accept="application/pdf"
                                                        info="Must be 512kb or less . Supported format PDF"
                                                        label="Medical examination" id="medical_examination"
                                                        name="attachment[medical_examination]" />



                                                </div>
                                                <p> <a style="text-decoration: underline" class="text-danger"
                                                        href="{{ asset('assets/Physical Examination Form.pdf') }}">Download
                                                        the format from here</a>, complete it, and then upload
                                                    it.</p>
                                                <div class="single-input">

                                                    <x-form.input type="file" accept="application/pdf"
                                                        info="Must be 512kb or less . Supported format PDF"
                                                        label="Passport" id="passport_copy"
                                                        name="attachment[passport]" />


                                                </div>

                                                <div class="single-input">
                                                    <template x-if="application == 'Postgraduate'">
                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Statement of Purpose (SOP)"
                                                            id="statement_of_purpose"
                                                            name="attachment[statement_of_purpose]"
                                                            :required="true" />
                                                    </template>
                                                    <template x-if="application != 'Postgraduate'">
                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Statement of Purpose (SOP)"
                                                            id="statement_of_purpose"
                                                            name="attachment[statement_of_purpose]"
                                                            :required="false" />
                                                    </template>
                                                </div>

                                                <div class="single-input">

                                                    <template x-if="application == 'Postgraduate'">
                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Letter of Recommendation"
                                                            id="letter_of_recomandation_1"
                                                            name="attachment[letter_of_recomandation_1]"
                                                            :required="true" />
                                                    </template>
                                                    <template x-if="application != 'Postgraduate'">
                                                        <x-form.input type="file" accept="application/pdf"
                                                            info="Must be 512kb or less . Supported format PDF"
                                                            label="Letter of Recommendation"
                                                            id="letter_of_recomandation_1"
                                                            name="attachment[letter_of_recomandation_1]"
                                                            :required="false" />
                                                    </template>

                                                </div>
                                                <div class="single-input">
                                                    <x-form.input type="file" accept="application/pdf"
                                                        info="Must be 512kb or less . Supported format PDF"
                                                        label="Letter of Recommendation"
                                                        id="letter_of_recomandation_2"
                                                        name="attachment[letter_of_recomandation_2]"
                                                        :required="false" />

                                                </div>



                                                <div class="single-input">
                                                    <x-form.input type="file" accept="application/pdf"
                                                        info="Must be 512kb or less . Supported format PDF"
                                                        label="Others" id="others" name="attachment[others][]"
                                                        :required="false" multiple />


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
                                    <div class="text-end">
                                        <button type="submit" class="rts-theme-btn primary with-arrow"
                                            id="submitBtn">
                                            Submit Application
                                            <span><i class="fa-thin fa-arrow-right"></i></span>
                                        </button>
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
