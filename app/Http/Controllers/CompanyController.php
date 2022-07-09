<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index (){
        $companies = Company::all();
        return view('pages.home', compact('companies'));
    }

    public function addCompany(){
        return view('pages.add-company');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'company'=>'required|unique:companies|max:255',
            'code'=>'required'
        ]);

        Company::create([
            'company'=>request('company'),
            'code'=>request('code'),
            'vat'=>request('vat'),
            'address'=>request('address'),
            'director'=>request('director'),
            'description'=>request('description')
        ]);
        return redirect('/');

//        dd($request->all());
    }
    public function showCompany(Company $company){
        return view('pages.company', compact('company'));
    }

    public function deleteCompany(Company $company){
        $company->delete();
        return redirect('/');
    }

    public function updateCompany(Company $company){
        return view('pages.update-company',compact('company'));
    }

    public function storeUpdate(Company $company, Request $request){
        Company::where('id',$company->id)->update($request->only(['company','code','director','vat','address','description','logo']));
        return redirect('/imone/'.$company->id);
    }

}
