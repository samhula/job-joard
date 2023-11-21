<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'job_title', 'company_name', 'job_type', 'num_applications', 'deadline', 'location', 'salary', 'description'];
}
