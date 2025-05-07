<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\EmbassyDocument;
use App\Models\ExperienceRange;
use App\Models\MedicalCenter;
use App\Models\ProtectorRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FinalRegistrationController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        $experiences = ExperienceRange::all();
        return view('finalRegistration.index' , compact('candidates' , 'experiences'));
    }
    public function create()
    {
        $experiences = ExperienceRange::all();
        return view('finalRegistration.add' , compact('experiences'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'candidate_type' => 'required',
            'religion' => 'nullable',
            'title' => 'required',
            'wages_salary' => 'nullable',
            'first_name' => 'required',
            'marital_status' => 'nullable',
            'last_name' => 'required',
            'education' => 'nullable',
            'cnic' => 'required',
            'profession' => 'nullable',
            'father_name' => 'required',
            'experience' => 'nullable',
            'gender' => 'required',
            'job_type' => 'nullable',
            'date_of_birth' => 'required|date',
            'job_applied_for' => 'nullable',
            'age' => 'nullable|numeric',
            'plan' => 'nullable',
            'place_of_birth' => 'nullable',
            'nationality' => 'required',
            // Passport Info
            'passport_number' => 'nullable',
            'passport_issue_date' => 'nullable|date',
            'passport_expiry_date' => 'nullable|date',
            'passport_issue_place' => 'nullable',
            // Residence Info
            'country' => 'nullable',
            'state' => 'nullable',
            'province' => 'nullable',
            'district' => 'nullable',
            'city' => 'nullable',
            'zip' => 'nullable',
            'street' => 'nullable',
            // Contact Details
            'mobile' => 'required',
            'alternate_mobile' => 'nullable',
            'fax' => 'nullable',
            'email' => 'required',
            'website' => 'nullable',
            'return_address' => 'nullable',
            //skills
            'qualification' => 'nullable',
            'professional_qualification' => 'nullable',
            'professional_experience' => 'nullable',
            // Present Status
            'any_police_case' => 'nullable',
            'any_political_involvement' => 'nullable',
            'present_employment' => 'nullable',
            'achievements' => 'nullable',

            //Dependents
            'dependents' => 'nullable',

            //Resumes
            'resumes' => 'nullable',
        ]);

        // Process the array data for qualifications, professional qualifications, professional experience, and dependents

        // 1. Process qualifications array
        $qualifications = [];
        if ($request->has('qualification_degree') && is_array($request->qualification_degree)) {
            for ($i = 0; $i < count($request->qualification_degree); $i++) {
                $qualifications[] = [
                    'duration' => $request->qualification_duration[$i] ?? '',
                    'degree' => $request->qualification_degree[$i] ?? '',
                    'institute' => $request->qualification_institute[$i] ?? ''
                ];
            }
        }

        // 2. Process professional qualifications array
        $professionalQualifications = [];
        if ($request->has('prof_qual_degree') && is_array($request->prof_qual_degree)) {
            for ($i = 0; $i < count($request->prof_qual_degree); $i++) {
                $professionalQualifications[] = [
                    'from' => $request->prof_qual_from[$i] ?? '',
                    'to' => $request->prof_qual_to[$i] ?? '',
                    'degree' => $request->prof_qual_degree[$i] ?? '',
                    'institute' => $request->prof_qual_institute[$i] ?? ''
                ];
            }
        }

        // 3. Process professional experience array
        $professionalExperience = [];
        if ($request->has('experience_company') && is_array($request->experience_company)) {
            for ($i = 0; $i < count($request->experience_company); $i++) {
                // Combine from and to dates into a duration string
                $from = $request->experience_from[$i] ?? '';
                $to = $request->experience_to[$i] ?? '';
                $duration = '';
                if (!empty($from) || !empty($to)) {
                    $duration = $from . ' - ' . $to;
                }

                $professionalExperience[] = [
                    'company' => $request->experience_company[$i] ?? '',
                    'from' => $from,
                    'to' => $to,
                    'main_category' => $request->experience_main_category[$i] ?? '',
                    'sub_category' => $request->experience_sub_category[$i] ?? '',
                    'working_category' => $request->experience_working_category[$i] ?? '',
                    'sector' => $request->experience_sector[$i] ?? '',
                    'type' => $request->experience_type[$i] ?? ''
                ];
            }
        }

        // 4. Process dependents array
        $dependents = [];
        if ($request->has('dependent_type') && is_array($request->dependent_type)) {
            for ($i = 0; $i < count($request->dependent_type); $i++) {
                $dependents[] = [
                    'type' => $request->dependent_type[$i] ?? '',
                    'name' => $request->dependent_name[$i] ?? '',
                    'age' => $request->dependent_age[$i] ?? '',
                    'relation' => $request->dependent_relation[$i] ?? ''
                ];
            }
        }

        // Convert arrays to JSON for storage
        $qualificationsJson = !empty($qualifications) ? json_encode($qualifications) : null;
        $professionalQualificationsJson = !empty($professionalQualifications) ? json_encode($professionalQualifications) : null;
        $professionalExperienceJson = !empty($professionalExperience) ? json_encode($professionalExperience) : null;
        $dependentsJson = !empty($dependents) ? json_encode($dependents) : null;

        $resumePath = null;
        if ($request->hasFile('resumes')) {
            $file = $request->file('resumes');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Define the upload directory in public folder
            $uploadDir = public_path('uploads/resume');

            // Make sure the upload directory exists
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Store the file
            $file->move($uploadDir, $fileName);
            $resumePath = 'uploads/resume/' . $fileName;

            // Log for debugging
            \Illuminate\Support\Facades\Log::info('Resume uploaded to: ' . $uploadDir . '/' . $fileName);
        }
        // Create the candidate record
        $candidate = Candidate::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'candidate_type' => $request->candidate_type,
            'religion' => $request->religion,
            'title' => $request->title,
            'wages_salary' => $request->wages_salary,
            'first_name' => $request->first_name,
            'marital_status' => $request->marital_status,
            'last_name' => $request->last_name,
            'education' => $request->education,
            'cnic' => $request->cnic,
            'profession' => $request->profession,
            'father_name' => $request->father_name,
            'experience' => $request->experience,
            'gender' => $request->gender,
            'job_type' => $request->job_type,
            'date_of_birth' => $request->date_of_birth,
            'job_applied_for' => $request->job_applied_for,
            'age' => $request->age,
            'plan' => $request->plan,
            'place_of_birth' => $request->place_of_birth,
            'nationality' => $request->nationality,
            //Passport Info
            'passport_number' => $request->passport_number,
            'passport_issue_date' => $request->passport_issue_date,
            'passport_expiry_date' => $request->passport_expiry_date,
            'passport_issue_place' => $request->passport_issue_place,

            //Residence Info
            'country' => $request->country,
            'state' => $request->state,
            'province' => $request->province,
            'district' => $request->district,
            'city' => $request->city,
            'zip' => $request->zip,
            'street' => $request->street,
            //Contact Details
            'mobile' => $request->mobile,
            'alternate_mobile' => $request->alternate_mobile,
            'fax' => $request->fax,
            'email' => $request->email,
            'website' => $request->website,
            'return_address' => $request->return_address,
            //Skills
            'qualification' => $qualificationsJson,
            'professional_qualification' => $professionalQualificationsJson,
            'professional_experience' => $professionalExperienceJson,
            //Present Status
            'any_police_case' => $request->any_police_case,
            'any_political_involvement' => $request->any_political_involvement,
            'present_employment' => $request->present_employment,
            'achievements' => $request->achievements,
            //Dependents
            'dependents' => $dependentsJson,
            //Resumes
            'resume' => $resumePath,

        ]);

        return redirect()->route('finalRegistration')->with('success', 'Candidate registered successfully!');
    }
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        $experiences = ExperienceRange::all();
        $qualifications = (array) json_decode($candidate->qualification, true);
        $professionalQualifications = (array) json_decode($candidate->professional_qualification, true);
        $professionalExperience = (array) json_decode($candidate->professional_experience, true);
        $dependents = (array) json_decode($candidate->dependents, true);
        return view('finalRegistration.edit' , compact('candidate' , 'experiences' , 'qualifications' , 'professionalQualifications' , 'professionalExperience' , 'dependents'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'nullable', // Only required if changing password
            'candidate_type' => 'required',
            'religion' => 'nullable',
            'title' => 'required',
            'wages_salary' => 'nullable',
            'first_name' => 'required',
            'marital_status' => 'nullable',
            'last_name' => 'required',
            'education' => 'nullable',
            'cnic' => 'required',
            'profession' => 'nullable',
            'father_name' => 'required',
            'experience' => 'nullable',
            'gender' => 'required',
            'job_type' => 'nullable',
            'date_of_birth' => 'required|date',
            'job_applied_for' => 'nullable',
            'age' => 'nullable|numeric',
            'plan' => 'nullable',
            'place_of_birth' => 'nullable',
            'nationality' => 'required',
            // Passport Info
            'passport_number' => 'nullable',
            'passport_issue_date' => 'nullable|date',
            'passport_expiry_date' => 'nullable|date',
            'passport_issue_place' => 'nullable',
            // Residence Info
            'country' => 'nullable',
            'state' => 'nullable',
            'province' => 'nullable',
            'district' => 'nullable',
            'city' => 'nullable',
            'zip' => 'nullable',
            'street' => 'nullable',
            // Contact Details
            'email' => 'required|email',
            'mobile' => 'required',
            'alternate_phone' => 'nullable',
            'emergency_contact' => 'nullable',
            'website' => 'nullable',
            'address' => 'nullable',
            'return_address' => 'nullable',
            // Present Status
            'any_police_case' => 'nullable',
            'any_political_involvement' => 'nullable',
            'present_employment' => 'nullable',
            'achievements' => 'nullable',
        ]);

        $candidate = Candidate::findOrFail($id);

        // Process the array data for qualifications, professional qualifications, professional experience, and dependents

        // 1. Process qualifications array
        $qualifications = [];
        if ($request->has('qualification_degree') && is_array($request->qualification_degree)) {
            for ($i = 0; $i < count($request->qualification_degree); $i++) {
                $qualifications[] = [
                    'duration' => $request->qualification_duration[$i] ?? '',
                    'degree' => $request->qualification_degree[$i] ?? '',
                    'institute' => $request->qualification_institute[$i] ?? ''
                ];
            }
        }

        // 2. Process professional qualifications array
        $professionalQualifications = [];
        if ($request->has('prof_qual_degree') && is_array($request->prof_qual_degree)) {
            for ($i = 0; $i < count($request->prof_qual_degree); $i++) {
                $professionalQualifications[] = [
                    'from' => $request->prof_qual_from[$i] ?? '',
                    'to' => $request->prof_qual_to[$i] ?? '',
                    'degree' => $request->prof_qual_degree[$i] ?? '',
                    'institute' => $request->prof_qual_institute[$i] ?? ''
                ];
            }
        }

        // 3. Process professional experience array
        $professionalExperience = [];
        if ($request->has('experience_company') && is_array($request->experience_company)) {
            for ($i = 0; $i < count($request->experience_company); $i++) {
                $professionalExperience[] = [
                    'company' => $request->experience_company[$i] ?? '',
                    'from' => $request->experience_from[$i] ?? '',
                    'to' => $request->experience_to[$i] ?? '',
                    'main_category' => $request->experience_main_category[$i] ?? '',
                    'sub_category' => $request->experience_sub_category[$i] ?? '',
                    'working_category' => $request->experience_working_category[$i] ?? '',
                    'sector' => $request->experience_sector[$i] ?? '',
                    'type' => $request->experience_type[$i] ?? ''
                ];
            }
        }

        // 4. Process dependents array
        $dependents = [];
        if ($request->has('dependent_type') && is_array($request->dependent_type)) {
            for ($i = 0; $i < count($request->dependent_type); $i++) {
                $dependents[] = [
                    'type' => $request->dependent_type[$i] ?? '',
                    'name' => $request->dependent_name[$i] ?? '',
                    'age' => $request->dependent_age[$i] ?? '',
                    'relation' => $request->dependent_relation[$i] ?? ''
                ];
            }
        }

        // Convert arrays to JSON for storage
        $qualificationsJson = !empty($qualifications) ? json_encode($qualifications) : null;
        $professionalQualificationsJson = !empty($professionalQualifications) ? json_encode($professionalQualifications) : null;
        $professionalExperienceJson = !empty($professionalExperience) ? json_encode($professionalExperience) : null;
        $dependentsJson = !empty($dependents) ? json_encode($dependents) : null;

        // Handle resume upload
        $resumePath = $candidate->resume; // Keep existing resume path
        if ($request->hasFile('resumes')) {
            $file = $request->file('resumes');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Define the upload directory in public folder
            $uploadDir = public_path('uploads/resume');

            // Make sure the upload directory exists
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Store the file
            $file->move($uploadDir, $fileName);
            $resumePath = 'uploads/resume/' . $fileName;

            // Log for debugging
            \Illuminate\Support\Facades\Log::info('Resume uploaded to: ' . $uploadDir . '/' . $fileName);
        }

        // Update the candidate record
        $candidate->update([
            'username' => $request->username,
            'password' => $request->password ? bcrypt($request->password) : $candidate->password,
            'candidate_type' => $request->candidate_type,
            'religion' => $request->religion,
            'title' => $request->title,
            'wages_salary' => $request->wages_salary,
            'first_name' => $request->first_name,
            'marital_status' => $request->marital_status,
            'last_name' => $request->last_name,
            'education' => $request->education,
            'cnic' => $request->cnic,
            'profession' => $request->profession,
            'father_name' => $request->father_name,
            'experience' => $request->experience,
            'gender' => $request->gender,
            'job_type' => $request->job_type,
            'date_of_birth' => $request->date_of_birth,
            'job_applied_for' => $request->job_applied_for,
            'age' => $request->age,
            'plan' => $request->plan,
            'place_of_birth' => $request->place_of_birth,
            'nationality' => $request->nationality,
            // Passport Info
            'passport_number' => $request->passport_number,
            'passport_issue_date' => $request->passport_issue_date,
            'passport_expiry_date' => $request->passport_expiry_date,
            'passport_issue_place' => $request->passport_issue_place,
            // Residence Info
            'country' => $request->country,
            'state' => $request->state,
            'province' => $request->province,
            'district' => $request->district,
            'city' => $request->city,
            'zip' => $request->zip,
            'street' => $request->street,
            // Contact Details
            'email' => $request->email,
            'mobile' => $request->mobile,
            'alternate_mobile' => $request->alternate_mobile,
            'fax' => $request->fax,
            'website' => $request->website,
            'address' => $request->address,
            'return_address' => $request->return_address,
            // Skills
            'qualification' => $qualificationsJson,
            'professional_qualification' => $professionalQualificationsJson,
            'professional_experience' => $professionalExperienceJson,
            // Present Status
            'any_police_case' => $request->any_police_case,
            'any_political_involvement' => $request->any_political_involvement,
            'present_employment' => $request->present_employment,
            'achievements' => $request->achievements,
            // Dependents
            'dependents' => $dependentsJson,
            // Resume
            'resume' => $resumePath,
        ]);

        return redirect()->route('finalRegistration')->with('success', 'Candidate updated successfully!');
    }
    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();
        return redirect()->route('finalRegistration')->with('success', 'Candidate deleted successfully!');
    }
    public function show($id)
    {
        $medicalCenters = MedicalCenter::all();
        $candidate = Candidate::with('jobs', 'navttc', 'embassyDocument', 'protectorRecords')->findOrFail($id);
        $qualifications = (array) json_decode($candidate->qualification, true);
        $professionalQualifications = (array) json_decode($candidate->professional_qualification, true);
        $professionalExperience = (array) json_decode($candidate->professional_experience, true);
        $dependents = (array) json_decode($candidate->dependents, true);
        return view('finalRegistration.show', compact('candidate', 'qualifications', 'professionalQualifications', 'professionalExperience', 'dependents', 'medicalCenters'));
    }
    public function storeENumber(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required',
            'e_number' => 'required',
        ]);

        $candidate = Candidate::findOrFail($request->candidate_id);
        $candidate->e_number = $request->e_number;
        $candidate->save();

        return redirect()->back()->with('success', 'E Number added successfully!');
    }
    public function changeStatus(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required',
            'status' => 'required',
        ]);

        $candidate = Candidate::findOrFail($request->candidate_id);
        $candidate->status = $request->status;
        $candidate->save();

        return redirect()->back()->with('success', 'Status changed successfully!');
    }

    public function updateDocuments(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required',
        ]);

        $candidate = Candidate::findOrFail($request->candidate_id);
        
        // Convert checkbox values (on/null) to boolean (1/0)
        $documentData = [
            'visa_form' => $request->has('visa_form') ? 1 : 0,
            'waqala_paper' => $request->has('waqala_paper') ? 1 : 0,
            'e_number_print' => $request->has('e_number_print') ? 1 : 0,
            'company_agreement' => $request->has('company_agreement') ? 1 : 0,
            'navttc_report' => $request->has('navttc_report') ? 1 : 0,
            'driving_license' => $request->has('driving_license') ? 1 : 0,
            'driving_license_undertaking' => $request->has('driving_license_undertaking') ? 1 : 0,
            'driving_license_online_print' => $request->has('driving_license_online_print') ? 1 : 0,
            'degree_copies' => $request->has('degree_copies') ? 1 : 0,
            'agency_undertaking' => $request->has('agency_undertaking') ? 1 : 0,
            'agency_license' => $request->has('agency_license') ? 1 : 0,
            'police_certificate' => $request->has('police_certificate') ? 1 : 0,
            'fir_newspaper' => $request->has('fir_newspaper') ? 1 : 0,
            'medical_report' => $request->has('medical_report') ? 1 : 0
        ];
        
        // Find existing document or create new one
        EmbassyDocument::updateOrCreate(
            ['candidate_id' => $request->candidate_id],
            $documentData
        );

        return redirect()->back()->with('success', 'Documents updated successfully!');
    }
    public function storeProtector(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required',
            'protector' => 'required',
            'date' => 'required',
            'expenses' => 'nullable',
            'notes' => 'nullable',
        ]);

        ProtectorRecord::create([
            'candidate_id' => $request->candidate_id,
            'protector' => $request->protector,
            'date' => $request->date,
            'expenses' => $request->expenses,
            'notes' => $request->notes,
        ]);

        return redirect()->back()->with('success', 'Protector added successfully!');
    }
    public function updateProtector(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required',
            'protector' => 'required',
            'date' => 'required',
            'expenses' => 'nullable',
            'notes' => 'nullable',
        ]);

        ProtectorRecord::updateOrCreate(
            ['candidate_id' => $request->candidate_id],
            [
                'protector' => $request->protector,
                'date' => $request->date,
                'expenses' => $request->expenses,
                'notes' => $request->notes,
            ]
        );

        return redirect()->back()->with('success', 'Protector updated successfully!');
    }
    public function destroyProtector(Request $request , $id)
    {
        $protector = ProtectorRecord::findOrFail($id);
        $protector->delete();
        return redirect()->back()->with('success', 'Protector deleted successfully!');
    }
}
