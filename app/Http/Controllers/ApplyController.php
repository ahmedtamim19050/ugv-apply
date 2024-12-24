<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function saveApply(Request $request)
    {
        // dd($request->all());
        // Validate the incoming data
        $validated = $request->validate([
            'application' => 'nullable|in:Under Graduate,Graduate',
            'session' => 'nullable|in:January,June',
            'course' => 'nullable|string',
            'name' => 'required|string',
            'photo' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'contact_number' => 'nullable|string',
            'email' => 'required|email',
            'passport' => 'nullable|string',
            'dob' => 'nullable|date',
            'religion' => 'nullable|in:Islam,Buddhism,Hinduism,Jainism,Shinto,Judaism,Baháʼí Faith,Mormonism,Christianity,Sikhism,Chinese religion,Others',
            'gender' => 'nullable|in:Male,Female,Others',
            'blood_group' => 'nullable|in:A+,A-,B+,B-,O+,O-,AB+,AB-',
            'address' => 'nullable|string',
            'post_code' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'father_name' => 'nullable|string',
            'father_contact_number' => 'nullable|string',
            'father_email' => 'nullable|email',
            'father_occupation' => 'nullable|string',
            'father_passport' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'mother_contact_number' => 'nullable|string',
            'mother_email' => 'nullable|email',
            'mother_occupation' => 'nullable|string',
            'mother_passport' => 'nullable|string',
            'ssc_exam_name' => 'nullable|string',
            'ssc_group' => 'nullable|string',
            'ssc_year' => 'nullable|string',
            'ssc_inistitute' => 'nullable|string',
            'ssc_gpa' => 'nullable|string',
            'ssc_ministry' => 'nullable|string',
            'hsc_exam_name' => 'nullable|string',
            'hsc_group' => 'nullable|string',
            'hsc_year' => 'nullable|string',
            'hsc_inistitute' => 'nullable|string',
            'hsc_gpa' => 'nullable|string',
            'hsc_ministry' => 'nullable|string',
            'undergraduate_course' => 'nullable|string',
            'undergraduate_year' => 'nullable|string',
            'undergraduate_inistitute' => 'nullable|string',
            'undergraduate_cgpa' => 'nullable|string',
            'attachment.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,doc,docx,pdf|max:2048',
        ]);

        // Handle file uploads
        $attachments = [];
        if ($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $key => $file) {
                $attachments[$key] = $file->store('attachments');
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

        return redirect(route('apply.thank-you'))->with('success', 'Application submitted successfully!');
    }
}
