<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    // Table
    protected $table = 'contact_details';
    // allowed fields to manage
    protected $allowedFields = ['id_no','firstname', 'middlename','lastname', 'gender', 'contact', 'email', 'address','age','birthday','civil_status','religion','citizenship','height','weight','work_experience','elementary_level','school_address','year_attended','secondary_level','school_location','year','college_level','location','year_graduated'];
}