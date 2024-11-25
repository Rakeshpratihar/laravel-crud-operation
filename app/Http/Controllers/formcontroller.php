<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formcontroller extends Controller
{
    function getform(Request $rp){
   //return $rp->input();
   $gd=new form();
   $gd->name=$rp->myname;
   $gd->email=$rp->Email;
   $gd->phone=$rp->Phone;
   $gd->address=$rp->Address;
   $gd->save();
   return redirect("display");
    }
function getdis(){
      //$data=form::all();
        $data=form::paginate(3);
        return view("display",["da"=>$data]);
}
function getdelete($id){
    $isd=form::destroy($id);
    if($isd){
       // echo $isd;
      return  redirect("display");
    }
}
function getedit($id){
    $val=form::find($id);
    return view("editview",["inp"=>$val]);
}
function getupdate(Request $rp,$id){
    $val=form::find($id);
    $val->name=$rp->Name;
    $val->email=$rp->Email;
    $val->phone=$rp->Phone;
    $val->address=$rp->Address;
    if($val->save()){
        return redirect("display");
    }

}
function mysearch(Request $request){
  $sdata=form::where('name','LIKE',"%$request->datasearch%")->get();
  return view("display",["da"=>$sdata,'search'=>$request->datasearch]);
//   $a= $request->datasearch;
//   echo $a;
}

function delall(Request $rp){
   $va=form::destroy($rp->ids);
   if($va){
    return redirect("display");
   }
   else{
    echo "no data deleted";
   }
}
}