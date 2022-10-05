<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class GetDataController extends Controller
{
    //
    public function index(){
        echo 1;
    }

    public function ambil_data(){
        $data = file_get_contents('https://jsonplaceholder.typicode.com/todos');
        $decode = json_decode($data);
       
        $count = count($decode);
      
        for($i; $i<=$count; $i++){
            //store 
           DB::RAW("insert into file_json (title,completed) values ('".$i['decode']['title']."','".$i['decode']['completed']."', )");
        }
    }

}
