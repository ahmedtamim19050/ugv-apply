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
            'application' => 'required|in:Undergraduate,Postgraduate',
            'session' => 'required',
            'course' => 'required|string',
            'name' => 'required|string',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif',
            'contact_number' => 'required|string',
            'email' => 'required|email',
            'passport' => 'required|string',
            'dob' => 'required|date',
            'religion' => 'nullable|in:Islam,Buddhism,Hinduism,Jainism,Shinto,Judaism,Baháʼí Faith,Mormonism,Christianity,Sikhism,Chinese religion,Others',
            'gender' => 'required|in:Male,Female,Others',
            'blood_group' => 'nullable|in:A+,A-,B+,B-,O+,O-,AB+,AB-',
            'address' => 'required|string',
            'post_code' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'father_name' => 'required|string',
            'father_contact_number' => 'required|string',
            'father_email' => 'required|email',
            'father_occupation' => 'required|string',
            'father_passport' => 'required|string',
            'mother_name' => 'required|string',
            'mother_contact_number' => 'required|string',
            'mother_email' => 'required|email',
            'mother_occupation' => 'required|string',
            'mother_passport' => 'required|string',
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
            'attachment.ssc_academic_transcript' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.ssc_certificate' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.hsc_academic_transcript' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.hsc_certificate' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.undergraduate_academic_transcript' => 'required_if:application,Graduate|nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.undergraduate_certificate' => 'required_if:application,Graduate|nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.police_verification' => 'nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2024',
            'attachment.medical_examination' => 'required|file|mimes:doc,docx,pdf|max:512',
            'attachment.statement_of_purpose' => 'required_if:application,Graduate|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.letter_of_recomandation_1' => 'required_if:application,Graduate|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.letter_of_recomandation_2' => 'nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
            'attachment.others.*' => 'nullable|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:512',
        ]);

        // Handle file uploads
        $attachments = [];

        if ($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $key => $file) {
                if (is_null($file))
                    continue;
                if (is_array($file)) {

                    foreach ($file as $k => $f) {

                        $attachments[$key][$k] = $f->store('attachments');
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
        $attachment = json_decode($application->attachments);
        // dd($attachment);
        return view('pages.view-application', compact('application', 'attachment'));
    }
}
