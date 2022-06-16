<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public $name;
    public $phone;
    public $speciality;
    public $room_no;
    public $image;
    public function Doctor($name,$phone,$speciality,$room,$image){
        $this->name=$name;
        $this->phone=$phone;
        $this->speciality=$speciality;
        $this->room_no=$room;
        $this->image=$image;
    }

}
