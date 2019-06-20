<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\basicinfo;
use App\experience;
use App\education;
use App\project;
use App\refrees;
use App\skills;
use App\technicalskill;

use Illuminate\Support\Facades\DB;

class savecv extends Controller
{
    //
    public function index(){

        $basicinfo = DB::select(DB::raw('select max(id) as max from basicinfos'));
        $num = (int)$basicinfo[0]->max;
        
        
            return view('index2')->with('count',$num+1);
        
        
        }
        public function store(Request $request){

            //dd($request->all());
            $basicinfo = new basicinfo();

            $this->validate ($request,[
            'uname'=>'required|max:100|min:5',
            'dob'=>'required',
            'nic'=>'required',
            'gender'=>'required',
            'statues'=>'required',
            'school'=>'required',
            'ucontact'=>'required|max:11|min:10',
            'address'=>'required'

        ]);
         
           $basicinfo->full_name=$request->uname;
           $basicinfo->birth=$request->dob;
           $basicinfo->nic=$request->nic;
           $basicinfo->gender=$request->gender;
           $basicinfo->statues=$request->statues;
           $basicinfo->school=$request->school;
           $basicinfo->contact=$request->ucontact;
           $basicinfo->address=$request->address;


      
           
           $basicinfo->save();
   
           $data=basicinfo::all();
           //dd($data);
   
          
        //    $experience = new experience(); 

//            foreach($request->input('experiance') as key=>$value){
// dcd

//            };

        //    $experience->experiance=$request->experiance;
        //    $experience->u_id=$request->uid;
           
        //    $experience->save();
        //    $experience->save();
        //    $experience->experiance=$request->experiance;
        //    $experience->experiance=$request->experiance;
             $experience = $request->get("experiance");
             $uid = $request->get("uid");

            // dd($uid);

             foreach($experience as $key => $value){
                $tempexperience = new experience();
                $tempexperience->experiance =  $value;
                $tempexperience->u_id = $uid; 
                $tempexperience->save();
             }

             $skills = $request->get("skills");
             $uid = $request->get("uid");

            // dd($uid);

             foreach($skills as $key => $value){
                $tempskills = new skills();
                $tempskills->skill =  $value;
                $tempskills->u_id = $uid; 
                $tempskills->save();
             }

             $education  = $request->get("education");
             $uid = $request->get("uid");

            // dd($uid);

             foreach($education as $key => $value){
                $tempeducation  = new education ();
                $tempeducation ->education  =  $value;
                $tempeducation ->u_id = $uid; 
                $tempeducation ->save();
             }
        
             $project  = $request->get("project");
             $uid = $request->get("uid");

            // dd($uid);

             foreach($project as $key => $value){
                $tempproject  = new project ();
                $tempproject ->project  =  $value;
                $tempproject ->u_id = $uid; 
                $tempproject ->save();
             }

             $tecnicalskill  = $request->get("technical");
             $uid = $request->get("uid");

            // dd($uid);

             foreach($tecnicalskill as $key => $value){
                $temptecnicalskill  = new technicalskill ();
                $temptecnicalskill ->technical =  $value;
                $temptecnicalskill ->u_id = $uid; 
                $temptecnicalskill ->save();

                return redirect()->back();
             }
    
        }

        public function display(){
            $basicinfo = basicinfo::all();
            return view('/table')->with('basicinfo',$basicinfo);
        }

        public function view ($id){
            $basicinfo =basicinfo::find($id);
            return view ('/viewbasicinfo1')->with('basicinfo',$basicinfo);
        }

    
}
