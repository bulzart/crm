<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    public function dnotifications(){
       notification::where('receiver_id',Auth::guard('admins')->user()->id)->where('done',0)->update(['done'=>1]);
    }

    public function searchword(){
        $data =  appointment::orderBy('name','asc')->get();
        return view('costumers',compact('data'));
    }
    public function costumers(Request $request){
        $searchname = $request->searchname;
        $date1 = date('Y-m-d', strtotime($request->searchdate1));
        $n = date('Y-m-d', strtotime($request->searchdate2));
        $date2 = date('Y-m-d',strtotime($n . "+1 days"));
        if(!isset($request->searchdate1) && !isset($request->searchdate2) && isset($request->searchname)) {
            $data = appointment::where('lname', 'like', '%' . $searchname . '%')
                ->orWhere('name', 'like', '%' . $searchname . '%')->get();
        }elseif(isset($request->searchdate1) && isset($request->searchdate2) && !isset($request->searchname)){
            $data = appointment::whereBetween('created_at',[$date1,$date2])->get();
        }
        else{
           $data = appointment::where('lname', 'like', '%' . $searchname . '%')
           ->orWhere('name', 'like', '%' . $searchname . '%')->whereBetween('created_at',[$date1,$date2])->get();
        }
            return view('costumers', compact('data'));

      }
      
      public function adddata($req,$object)
      {
        $cnt = 0;
        if(isset($req['job'])){
        if($req['job'] != null && $req['job'] != ''){
          $object['job'] = $req['job'];
        }}
        if(isset($req['email'])){
        if($req['email'] != null && $req['email'] != ''){
          $object['email'] = $req['email'];
        }}
        if(isset($req['phone'])){
        if($req['phone'] != null && $req['phone'] != ''){
          $object['phone'] = $req['phone'];
        }}
        if(isset($req['kanton'])){
        if($req['kanton'] != null && $req['kanton'] != ''){
          $object['kanton'] = $req['kanton'];
        }}
        if(isset($req['lenker'])){
        if($req['lenker'] != null && $req['lenker'] != ''){
          $object['lenker'] = $req['lenker'];
        }}
        if(isset($req['comment'])){
        if($req['comment'] != null && $req['comment'] != ''){
          $object['comment'] = $req['comment'];
        }}
        if(isset($req['preinsurer'])){
        if($req['preinsurer'] != null && $req['preinsurer'] != ''){
          $object['preinsurer'] = $req['preinsurer'];
        }}
        if(isset($req['leasingname'])){
        if($req['leasingname'] != null && $req['leasingname'] != ''){
          $object['leasingname'] = $req['leasingname'];
          }}
          if(isset($req['nationality'])){
        if($req['nationality'] != null && $req['nationality'] != ''){
          $object['nationality'] = $req['nationality'];
        }}
        if(isset($req['yearpurchase'])){
        if($req['yearpurchase'] != null && $req['yearpurchase'] != ''){
          $object['yearpurchase'] = $req['yearpurchase'];
        }}
        if(isset($req['deductionpart'])){
        if($req['deductionpart'] != null && $req['deductionpart'] != ''){
          $object['deductionpart'] = $req['deductionpart'];
        }}
        if(isset($req['martialstatus'])){
        if($req['martialstatus'] != null && $req['martialstatus'] != ''){
          $object['martialstatus'] = $req['martialstatus'];
        }}
        if(isset($req['numberofrooms'])){
        if($req['numberofrooms'] != null && $req['numberofrooms'] != ''){
          $object['numberofrooms'] = $req['numberofrooms'];
        }}
        if(isset($req['paymentrhythm'])){
        if($req['paymentrhythm'] != null && $req['paymentrhythm'] != ''){
          $object['paymentrhythm'] = $req['paymentrhythm'];
        }}
        if(isset($req['thingscarried'])){
        if($req['thingscarried'] != null && $req['thingscarried'] != '' ){
          $object['thingscarried'] = $req['thingscarried'];
        }}
        if(isset($req['amountpermonth'])){
        if($req['amountpermonth'] != null && $req['amountpermonth'] != ''){
          $object['amountpermonth'] = $req['amountpermonth'];
        }}
        if(isset($req['numberofpeople'])){
        if($req['numberofpeople'] != null && $req['numberofpeople'] != ''){
          $object['numberofpeople'] = $req['numberofpeople'];
        }}
        if(isset($req['startinsurance'])){
        if($req['startinsurance'] != null && $req['startinsurance'] != '' ){
          $object['startinsurance'] = $req['startinsurance'];
        }}
        if(isset($req['commentatpolice'])){
        if($req['commentatpolice'] != null && $req['commentatpolice'] != ''){
          $object['commentatpolice'] = $req['commentatpolice'];
        }}
        if(isset($req['insuranceamount'])){
        if($req['insuranceamount'] != null && $req['insuranceamount'] != ''){
          $object['insuranceamount'] = $req['insuranceamount'];
        }}
        if(isset($req['residencepermit'])){
        if($req['residencepermit'] != null && $req['residencepermit'] != ''){
          $object['residencepermit'] = $req['residencepermit'];
        }}
      
        if(isset($req['contractstartdate'])){
        if($req['contractstartdate'] != null && $req['contractstartdate'] != ''){
          $object['contractstartdate'] = $req['contractstartdate'];
        }}
        if(isset($req['firstcommissioning'])){
        if($req['firstcommissioning'] != null && $req['firstcommissioning'] != ''){
          $object['firstcommissioning'] = $req['firstcommissioning'];
        }}
        if(isset($req['nationalityfinance'])){
        if($req['nationalityfinance'] != null && $req['nationalityfinance'] != ''){
          $object['nationalityfinance'] = $req['nationalityfinance'];
        }}
        if(isset($req['employmentrelationship'])){
        if($req['employmentrelationship'] != null && $req['employmentrelationship'] != '' ){
          $object['employmentrelationship'] = $req['employmentrelationship'];
        }}
        if(isset($req['wishedadditionalthings'])){
        if($req['wishedadditionalthings'] != null && $req['wishedadditionalthings'] != ''){
          $object['wishedadditionalthings'] = $req['wishedadditionalthings'];
        }}
        if(isset($req['numberofpeopleinsurance'])){
        if($req['numberofpeopleinsurance'] != null && $req['numberofpeopleinsurance'] != ''){
          $object['numberofpeopleinsurance'] = $req['numberofpeopleinsurance'];
        }}
        if(isset($req['dateofissueofdriverslicense'])){
        if($req['dateofissueofdriverslicense'] != null && $req['dateofissueofdriverslicense'] != ''){
          $object['dateofissueofdriverslicense'] = $req['dateofissueofdriverslicense'];
        }}
        if(isset($req['whichcompaniesshouldmakeanoffer'])){
        if($req['whichcompaniesshouldmakeanoffer'] != null && $req['whichcompaniesshouldmakeanoffer'] != '' ){
          $object['whichcompaniesshouldmakeanoffer'] = $req['whichcompaniesshouldmakeanoffer'];
        }}
return $object;


        
  
      
          
        
     
     

      }


    public function tasks(){
      $cnt = 0;
      $cnt1 = 0;
   $tasks = appointment::where('completed',0)->get();
 $realopen = [];
 $pending = [];
 $opencnt = 0;
 $pendingcnt = 0;
   foreach($tasks as $task){
   if(!$this->isdone($task)){
     $pending[$cnt] = $task;
     $cnt++;
     $pendingcnt++;
   }
   if($task->data == null){
     $realopen[$cnt1] = $task;
     $cnt1++;
     $opencnt++;
   }
  }


   $cnt = 0;
   $costumers = appointment::all();
   $todaydate = Carbon::now()->format('m-d');
  
   $birthdays = [];
   foreach($costumers as $cos){
      if(substr($cos->birthday,5) == $todaydate)
      {
          $birthdays[$cnt]['birthday'] = $cos->birthday;
          $now = (int) Carbon::now()->format('Y');
          $birth = (int) substr($cos->birthday,-10,-6);
          $birthdays[$cnt]['age'] = $now - $birth;
          $birthdays[$cnt]['id'] = $cos->id;
          $birthdays[$cnt]['name'] = ucfirst($cos->name);
          $birthdays[$cnt]['lname'] = ucfirst($cos->lname);
          $cnt++;
      }

   }
  
   return view('tasks',compact('opencnt','pendingcnt','realopen','pending','birthdays'));
  }
  

  
	 public function documentform(Request $req,$id){
         $req->validate([
           'id' => 'exists:csapp,id'
         ]);

        $data = (array) $req->all();
       

        $csapp = appointment::find($id);
        $data2 = (array) json_decode($csapp->data);
       
        

  if($req->file('preinsurer') != null){
      $data1 = $data['preinsurer'];
      $file = $req->file('preinsurer');
      $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
      $path = $file->storeAs('img',$filename);
      $data['preinsurer'] = filter_var($path,FILTER_SANITIZE_STRING);
    }
     if($req->file('idnecessary') != null){
        $file = $req->file('idnecessary');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['idnecessary'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('noticeby') != null){
        $file = $req->file('noticeby');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['noticeby'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('powerofattorney') != null){
        $file = $req->file('powerofattorney');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['powerofattorney'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('uploadpolice') != null){
        $file = $req->file('uploadpolice');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('uploadvehicleid') != null){
        $file = $req->file('uploadvehicleid');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('uploadpolice2') != null){
        $file = $req->file('uploadpolice2');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice2'] = filter_var($path,FILTER_SANITIZE_STRING);
     }

    $data['phone'] = $data['countryCode'] . $data['phonenumber'];
     unset($data['countryCode'],$data['phonenumber']);
    $datas = $this->adddata($data,$data2);
     $csapp->data = json_encode($datas);

        $csapp->save();
    

  }


      

    public function isdone($object):bool{

      if($object['job'] != null && $object['email'] != null && $object['lenker'] != null && $object['lenker'] != '' && $object['comment'] != null && $object['comment'] != '' && $object['kmstand'] != null && $object['kmstand'] != "" && $object['society'] != null && $object['socity'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['insurance'] != null && $object['insurance'] != '' && $object['carcomment'] != null && $object['carcomment'] != '' && $object['preinsurer'] != null && $object['preinsurer'] != '' && $object['idnecessary'] != null && $object['idnecessary'] != '' && $object['leasingname'] != null && $object['leasingname'] != '' && $object['nationality'] != null && $object['nationality'] != '' && $object['nationality'] != '' && $object['nationality'] != null && $object['uploadpolice'] != null && $object['uploadpolice'] != '' && $object['yearpurchase'] != null && $object['yearpurchase'] != '' && $object['thingscarried'] != null && $object['thingscarried'] != '' && $object['startinsurance'] != null && $object['startinsurance'] != '' && $object['commentatpolice'] != null && $object['commentatpolice'] != '' && $object['powerofattorney'] != null && $object['powerofattorney'] != '' && $object['insuranceamount'] != null && $object['insuranceamount'] != '' && $object['residencepermit'] != null && $object['residencepermit'] != '' && $object['uploadvehicleid'] != null && $object['uploadvehicleid'] != '' && $object['contractstartdate'] != null && $object['contractstartdate'] != '' && $object['firstcommissioning'] != null && $object['firstcommissioning'] != '' &&  $object['nationalityfinance'] != null && $object['nationalityfinance'] != '' && $object['wishedadditionalthings'] != null && $object['wishedadditionalthings'] != '' && $object['dateofissueofdriverslicense'] != null && $object['dateofissueofdriverslicense'] != '' && $object['whichcompaniesshouldmakeanoffer'] != null && $object['whichcompaniesshouldmakeanoffer'] != '') { return true;}
      return false;

   }


}



