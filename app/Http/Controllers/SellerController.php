<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sell = Seller::with('user')->get();
        return view('admin.seller.seller',compact('sell'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   Validator::make($request->all(), [
        'full_name' => ['required'],
        'email' => 'required|email|unique:users,email',
    ])->validate();
       $password = Hash::make($request->password);
        $sel = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => $password
        ]);
        $sell = Seller::create([
        'full_name' => $request->full_name,
        'father_name' => $request->father_name,
        'mother_name' => $request->mother_name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'alt_mobile' => $request->alt_mobile,
        'present_address' => $request->present_address,
        'permanent_address' => $request->permanent_address,
        'bank_name' => $request->bank_name,
        'account_number' => $request->account_number,
        'branch' => $request->branch, 
        'bank_address' => $request->bank_address,
        'swift_code' => $request->swift_code,
        'website_address' => $request->website_address,
        'bkash' => $request->bkash,
        'nagad' => $request->nagad,
        'rocket' => $request->rocket,
        'sure_cash' => $request->sure_cash,
        'whatsapp' => $request->whatsapp,
        'telegram' => $request->telegram,
        'viber' => $request->viber,
        'nid' => $request->nid,
        'passport' => $request->passport,
        'facebook' => $request->facebook,
        'linkedin' => $request->linkedin,
        'skype' => $request->skype,
        'user_id' => $sel->id
         ]);
        
         return redirect('admin/sellers')->with('message', 'IT WORKS!');

 
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
        $fetch = seller::where('id', $id)->first();

        return view('admin.seller.edit',compact('fetch'));
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
        if (empty($request->password)) {
            $fetch = seller::where('id', $id)->first();

            $sel = User::where('id', $fetch->user_id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'password' => $fetch->password
            ]);

            $chane = seller::where('id', $id)->update([
                'full_name' => $request->full_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'alt_mobile' => $request->alt_mobile,
                'present_address' => $request->present_address,
                'permanent_address' => $request->permanent_address,
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'branch' => $request->branch, 
                'bank_address' => $request->bank_address,
                'swift_code' => $request->swift_code,
                'website_address' => $request->website_address,
                'bkash' => $request->bkash,
                'nagad' => $request->nagad,
                'rocket' => $request->rocket,
                'sure_cash' => $request->sure_cash,
                'whatsapp' => $request->whatsapp,
                'telegram' => $request->telegram,
                'viber' => $request->viber,
                'nid' => $request->nid,
                'passport' => $request->passport,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'skype' => $request->skype,
                'user_id' => $sel->id
            ]);
        }else {
            $fetch = seller::where('id', $id)->first();

            $password = Hash::make($request->password);

            $sel = User::where('id',$fetch->user_id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'password' => $password
            ]);

            $chane = Seller::where('id', $id)->update([
                'full_name' => $request->full_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'alt_mobile' => $request->alt_mobile,
                'present_address' => $request->present_address,
                'permanent_address' => $request->permanent_address,
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'branch' => $request->branch, 
                'bank_address' => $request->bank_address,
                'swift_code' => $request->swift_code,
                'website_address' => $request->website_address,
                'bkash' => $request->bkash,
                'nagad' => $request->nagad,
                'rocket' => $request->rocket,
                'sure_cash' => $request->sure_cash,
                'whatsapp' => $request->whatsapp,
                'telegram' => $request->telegram,
                'viber' => $request->viber,
                'nid' => $request->nid,
                'passport' => $request->passport,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'skype' => $request->skype,
                'user_id' => $sel->id
            ]);
        }

        return redirect('admin/sellers')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Seller::where('id',$id)->delete();

        return redirect('admin/sellers')->with('message', 'Deleted Successfully');
    }
}
