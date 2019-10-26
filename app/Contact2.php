<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact2 extends Model
{
    public  $primaryKey='contact_id';
    protected $table = 'contact';
    protected $fillable = ['client_unit','contact_job','contact_name','contact_sex','contact_birthday','contact_hobby','contact_address','contact_tel','contact_email','contact_remark'];
    public $timestamps = false;


}
