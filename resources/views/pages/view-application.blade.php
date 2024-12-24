<x-app>
    <section class="rts-faculty  pt--130">
        <div class="container">
            <div class="row justify-content-md-center">
                <div
                    class="col-lg-12 col-md-11 d-flex flex-wrap gap-5 justify-content-between align-items-start mb--60 border-bottom pb-5">
                    <div class="rts-section">
                        <h3 class="rts-section-title">Application Details</h3>
                    </div>
                    <div class="search-filter">
                        <button class="rts-theme-btn btn-arrow">Download
                            <span><i class="fa-solid fa-download"></i></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('assets/images/logougv.png') }}" alt="">
            </div>
            <div class="title mt-3">
                <h3 style="color: #1e386b">Fred Connelly !!</h3>
                <p class="text-secondary">Application ID : #{{ $application->unique_id }}</p>
            </div>
            <hr class="my-5">
            <div class="contact">
                <div class="row">
                    <div class="col-md-6">
                        <p><b>Application :</b> {{ $application->application }}</p>
                        <p><b>Interested Course :</b> {{ $application->interested_course }}</p>
                        <p><b>Session :</b> {{ $application->session }}</p>
                        <p><b>Application Status :</b>
                            <span
                                class="badge rounded-pill {{ $application->status == 0 ? 'bg-secondary' : 'bg-success' }} ">{{ $application->status == 0 ? 'Pandding' : 'approved' }}</span>
                        </p>
                        <p><b>Date of submission :</b> {{ $application->created_at->format('d/M/Y') }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Email :</b> {{ $application->email }}</p>
                        <p><b>Phone :</b> {{ $application->contact_number }}</p>
                        <p><b>Date Of Birth :</b> {{ $application->date_of_birth }}</p>
                        <p><b>Gender :</b> {{ $application->gender }}</p>
                        <p><b>Religion :</b> {{ $application->religion }}</p>
                        <p><b>Blood Group:</b> {{ $application->blood_group }}</p>
                        <p><b>Address :</b> {{ $application->address }}</p>
                        <p><b>Nationality :</b> {{ $application->nationality }}</p>
                    </div>
                </div>
            </div>
            <div class="academic-info pt--50">
                <h5 class="text-secondary pb-3" style="border-bottom: 2px solid #1e386b;">Academic Information</h5>
                <div class="mt-5 row">
                    <div class="col-md-6">
                        <p><b>SSC :</b> {{ $application->ssc }}</p>
                        <p><b>Group :</b> {{ $application->ssc_group }}</p>
                        <p><b>Year :</b> {{ $application->ssc_year }}</p>
                        <p><b>Institution Name :</b> {{ $application->ssc_institution_name }}</p>
                        <p><b>Grade/Marks :</b> {{ $application->ssc_grade_or_marks }}</p>
                        <p><b>Ministary Of Education :</b> {{ $application->ssc_ministary_of_education }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><b>HSC :</b> {{ $application->hsc }}</p>
                        <p><b>Group :</b> {{ $application->hsc_group }}</p>
                        <p><b>Year :</b> {{ $application->hsc_year }}</p>
                        <p><b>Institution Name :</b> {{ $application->hsc_institution_name }}</p>
                        <p><b>Grade/Marks :</b> {{ $application->hsc_grade_or_marks }}</p>
                        <p><b>Ministary Of Education :</b> {{ $application->hsc_ministary_of_education }}</p>
                    </div>
                    <hr class="mt-3">
                    <div class="col-md-6">
                        <p><b>Undergraduate :</b> {{ $application->honors_degree }}</p>
                        <p><b>Year :</b> {{ $application->honors_degree_year }}</p>
                        <p><b>Institution Name :</b> {{ $application->honors_degree_institution_name }}</p>
                        <p><b>Grade/Marks :</b> {{ $application->honors_degree_grade_or_marks }}</p>
                    </div>
                </div>
            </div>
            <div class="Family-info pt--50">
                <h5 class="text-secondary pb-3" style="border-bottom: 2px solid #1e386b;">Family Background</h5>
                <div class="mt-5 row">
                    <div class="col-md-6">
                        <p><b>Father's Name :</b> {{ $application->father_name }}</p>
                        <p><b>Father's Contact Number :</b> {{ $application->father_contact_number }}</p>
                        <p><b>Father's Email :</b> {{ $application->father_email }}</p>
                        <p><b>Father's Occupation :</b> {{ $application->father_occupation }}</p>
                        <p><b>Father's Passport Number :</b> {{ $application->father_passport_number }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><b>mother's Name :</b> {{ $application->mother_name }}</p>
                        <p><b>mother's Contact Number :</b> {{ $application->mother_contact_number }}</p>
                        <p><b>mother's Email :</b> {{ $application->mother_email }}</p>
                        <p><b>mother's Occupation :</b> {{ $application->mother_occupation }}</p>
                        <p><b>mother's Passport Number :</b> {{ $application->mother_passport_number }}</p>
                    </div>
                    
                </div>
            </div>
            <div class="attachments pt--50">
                <h5 class="text-secondary pb-3" style="border-bottom: 2px solid #1e386b;">Uploaded Documents</h5>
                <div class="mt-5 row">
                    <div class="col-md-12">
                        <p><b>Passport :</b> <a href="{{Storage::url($attachment->passport)}}" target="_blank">{{ $attachment->passport }}</a></p>
                        <p><b>Police Verification :</b> <a href="{{ Storage::url($attachment->police_verification) }}" target="_blank">{{ $attachment->police_verification }}</a></p>
                        <p><b>Statement Of Purpose :</b> <a href="{{ Storage::url($attachment->statement_of_purpose) }}" target="_blank">{{ $attachment->statement_of_purpose }}</a></p>
                        <p><b>HSC Academic Transcript :</b> <a href="{{ Storage::url($attachment->hsc_academic_transcript) }}" target="_blank">{{ $attachment->hsc_academic_transcript }}</a></p>
                        <p><b>SSC Academic Transcript :</b> <a href="{{ Storage::url($attachment->ssc_academic_transcript) }}" target="_blank">{{ $attachment->ssc_academic_transcript }}</a></p>
                        <p><b>Letter Of Recomandation 1 :</b> <a href="{{ Storage::url($attachment->letter_of_recomandation_1) }}" target="_blank">{{ $attachment->letter_of_recomandation_1 }}</a></p>
                        <p><b>Letter Of Recomandation 2 :</b> <a href="{{ Storage::url($attachment->letter_of_recomandation_2) }}" target="_blank">{{ $attachment->letter_of_recomandation_2 }}</a></p>
                        @foreach ($attachment->others as $other)
                        <p><b>Others :</b> <a href="{{ $other }}">{{ $other }}</a></p>
                        @endforeach
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
</x-app>
