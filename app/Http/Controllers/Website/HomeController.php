<?php

namespace App\Http\Controllers\Website;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\{ DurashineLead,EzyBuildLead, LysaghtLead };
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
            'name' => 'required|min:1|max:100',
            'phone' => 'required|min:10|max:13',
            // 'product' => 'required',
            // 'quantity' => 'required|min:1|max:255',
            'email' => 'required|email',
            'profession' => 'required|min:1|max:200',
            'company_name' => 'required|min:1|max:100',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required|min:1|max:500',
        ]);

        try{

            $store  = LysaghtLead::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'profession' => $request->profession,
                // 'product' => $request->product,
                // 'quantity' => $request->quantity,
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
                return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger'])->withInput();
            }
        }catch(Exception $e){
            Log::error('Failed to create enquiry due to '.$e->getMessage());
            return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger'])->withInput();
        }

    }

    public function durashine() {

        Meta::prependTitle('Durashine')
            ->setKeywords('askdhaksdhj')
            ->setDescription('askjdaksd');

        $data['states'] = $this->getStates();

        return view('website.durashine', compact('data'));

    }

    public function durashineStore(Request $request) {

        //dd($request->all());

        $request->validate([
            'name' => 'required|min:1|max:100',
            'phone' => 'required|min:10|max:13',
            'email' => 'required|email',
            // 'company_name' => 'required|min:1|max:100',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required|min:1|max:500',
        ]);

        try{

            $store  = DurashineLead::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
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
                return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger'])->withInput();
            }
        }catch(Exception $e){
            Log::error('Failed to create enquiry due to '.$e->getMessage());
            return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger'])->withInput();
        }

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
            'name' => 'required|min:1|max:100',
            'phone' => 'required|min:10|max:13',
            'email' => 'required|email',
            'solution' => 'required',
            'quantity' => 'required|min:1|max:255',
            'company_name' => 'required|min:1|max:100',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required|min:1|max:500',
        ]);

        try{

            $store  = EzyBuildLead::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'solution' => $request->solution,
                'quantity' => $request->quantity,
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
                return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger'])->withInput();
            }
        }catch(Exception $e){
            Log::error('Failed to create enquiry due to '.$e->getMessage());
            return back()->with(['message' => 'Enquiry creation failed', 'alert-class' => 'alert-danger'])->withInput();
        }

    }
}
