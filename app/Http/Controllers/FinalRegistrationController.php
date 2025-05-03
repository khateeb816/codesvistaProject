<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\ExperienceRange;
use Illuminate\Http\Request;

class FinalRegistrationController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        $experiences = ExperienceRange::all();
        return view('finalRegistration.index' , compact('candidates' , 'experiences'));
    }
    public function store(Request $request)
    {
        // Set default values for fields that might be null
        $request->merge([
            'education' => $request->education ?? 'Not Specified',
            'experience' => $request->experience ?? '',
            'job_type' => $request->job_type ?? '',
            'from' => $request->from ?? '',
            'to' => $request->to ?? '',
            'degree' => $request->degree ?? '',
            'institute' => $request->institute ?? '',
            'from_prof' => $request->from_prof ?? '',
            'to_prof' => $request->to_prof ?? '',
            'degree_prof' => $request->degree_prof ?? '',
            'institute_prof' => $request->institute_prof ?? '',
            'company' => $request->company ?? '',
            'main_category' => $request->main_category ?? '',
            'sub_category' => $request->sub_category ?? '',
            'working_category' => $request->working_category ?? '',
            'from_exp' => $request->from_exp ?? '',
            'to_exp' => $request->to_exp ?? '',
            'sector' => $request->sector ?? '',
            'type' => $request->type ?? ''
        ]);
        
        // Handle dependent fields that might be null
        if ($request->has('dependent_type') && is_array($request->dependent_type)) {
            for ($i = 0; $i < count($request->dependent_type); $i++) {
                if (isset($request->dependent_age[$i]) && $request->dependent_age[$i] === null) {
                    $request->dependent_age[$i] = '';
                }
                if (isset($request->dependent_name[$i]) && $request->dependent_name[$i] === null) {
                    $request->dependent_name[$i] = '';
                }
                if (isset($request->dependent_relation[$i]) && $request->dependent_relation[$i] === null) {
                    $request->dependent_relation[$i] = '';
                }
            }
        }
        
        // Set default value for resume_name if it's null
        $request->merge([
            'resume_name' => $request->resume_name ?? ''
        ]);
        
        // Log the updated request data
        \Log::info('Updated form submission data:', $request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'candidate_type' => 'required',
            'religion' => 'nullable',
            'title' => 'required',
            'wages_salary' => 'nullable',
            'first_name' => 'required',
            'material_status' => 'nullable',
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
            'address' => 'nullable',
            'mobile' => 'required',
            'email' => 'required|email',
            // Passport Info
            'passport_number' => 'nullable',
            'passport_issue_date' => 'nullable|date',
            'passport_expiry_date' => 'nullable|date',
            'passport_issue_place' => 'nullable',
            // Residence Info
            'residence_country' => 'nullable',
            'residence_state' => 'nullable',
            'residence_province' => 'nullable',
            'residence_district' => 'nullable',
            'residence_city' => 'nullable',
            'residence_zip' => 'nullable',
            'residence_street' => 'nullable',
            'residence_address' => 'nullable',
            // Contact Details
            'alternate_phone' => 'nullable',
            'emergency_contact' => 'nullable',
            'website' => 'nullable',
            'return_address' => 'nullable',
            // Present Status
            'police_case' => 'nullable',
            'political_affiliation' => 'nullable',
            'present_employment' => 'nullable',
            'achievements' => 'nullable',
        ]);
        
        // Create the candidate record
        $candidate = Candidate::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'candidate_type' => $request->candidate_type,
            'religion' => $request->religion,
            'title' => $request->title,
            'wages_salary' => $request->wages_salary,
            'first_name' => $request->first_name,
            'material_status' => $request->material_status,
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
            'address' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            // Passport Info
            'passport_number' => $request->passport_number,
            'passport_issue_date' => $request->passport_issue_date,
            'passport_expiry_date' => $request->passport_expiry_date,
            'passport_issue_place' => $request->passport_issue_place,
            // Residence Info
            'residence_country' => $request->residence_country,
            'residence_state' => $request->residence_state,
            'residence_province' => $request->residence_province,
            'residence_district' => $request->residence_district,
            'residence_city' => $request->residence_city,
            'residence_zip' => $request->residence_zip,
            'residence_street' => $request->residence_street,
            'residence_address' => $request->residence_address,
            // Contact Details
            'alternate_phone' => $request->alternate_phone,
            'emergency_contact' => $request->emergency_contact,
            'website' => $request->website,
            'return_address' => $request->return_address,
            // Present Status
            'police_case' => $request->police_case,
            'political_affiliation' => $request->political_affiliation,
            'present_employment' => $request->present_employment,
            'achievements' => $request->achievements,
        ]);
        
        // Handle qualifications (if any)
        if ($request->has('qualification_degree') && is_array($request->qualification_degree)) {
            for ($i = 0; $i < count($request->qualification_degree); $i++) {
                if (!empty($request->qualification_degree[$i])) {
                    $candidate->qualifications()->create([
                        'duration' => $request->qualification_duration[$i] ?? 'N/A',
                        'degree' => $request->qualification_degree[$i],
                        'institute' => $request->qualification_institute[$i] ?? '',
                    ]);
                }
            }
        }
        
        // Handle professional qualifications (if any)
        if ($request->has('prof_qual_degree') && is_array($request->prof_qual_degree)) {
            for ($i = 0; $i < count($request->prof_qual_degree); $i++) {
                if (!empty($request->prof_qual_degree[$i])) {
                    $candidate->professionalQualifications()->create([
                        'from_year' => $request->prof_qual_from[$i] ?? '',
                        'to_year' => $request->prof_qual_to[$i] ?? '',
                        'degree' => $request->prof_qual_degree[$i],
                        'institute' => $request->prof_qual_institute[$i] ?? '',
                    ]);
                }
            }
        }
        
        // Handle experience (if any)
        if ($request->has('experience_company') && is_array($request->experience_company)) {
            for ($i = 0; $i < count($request->experience_company); $i++) {
                if (!empty($request->experience_company[$i])) {
                    $candidate->experiences()->create([
                        'company' => $request->experience_company[$i],
                        'main_category' => $request->experience_main_category[$i] ?? '',
                        'sub_category' => $request->experience_sub_category[$i] ?? '',
                        'working_category' => $request->experience_working_category[$i] ?? '',
                        'from_year' => $request->experience_from[$i] ?? '',
                        'to_year' => $request->experience_to[$i] ?? '',
                        'sector' => $request->experience_sector[$i] ?? '',
                        'type' => $request->experience_type[$i] ?? '',
                    ]);
                }
            }
        }
        
        // Handle dependents (if any)
        if ($request->has('dependent_type') && is_array($request->dependent_type)) {
            for ($i = 0; $i < count($request->dependent_type); $i++) {
                if (!empty($request->dependent_type[$i])) {
                    $candidate->dependents()->create([
                        'type' => $request->dependent_type[$i],
                        'gender' => $request->dependent_gender[$i] ?? '',
                        'age' => $request->dependent_age[$i] ?? null,
                    ]);
                }
            }
        }
        
        // Handle resume files (if any)
        if ($request->hasFile('resume_file')) {
            $file = $request->file('resume_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('resumes', $filename, 'public');
            
            $candidate->resumes()->create([
                'name' => $request->resume_name ?? pathinfo($filename, PATHINFO_FILENAME),
                'file_path' => 'resumes/' . $filename,
            ]);
        }
        
        return redirect()->route('finalRegistration')->with('success', 'Candidate registered successfully!');
    }
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        $experiences = ExperienceRange::all();
        return view('finalRegistration.edit' , compact('candidate' , 'experiences'));
    }
    public function update(Request $request , $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'experience' => $request->experience,
            'profession' => $request->profession,
            'address' => $request->address,
        ]);
        return redirect()->route('finalRegistration');
    }
    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();
        return redirect()->route('finalRegistration');
    }
}
