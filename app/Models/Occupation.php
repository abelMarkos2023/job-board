<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    /** @use HasFactory<\Database\Factories\OccupationFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'salary', 'location', 'company', 'experience', 'category', 'type'];
    public static array $types = ['Full Time', 'Part Time', 'Contract'];
    public static array $experiences = ['0-1 Year', '1-3 Years', '3-5 Years', '5-10 Years', '10+ Years'];
    public static array $categories = ['IT', 'Finance', 'Healthcare', 'Education', 'Sales'];
}
