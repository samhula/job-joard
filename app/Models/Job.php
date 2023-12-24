<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'job_title', 'company_name', 'job_type', 'num_applications', 'deadline', 'location', 'salary', 'description', 'skills', 'benefits', 'url'];

    // Internal search engine
    public function scopeFilter($query, array $filters){
        if($filters['job_title'] ?? false){
            $query->where('job_title', 'like', '%' . request('job_title') . '%');
        }
    }
}
