<?php

namespace App\Http\Controllers\Website;

use Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\DurashineLead;
use App\Models\LysaghtLead;
use Butschster\Head\Facades\Meta;

class HomeController extends BaseController
{
    public function lysaght() {

        Meta::prependTitle('Lysaght')
            ->setKeywords('askdhaksdhj')
            ->setDescription('askjdaksd');

        $data['states'] = $this->getStates();

        return view('website.lysaght', compact('data'));

    }

    public function lysaghtStore(Request $request) {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'profession' => 'required',
            'company_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required',
        ]);

        try{

            $store  = LysaghtLead::create([
                'campaign_id' => $request->campaign_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'profession' => $request->profession,
                'company_name' => $request->company_name,
                'state' => $request->state,
                'city' => $request->city,
                'message' => $request->message,
                'created_at' => now()->toDateTimeString(),
                'ip' => $this->getUserIpAddr(),
                'previous_url' =>url()->previous(),
            ]);

            if($store){
                return back()->with(['message' => 'Enquiry saved successfully', 'alert-class' => 'alert-success']);
            }else{
                return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger']);
            }


        }catch(Exception $e){
            dd($e->getMessage());
        }

        return view('website.lysaght');

    }

    public function durashine() {

        Meta::prependTitle('Durashine')
            ->setKeywords('askdhaksdhj')
            ->setDescription('askjdaksd');

        $data['states'] = $this->getStates();

        return view('website.durashine', compact('data'));

    }

    public function durashineStore(Request $request) {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'profession' => 'required',
            'company_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required',
        ]);

        try{

            $store  = DurashineLead::create([
                'campaign_id' => $request->campaign_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'profession' => $request->profession,
                'company_name' => null,
                'state' => $request->state,
                'city' => $request->city,
                'message' => $request->message,
                'created_at' => now()->toDateTimeString(),
                'ip' => $this->getUserIpAddr(),
                'previous_url' =>url()->previous(),
            ]);

            if($store){
                return back()->with(['message' => 'Enquiry saved successfully', 'alert-class' => 'alert-success']);
            }else{
                return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger']);
            }


        }catch(Exception $e){
            dd($e->getMessage());
        }

        return view('website.lysaght');

    }

    public function ezybuild() {

        Meta::prependTitle('Ezybuild')
            ->setKeywords('askdhaksdhj')
            ->setDescription('askjdaksd');

        $data['states'] = $this->getStates();

        return view('website.ezybuild', compact('data'));

    }

    public function ezybuildStore(Request $request) {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'company_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required',
        ]);

        try{

            $store  = LysaghtLead::create([
                'campaign_id' => $request->campaign_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'company_name' => $request->company_name,
                'state' => $request->state,
                'city' => $request->city,
                'message' => $request->message,
                'created_at' => now()->toDateTimeString(),
                'ip' => $this->getUserIpAddr(),
                'previous_url' =>url()->previous(),
            ]);

            if($store){
                return back()->with(['message' => 'Enquiry saved successfully', 'alert-class' => 'alert-success']);
            }else{
                return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger']);
            }


        }catch(Exception $e){
            dd($e->getMessage());
        }

        return view('website.lysaght');

    }
}
