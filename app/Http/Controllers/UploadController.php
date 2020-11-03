<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upc;
use App\Models\Category;

use App\Models\Upindi;
 
use Auth;


class UploadController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $user_id = Auth::user()->id;

        $upcs['upcs'] = Upindi::where('user_id',$user_id)->orderby('timestamp','desc')->paginate(10) ;
       
        return view('mywork')->with($upcs) ;

    }
   
    
 
    
    public function edit(Request $request, $id)
    {
 
 
        $request->validate([
        
            'upc' => 'required',
            'category_full' => 'required',
            'subcat_full' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'short_desc' => 'required',
    
            'high_cost' => 'required',
            'benefit_qt' => 'required',
            'benefit_uom_wow' => 'required',
            'verify_date' => 'required',
         

        ]);

 
  


        $time = $request->input('time');
        $staff = $request->input('staff');
    
        $upc = $request->input('upc');          
        
      
  
  
        $verify_date = $request->input('verify_date');
        $category_full = $request->input('category_full');
        $subcat_full = $request->input('subcat_full');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $short_desc = $request->input('short_desc');
 
        $high_cost = $request->input('high_cost');
  
        $benefit_qt = $request->input('benefit_qt');
        
        $benefit_uom_wow = $request->input('benefit_uom_wow');
   
    
 
         $end_date=$request->input('end_date');
  
        $plu_indicator=$request->input('plu_indicator');
        $broadband_flag=$request->input('broadband_flag');
    
        $benefit_uom_wow = strtoupper($benefit_uom_wow);



        Upc::where('id', $id)
              ->update([
 
       
                 'edit_date'=>$time,
                 'edit_staff'=>$staff,
        
    
               'category_full'=>   $category_full,
            'subcat_full'=>     $subcat_full, 
               'brand'=>  $brand, 
              'description'=>    $description,
               'short_desc'=>   $short_desc,
               'long_desc'=>   $short_desc,
      
  
               'high_cost'=>   $high_cost,
            'benefit_uom_wow'=>    $benefit_uom_wow,
            'benefit_qt' => $benefit_qt,
           'end_date'=>       $end_date,
           'verify_date'=>       $verify_date, 
           'plu_indicator'=>$plu_indicator,
           'broadband_flag'=>$broadband_flag,
                 
                 ]);
 




              return redirect()->back()->with('approved','The item( '.$upc.' ) has been updated.');

 

    }


    public function delete($id)
    {
 
        $staff = Auth::user()->name;
        $upc = Upindi::find($id)->upc;
        Upindi::where('id', $id)->delete();

              return redirect()->back()->with('approved','The item( '.$upc.' ) has been removed.');;
 
        //return $arr;

    }


    public function apl_check_m()
    {
 
  Return view('apl_check_m');

    }


 
     


    public function apl_check_m_output(Request $request)
    {

        if($request){

            function explodeX( $delimiters, $string )
            {
                return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
            }


       $sentupcs = $request->input('upc');
      $sentupcs = explodeX(array(",",".","|",":","\r\n", " ","\n", "\r"), $sentupcs);
     // dd($sentupcs);
        //$upcs = Upc::search($sentupcs)->get();
        $upcs = Upc::whereIn('upc',$sentupcs)->get();
  
            $inupcs = [];      
        foreach($upcs as $c){

array_push($inupcs,$c->upc);

 

        }


       }

     //   dd($upcs);

return view('apl_check_m_output', compact('upcs','sentupcs','inupcs'));
 
    
    //       return redirect()->back()->with('approved','The item( '.$upc.' ) has been removed.');;
 

    }


 
     
     
     
      







}