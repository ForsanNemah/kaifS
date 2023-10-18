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




        Vila::create(


            array(
                'quality' => $re->quality."/5",
                'file'  => $data['file'],
                'branch1' => $re->branch1,

                'sellers_satis'  => $re->sellers_satis."/5",
                'cashier_satis'  => $re->cashier_satis."/5",
                'total_satis'  => $re->total_satis."/5",
                'note'  => $re->note,
            )


        );

        echo '<script type="text/javascript">
        
        alert("تمت  العملية بنجاح          ");
        //window.open("http://pscye.com/kaif/vla/", "_self");
        window.history.go(-1);
        </script>
        
        ';
     
        
         
    }
}
