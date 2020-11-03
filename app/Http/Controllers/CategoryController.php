<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $arr = Category::all();
       return view('search_cate')->with('upcs',$arr);
        // return view('t1')->with('errs',$arr);


    }


    
    public function general(Request $request)
    {
    
  
        if($request->ajax())
        {

         $output = '';
         $query = $request->get('query');

      
      if($query !== ''){
$data = Category::search($query)->orderby('cate')->get();  
 



//$data = Category::all();

      }else{

        $data = 0;
      }
   
            
          
          if($data !== 0 ){
      $output = array();
             foreach($data as $d){
   
               $cate = $d->cate;
               $subcate = $d->subcate;
               $cate_desc = $d->cate_desc;
               $sub_desc = $d->sub_desc;
               $unit = $d->unit;

               $output[] = "<tr class='w-full p-2'>
                   <td class='px-6 py-2'>".$cate."</td>
                   <td class='px-6 py-2'>".$cate_desc."</td>
                   <td class=' px-6 py-2'>".$subcate."</td>
                   
                   <td class='px-6 py-2'>".$sub_desc."</td>
                   <td class='px-6 py-2'>".$unit."</td>

               </tr>";

         

              

                }
        
  //$output = "<table class='table'>".$output."</table>";
   
          }else{
     
   
           $output = "<div class='alert alert-danger'> No Category found! </div>";
       
       
          }
   
   
       
   
         
    
    
   
         return $data = array(
            'table_data'  => $output,
      
       
             );
 
 

 
         
   


            }

}


}