<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidate;
use Illuminate\Http\Request;
use View;
use App\Imports\CandidateImport;
use App\Models\CandidateTemp;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\TempCv;
use Validator;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        // return $candidates[0]->CandidateSkills;
        $view = View::make('adminpanel/pages/candidate_index', compact('candidates'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('footer','adminpanel/partials/footer');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function candidateCV()
    {
        $tempcv = TempCv::all();
        $view = View::make('adminpanel/pages/candidate_cv', compact('tempcv'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('footer','adminpanel/partials/footer');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import(Request $request)
    {
        $request->request->add([
        'select_file_tamplate'       => $request->candidates,
        ]);
        $rules = array(
            'select_file_tamplate'  => 'required|mimes:xlsx'
        );
        $messages = array(
            'select_file_tamplate' => 'select xlsx file!',
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }
        else
        {
            Excel::import(new CandidateImport, $request->file('candidates'));
            return redirect()->back()->with('success', 'All good!');
        }

    }

    public function showImport()
    {
        $view = View::make('adminpanel/pages/candidate_import');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('footer','adminpanel/partials/footer');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function indexImported()
    {
        $candidates = CandidateTemp::all();

        $view = View::make('adminpanel/pages/candidate_index', compact('candidates'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('footer','adminpanel/partials/footer');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }
}
