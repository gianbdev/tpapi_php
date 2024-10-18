<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Task",
 *     type="object",
 *     required={"id", "title", "description", "due_date"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Task Title"),
 *     @OA\Property(property="description", type="string", example="Task Description"),
 *     @OA\Property(property="due_date", type="string", format="date", example="2024-12-31"),
 * )
 */

class Task extends Model
{
    use HasFactory;
    //
    protected $fillable = [
       'title',
       'description',
       'due_date',
       'completed'
    ];
}
