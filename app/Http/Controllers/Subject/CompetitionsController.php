<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Competition;

use \Auth;

class CompetitionsController extends Controller
{
    public function index()
    {
        return view('subject/competitions/index');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'active_year' => 'required',
            'competition_title' => 'required',
            'competition_theme' => 'required',
            'apply_date' => 'required',
            'end_date' => 'required',
            'active_start_date' => 'required',
            'active_end_date' => 'required',
            // 'notice_file_url' => 'required',
        ]);

        $competition = new Competition;
        $competition->active_year = $request->get('active_year');
        $competition->competition_title = $request->get('competition_title');
        $competition->competition_theme = $request->get('competition_theme');
        $competition->apply_date = $request->get('apply_date');
        $competition->end_date = $request->get('end_date');
        $competition->active_start_date = $request->get('active_start_date');
        $competition->active_end_date = $request->get('active_end_date');
        $competition->notice_file_url = $request->get('notice_file_url');
        $competition->subjects_id = $request->get('subjects_id');
        $competition->is_active = 1;

        if ($competition->save()) {
            return redirect('subject/competitions');
        } else {
            return redirect()->back()->withInput()->withErrors('新建失败！');
        }
    }

    public function list()
    {
        $competitions = Competition::all();
        return $competitions;
    }
}
