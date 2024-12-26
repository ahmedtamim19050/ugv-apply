@extends('voyager::master')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }



    .hero h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .btn-back {
        margin-bottom: 20px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        font-weight: bold;
        border-bottom: 2px solid #007bff;
        padding-bottom: 5px;
        margin-bottom: 15px;
    }

    .list-group-item {
        display: flex;
        justify-content: space-between;
    }

    .profile-img {
        border-radius: 50%;
    }
</style>

@section('page_title', __('voyager::generic.view') . ' ' . $dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }}
        {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        {{-- @can('edit', $dataTypeContent)
            <a href="{{ route('voyager.' . $dataType->slug . '.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
                <i class="glyphicon glyphicon-pencil"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.edit') }}</span>
            </a>
        @endcan --}}
        @can('delete', $dataTypeContent)
            @if ($isSoftDeleted)
                <a href="{{ route('voyager.' . $dataType->slug . '.restore', $dataTypeContent->getKey()) }}"
                    title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore"
                    data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
                </a>
            @else
                <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete"
                    data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
                </a>
            @endif
        @endcan
        @can('browse', $dataTypeContent)
            <a href="{{ route('voyager.' . $dataType->slug . '.index') }}" class="btn btn-warning">
                <i class="glyphicon glyphicon-list"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.return_to_list') }}</span>
            </a>
        @endcan
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')


    <div class="container my-5">


        <div class="card">
            <div class="card-body">
                <img class="profile-img" src="{{ Voyager::image($dataTypeContent->photo) }}"
                    alt="{{ $dataTypeContent->name }}" height="100" width="100">
                <h3 class="card-title text-primary">{{ $dataTypeContent->name }}</h3>
                <p class="text-muted">Application ID: <strong>#{{ $dataTypeContent->id }}</strong></p>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Application:</strong> {{ $dataTypeContent->application }}</p>
                        <p><strong>Program:</strong> {{ $dataTypeContent->interested_course }}</p>
                        <p><strong>Session:</strong> {{ $dataTypeContent->session }}</p>
                        {{-- <p><strong>Application Status:</strong> <span class="badge bg-warning">Pending</span></p> --}}
                        <p><strong>Date Submitted:</strong> {{ $dataTypeContent->created_at->format('d-m-Y') }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> {{ $dataTypeContent->email }}</p>
                        <p><strong>Phone:</strong> {{ $dataTypeContent->contact_number }}</p>
                        <p><strong>Date Of Birth:</strong> {{ $dataTypeContent->date_of_birth }}</p>
                        <p><strong>Gender:</strong> {{ $dataTypeContent->gender }}</p>
                        <p><strong>Religion:</strong> {{ $dataTypeContent->religion }}</p>
                        <p><strong>Blood Group:</strong> {{ $dataTypeContent->blood_group }}</p>
                        <p><strong>Address:</strong> {{ $dataTypeContent->post_code }}, {{ $dataTypeContent->address }},
                            {{ $dataTypeContent->city }}, {{ $dataTypeContent->state }}</p>
                        <p><strong>Nationality:</strong> {{ $dataTypeContent->nationality }}</p>
                    </div>
                </div>

                <h5 class="mt-4 section-title">Academic Information</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>SSC:</strong> {{ $dataTypeContent->ssc }}</p>
                        <p><strong>Group:</strong> {{ $dataTypeContent->ssc_group }}</p>
                        <p><strong>Year:</strong> {{ $dataTypeContent->ssc_year }}</p>
                        <p><strong>Institution Name:</strong> {{ $dataTypeContent->ssc_institution_name }}</p>
                        <p><strong>Grade/Marks:</strong> {{ $dataTypeContent->ssc_grade_or_marks }}</p>
                        <p><strong>Ministry of Education:</strong> {{ $dataTypeContent->ssc_ministary_of_education }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>HSC:</strong> {{ $dataTypeContent->hsc }}</p>
                        <p><strong>Group:</strong> {{ $dataTypeContent->hsc_group }}</p>
                        <p><strong>Year:</strong> {{ $dataTypeContent->hsc_year }}</p>
                        <p><strong>Institution Name:</strong> {{ $dataTypeContent->hsc_institution_name }}</p>
                        <p><strong>Grade/Marks:</strong> {{ $dataTypeContent->hsc_grade_or_marks }}</p>
                        <p><strong>Ministry of Education:</strong> {{ $dataTypeContent->hsc_ministary_of_education }}</p>
                    </div>
                </div>
                <h5 class="mt-4 section-title">Family Background</h5>

                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Father's Name:</strong> {{ $dataTypeContent->father_name }}</p>
                        <p><strong>Father's Contact Number:</strong> {{ $dataTypeContent->father_contact_number }}</p>
                        <p><strong>Father's Email:</strong> {{ $dataTypeContent->father_email }}</p>
                        <p><strong>Father's Occupation:</strong> {{ $dataTypeContent->father_occupation }}</p>
                        <p><strong>Father's Passport Number:</strong> {{ $dataTypeContent->father_passport_number }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Mother's Name:</strong> {{ $dataTypeContent->mother_name }}</p>
                        <p><strong>Mother's Contact Number:</strong> {{ $dataTypeContent->mother_contact_number }}</p>
                        <p><strong>Mother's Email:</strong> {{ $dataTypeContent->mother_email }}</p>
                        <p><strong>Mother's Occupation:</strong> {{ $dataTypeContent->mother_occupation }}</p>
                        <p><strong>Mother's Passport Number:</strong>
                            {{ $dataTypeContent->mother_passport_number ?? 'N/A' }}</p>
                    </div>
                </div>
                @php
                    $attachment = json_decode($dataTypeContent->attachments);

                @endphp



                <h5 class="mt-4 section-title">Uploaded Documents</h5>

                <ul class="list-group">
                    @if (@$attachment->passport)
                        <p><strong>Passport :</strong> <a href="{{ Storage::url($attachment->passport) }}"
                                target="_blank">{{ $attachment->passport }}</a></p>
                    @endif

                    @if (@$attachment->police_verification)
                        <p><strong>Police Verification :</strong> <a
                                href="{{ Storage::url($attachment->police_verification) }}"
                                target="_blank">{{ $attachment->police_verification }}</a></p>
                    @endif

                    @if (@$attachment->statement_of_purpose)
                        <p><strong>Statement Of Purpose :</strong> <a
                                href="{{ Storage::url($attachment->statement_of_purpose) }}"
                                target="_blank">{{ $attachment->statement_of_purpose }}</a></p>
                    @endif

                    @if (@$attachment->hsc_academic_transcript)
                        <p><strong>HSC Academic Transcript :</strong> <a
                                href="{{ Storage::url($attachment->hsc_academic_transcript) }}"
                                target="_blank">{{ $attachment->hsc_academic_transcript }}</a></p>
                    @endif

                    @if (@$attachment->ssc_academic_transcript)
                        <p><strong>SSC Academic Transcript :</strong> <a
                                href="{{ Storage::url($attachment->ssc_academic_transcript) }}"
                                target="_blank">{{ $attachment->ssc_academic_transcript }}</a></p>
                    @endif

                    @if (@$attachment->letter_of_recomandation_1)
                        <p><strong>Letter Of Recommendation 1 :</strong> <a
                                href="{{ Storage::url($attachment->letter_of_recomandation_1) }}"
                                target="_blank">{{ $attachment->letter_of_recomandation_1 }}</a></p>
                    @endif

                    @if (@$attachment->letter_of_recomandation_2)
                        <p><strong>Letter Of Recommendation 2 :</strong> <a
                                href="{{ Storage::url($attachment->letter_of_recomandation_2) }}"
                                target="_blank">{{ $attachment->letter_of_recomandation_2 }}</a></p>
                    @endif

                    @if (!empty($attachment->others))
                        @foreach (@$attachment->others as $other)
                            @if ($other)
                                <p><strong>Others :</strong> <a href="{{ $other }}"
                                        target="_blank">{{ $other }}</a></p>
                            @endif
                        @endforeach
                    @endif


                    {{-- @if (isset($attachments->file1))
                        <li class="list-group-item">
                            {{ $attachments->file1 }} <a href="{{ Voyager::image($attachments->file1) }}" target="_black"
                                class="btn btn-primary btn-sm">View</a>
                        </li>
                    @endif
                    @if (isset($attachments->file2))
                        <li class="list-group-item">
                            {{ $attachments->file2 }} <a href="{{ Voyager::image($attachments->file2) }}" target="_black"
                                class="btn btn-primary btn-sm">View</a>
                        </li>
                    @endif --}}


                </ul>


                {{-- <div class="mt-4 d-flex justify-content-between">
                    <button class="btn btn-success" data-bs-toggle="tooltip"
                        title="Approve this application">Approve</button>
                    <button class="btn btn-danger" data-bs-toggle="tooltip" title="Reject this application">Reject</button>
                    <button class="btn btn-warning" data-bs-toggle="tooltip" title="Request additional information">Request
                        More Info</button>
                </div> --}}
            </div>
        </div>
    </div>
    <script>
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>


    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }}
                        {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.' . $dataType->slug . '.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                            value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right"
                        data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function() {
                $('.side-body').multilingual();
            });
        </script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function(e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/) ?
                deleteFormAction.replace(/([0-9]+$)/, $(this).data('id')) :
                deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });
    </script>
@stop
