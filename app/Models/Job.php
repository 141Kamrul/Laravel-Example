<?php
namespace App\Models; 
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    protected $fillable = ['title', 'salary'];
    protected $table = "job_listings";
    // public static function all(): array
    // {
    //     return  [
    //         ['id' => 1, 'title' => 'Director', 'salary' => 50000],
    //         ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
    //         ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
    //     ];
    // }

    // public  static function find(int $id): ?array{
    //     return  Arr::first(self::all(), fn($job) => $job['id']==$id);
    // }
}