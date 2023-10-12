<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vila;

class filecontroller extends Controller
{
    //
    function index(Request $re){

        $data=$re->all();

//echo $re->quality;

        
        $data['file']=$re->file('file')->store('apifiles',['disk' => 'public']);


        Vila::create($data);

        echo '<script type="text/javascript">
        
        alert("تمت  العملية بنجاح          ");
        window.open("http://pscye.com/kaif/vla/", "_self");
        
        </script>
        
        ';
     

        //return  $result;
    }
}
