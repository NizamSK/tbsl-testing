<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DurashineLead;
use App\Models\LysaghtLead;
use App\Exports\DurashineLeadsExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    function index() {
        return view('admin.dashboard.home');
    }

    function getDurashineLeads(){

        $data['leads']  = DurashineLead::with(['State','City'])->get();

        if(request()->has('export')){

            return Excel::download(new DurashineLeadsExport($data), 'Durashine-Leads-'.\Auth::id().'-'.now()->toDateTimeString().'.xlsx');

        }

        return view('admin.leads.durashine', compact('data'));
    }

    function getLysaghtLeads(){

        $data['leads']  = LysaghtLead::with(['State','City'])->get();

        return view('admin.leads.lysaght', compact('data'));
    }



}
