<?php


// $upcs = App\Models\Upc::where('verify', 2)
// ->paginate(10)    ;

//$cate = $_GET['cate'];
 

?>


@extends('layouts.admin')

@section('content')

 

<div class="px-3  py-2">

 
<div class="px-10 py-4  text-3xl inline"  > <i class="nav-icon fas fa-thumbs-up text-3xl" ></i> My Uploads </div>
 
 
 

<div class="px-10 py-4   inline    ">

        <div class="float-right mx-10 text-red-700 text-xl " >
        {{$upcs->total()}}
        </div>

</div>


 
 
 

 

 


</div>






<div class="px-3 py-4 ">




    <table class="w-full text-md bg-white shadow-md rounded mb-4">




        <thead>

            <tr class="border-b">

            <th class="text-left p-1 px-1" width=10%>Uploaded Date</th>
            <th class="text-left p-1 px-1">Image</th>
            <th class="text-left p-1 px-1">UPC</th>

            <th class="text-left p-1 px-1">Brand</th>
            <th class="text-left p-1 px-1" >Description </th>
            <th class="text-left p-1 px-1" >Category</th>
 
            <th class="text-left p-1 px-1">Size</th>
            <th class="text-left p-1 px-1">UOM</th>

            <th class="text-left p-1 px-1" width=15%>Status</th>

            </tr>
        </thead>

    @foreach ($upcs as $c )
 

    <tr class="border-b

 @if($c->verify==1) bg-green-300 @endif
 @if($c->verify==2) bg-yellow-300 @endif
 @if($c->verify==3) bg-red-300 @endif

 ">

        <td class="p1 px1"> {{$c->add_date}}  </td>



 
        <td class="p-1 px-1"><img src="{{asset('storage/upload_img/'.$c->pic)}}" 
            
            {{-- class="shadow rounded max-w-full h-auto align-middle border-none object-cover" --}}
            class="w-32 object-cover shadow rounded "
            >  </td>

        <td class="p-1 px-1">{{$c->upc}}</td>
        <td class="p-1 px-1">{{$c->brand}}</td>
        <td class="p-1 px-1">{{$c->description}}</td>
        <td class="p-1 px-1">{{$c->category}} - {{$c->subcategory}}  </td>

        <td class="p-1 px-1">{{$c->size}}</td>
        <td class="p-1 px-1">{{$c->uom}}</td>


 

        <td class="p-1 px-1"> 
        
        
 
    @if ($c->verify == '')
    	
	in process
	
	<a class='fa fa-pencil-square-o'   id='editicon".$cnt."'  style='font-size:20px;'></a>
        <a class='fa fa-trash' href='{{route('mywork_delete', $c->id)}}' onclick='return confirmDelete()' style='font-size:20px;'></a>	
	
@endif

@if ($c->verify == '1')

Approved
 @endif
    
 @if ($c->verify == '2')

 Pending
 @endif
 
 @if ($c->verify == '3')

Denied
 @endif


        </td>

        </tr>


        <tr class="border-b hover:bg-orange-100 bg-gray-100 align-top">

        <td style="border-top:none;" ></td>
        <td class="p-1 px-1"colspan=4>
            
   
    


      
 
 
        <div style="padding-top:0px;"> Ingredients :<a href="{{asset('/storage/upload_img/'.$c->pic1)}}">{{$c->pic1}}</a> </div>
        <div style="padding-top:0px;"> Nutrition :  <a href="{{asset('/storage/upload_img/'.$c->pic2)}}">{{$c->pic2}}</a> </div>
        </td>

         <td class="p-1 px-1"colspan=4>Reviewed Date : {{$c->verify_date}}
            
   
    


      
 
        </td>



        </tr>
  {{-- @include('layouts.modal', $c) --}}

        {{-- @include('layouts.modal_confirm', $c) --}}

        {{-- @include('layouts.modal_attach', $c) --}}

        @endforeach



</table>




</div>
<div class="px-3 py-4   justify-between">

{{ $upcs->links() }}
</div>




@endsection

