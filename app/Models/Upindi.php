<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 


class Upindi extends Model
{
    use HasFactory;
 

    protected $table = 'apl_up_indi';



 









    protected $fillable = [
    
        'upc'  , 
         'brand'   , 
       'description' ,
        'size' ,
        'uom' ,  
        'category' ,
         'subcategory' ,     
        'add_date'  ,
        'corp'  ,

 
             
        
        'add_name',
    
        'comment'  ,

        'user_id'  ,
 
        'verify_staff',        
        'verify_date'  ,
    
        'approved',
        'verify',

    
        'pic' ,       
        'pic1' ,
        'pic2',
        'moved' ,
        'duplicate',



        'created_at' 
    
    
    ];
    







}
