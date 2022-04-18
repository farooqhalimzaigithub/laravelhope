<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
protected $fillable = ['branch_name','branch_code'];
     // protected $guarded=[];


    public   $rules = [
    'branch_name' => 'required |min:3',
    'branch_code' => 'required',
                      ];

}
