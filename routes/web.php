<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/fees-stucture',[PageController::class,'FeesStucture'])->name('page.fees-stucture');
Route::get('/admission-rules',[PageController::class,'AdmissionRules'])->name('page.admission-rules');
Route::get('/contact',[PageController::class,'contact'])->name('page.contact');
Route::get('/apply-now',[PageController::class,'apply'])->name('apply');
Route::post('/apply-now',function(Request $request){
    use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'application' => 'nullable|in:Under Graduate,Graduate',
            'session' => 'nullable|in:January,June',
            'interested_course' => 'nullable|string',
            'name' => 'required|string',
            'photo' => 'nullable|file|mimes:jpeg,png,jpg,gif',
            'contact_number' => 'nullable|string',
            'email' => 'required|email',
            'passport_number' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
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
            'father_passport_number' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'mother_contact_number' => 'nullable|string',
            'mother_email' => 'nullable|email',
            'mother_occupation' => 'nullable|string',
            'mother_passport_number' => 'nullable|string',
            'ssc' => 'nullable|string',
            'ssc_group' => 'nullable|string',
            'ssc_year' => 'nullable|string',
            'ssc_institution_name' => 'nullable|string',
            'ssc_grade_or_marks' => 'nullable|string',
            'ssc_ministary_of_education' => 'nullable|string',
            'hsc' => 'nullable|string',
            'hsc_group' => 'nullable|string',
            'hsc_year' => 'nullable|string',
            'hsc_institution_name' => 'nullable|string',
            'hsc_grade_or_marks' => 'nullable|string',
            'hsc_ministary_of_education' => 'nullable|string',
            'honors_degree' => 'nullable|string',
            'course' => 'nullable|string',
            'honors_degree_year' => 'nullable|string',
            'honors_degree_institution_name' => 'nullable|string',
            'honors_degree_grade_or_marks' => 'nullable|string',
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
            'application' => $validated['application'],
            'session' => $validated['session'],
            'interested_course' => $validated['interested_course'],
            'name' => $validated['name'],
            'photo' => $request->file('photo') ? $request->file('photo')->store('photos') : null,
            'contact_number' => $validated['contact_number'],
            'email' => $validated['email'],
            'passport_number' => $validated['passport_number'],
            'nationality' => $validated['nationality'],
            'date_of_birth' => $validated['date_of_birth'],
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
            'father_passport_number' => $validated['father_passport_number'],
            'mother_name' => $validated['mother_name'],
            'mother_contact_number' => $validated['mother_contact_number'],
            'mother_email' => $validated['mother_email'],
            'mother_occupation' => $validated['mother_occupation'],
            'mother_passport_number' => $validated['mother_passport_number'],
            'ssc' => $validated['ssc'],
            'ssc_group' => $validated['ssc_group'],
            'ssc_year' => $validated['ssc_year'],
            'ssc_institution_name' => $validated['ssc_institution_name'],
            'ssc_grade_or_marks' => $validated['ssc_grade_or_marks'],
            'ssc_ministary_of_education' => $validated['ssc_ministary_of_education'],
            'hsc' => $validated['hsc'],
            'hsc_group' => $validated['hsc_group'],
            'hsc_year' => $validated['hsc_year'],
            'hsc_institution_name' => $validated['hsc_institution_name'],
            'hsc_grade_or_marks' => $validated['hsc_grade_or_marks'],
            'hsc_ministary_of_education' => $validated['hsc_ministary_of_education'],
            'honors_degree' => $validated['honors_degree'],
            'course' => $validated['course'],
            'honors_degree_year' => $validated['honors_degree_year'],
            'honors_degree_institution_name' => $validated['honors_degree_institution_name'],
            'honors_degree_grade_or_marks' => $validated['honors_degree_grade_or_marks'],
            'attachments' => $attachments ? json_encode($attachments) : null,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}

})->name('apply.post');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
