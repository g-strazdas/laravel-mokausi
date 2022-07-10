<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','showCompany']]);
    }

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
            'code'=>'required',
            'logo'=>'mimes:jpeg,jpg,png,gif'
        ]);

        if(request()->hasFile('logo')) {
            $path = $request->file('logo')->store('public/images');
            $fileName = str_replace('public/images/', '', $path);
            //pakeista (buvo 'public'), kad nesaugoti į db formatu images/failoPavadinimas.jpg
//          //pakeista ir company.blade.php <img src="{{asset('/storage/images/'.$company->logo)}}" alt="">
            //jei po ddev artisan storage:link komandos nerodo img - ištrinti public/storage failą ir
            //komandą pakartoti.
        }

        Company::create([
            'company'=>request('company'),
            'code'=>request('code'),
            'vat'=>request('vat'),
            'address'=>request('address'),
            'director'=>request('director'),
            'description'=>request('description'),
            'logo'=>$fileName,
            'user_id'=> Auth::id()
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
        if(Gate::denies('edit-company',$company)){
            dd('Tu neturi teisės atlikti šį veiksmą');
        }
        return view('pages.update-company',compact('company'));
    }

    public function storeUpdate(Company $company, Request $request){
        Company::where('id',$company->id)->update($request->only(['company','code','director','vat','address','description','logo']));
        return redirect('/imone/'.$company->id);
    }

}
