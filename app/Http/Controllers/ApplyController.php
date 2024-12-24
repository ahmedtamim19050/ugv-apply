<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function saveApply(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'application' => 'required|in:Under Graduate,Graduate',
            'session' => 'required|in:January,June',
            'course' => 'required|string',
            'name' => 'required|string',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif',
            'contact_number' => 'required|string',
            'email' => 'required|email',
            'passport' => 'required|string',
            'dob' => 'required|date',
            'religion' => 'required|in:Islam,Buddhism,Hinduism,Jainism,Shinto,Judaism,Baháʼí Faith,Mormonism,Christianity,Sikhism,Chinese religion,Others',
            'gender' => 'required|in:Male,Female,Others',
            'blood_group' => 'required|in:A+,A-,B+,B-,O+,O-,AB+,AB-',
            'address' => 'required|string',
            'post_code' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'father_name' => 'required|string',
            'father_contact_number' => 'nullable|string',
            'father_email' => 'nullable|email',
            'father_occupation' => 'required|string',
            'father_passport' => 'nullable|string',
            'mother_name' => 'required|string',
            'mother_contact_number' => 'nullable|string',
            'mother_email' => 'nullable|email',
            'mother_occupation' => 'nullable|string',
            'mother_passport' => 'nullable|string',
            'ssc_exam_name' => 'required|string',
            'ssc_group' => 'required|string',
            'ssc_year' => 'required|string',
            'ssc_inistitute' => 'required|string',
            'ssc_gpa' => 'required|string',
            'ssc_ministry' => 'required|string',
            'hsc_exam_name' => 'required|string',
            'hsc_group' => 'required|string',
            'hsc_year' => 'required|string',
            'hsc_inistitute' => 'required|string',
            'hsc_gpa' => 'required|string',
            'hsc_ministry' => 'required|string',
            'undergraduate_course' => 'required_if:application,Graduate|nullable',
            'undergraduate_year' => 'required_if:application,Graduate|nullable',
            'undergraduate_inistitute' => 'required_if:application,Graduate|nullable',
            'undergraduate_cgpa' => 'required_if:application,Graduate|nullable',
            'attachment.undergraduate_academic_transcript' => 'required_if:application,Graduate|nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
            'attachment.undergraduate_certificate' => 'required_if:application,Graduate|nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
            'attachment.police_verification' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
            'attachment.statement_of_purpose' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
            'attachment.letter_of_recomandation_1' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
            'attachment.letter_of_recomandation_2' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
            'attachment.others.*' => 'nullable|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
        ]);

        // Handle file uploads
        $attachments = [];

        if ($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $key => $file) {
                if (is_null($file))
                    continue;
                if (is_array($file)) {

                    foreach ($file as $k => $f) {

                        $attachments['others'][$k] = $f->store('attachments');
                    }
                } else {
                    $attachments[$key] = $file->store('attachments');
                }
            }
        }

        // Save data to the database
        $application = Application::create([
            'unique_id' => uniqid(),
            'application' => $validated['application'],
            'session' => $validated['session'],
            'interested_course' => $validated['course'],
            'name' => $validated['name'],
            'photo' => $request->file('photo') ? $request->file('photo')->store('photos') : null,
            'contact_number' => $validated['contact_number'],
            'email' => $validated['email'],
            'passport_number' => $validated['passport'],
            'nationality' => $validated['country'],
            'date_of_birth' => $validated['dob'],
            'religion' => $validated['religion'],
            'gender' => $validated['gender'],
            'blood_group' => $validated['blood_group'],
            'address' => $validated['address'],
            'post_code' => $validated['post_code'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'country' => $validated['country'],
            'father_name' => $validated['father_name'],
            'father_contact_number' => $validated['father_contact_number'],
            'father_email' => $validated['father_email'],
            'father_occupation' => $validated['father_occupation'],
            'father_passport_number' => $validated['father_passport'],
            'mother_name' => $validated['mother_name'],
            'mother_contact_number' => $validated['mother_contact_number'],
            'mother_email' => $validated['mother_email'],
            'mother_occupation' => $validated['mother_occupation'],
            'mother_passport_number' => $validated['mother_passport'],
            'ssc' => $validated['ssc_exam_name'],
            'ssc_group' => $validated['ssc_group'],
            'ssc_year' => $validated['ssc_year'],
            'ssc_institution_name' => $validated['ssc_inistitute'],
            'ssc_grade_or_marks' => $validated['ssc_gpa'],
            'ssc_ministary_of_education' => $validated['ssc_ministry'],
            'hsc' => $validated['hsc_exam_name'],
            'hsc_group' => $validated['hsc_group'],
            'hsc_year' => $validated['hsc_year'],
            'hsc_institution_name' => $validated['hsc_inistitute'],
            'hsc_grade_or_marks' => $validated['hsc_gpa'],
            'hsc_ministary_of_education' => $validated['hsc_ministry'],
            'honors_degree' => $validated['undergraduate_course'],
            'course' => $validated['course'],
            'honors_degree_year' => $validated['undergraduate_year'],
            'honors_degree_institution_name' => $validated['undergraduate_inistitute'],
            'honors_degree_grade_or_marks' => $validated['undergraduate_cgpa'],
            'attachments' => $attachments ? json_encode($attachments) : null,
        ]);

        return redirect(route('apply.thank-you', $application->unique_id))->with('success', 'Application submitted successfully!');
    }
    public function thankYou($uid)
    {
        return view('pages.thank-you', compact('uid'));
    }
    public function viewApply($uid)
    {
        $application = Application::where('unique_id', $uid)->firstOrFail();
        // dd($application);
        return view('pages.view-application', compact('application'));
    }
}
