<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('role:Voter', ['except' => ['thanks']]);
    }

    /**
    * Display a listing of all candidates to vote for .
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $presidents = Candidate::where('position', 'President')->where('status', '1')->get();
        $vice_presidents = Candidate::where('position', 'Vice President')->where('status', '1')->get();
        $treasurers = Candidate::where('position', 'Treassurer')->where('status', '1')->get();
        $secretaries = Candidate::where('position', 'Secretary')->where('status', '1')->get();



        return view('vote.index', compact('presidents','vice_presidents','treasurers','secretaries'));
    }

    /**
    * Store a newly created vote request .
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $positions = ['president','vice_president','treasurer','secretary'];
        $candidates = $request->all();
        for($x = 0; $x < 4; $x++) {

            $id = $candidates[$positions[$x]] ;
            if($id){
                $candidate = Candidate::findOrFail($id);
                $candidate->votes = $candidate->votes + 1;
                $candidate->save();
            }
        }

        $user = Auth::user();
        $user->status = '1';
        $user->save();

        return redirect('/vote/thanks');
    }

    /**
    * Display the thanks page.
    * @return \Illuminate\Http\Response
    */
    public function thanks()
    {
        return view('vote.thanks');
    }
}