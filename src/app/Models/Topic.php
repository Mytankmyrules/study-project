<?php

namespace App\Models;

class Topic 
{
   protected string $table = 'topic';

   protected array $fillable = [
       'topic',
       'name',
   ];

   protected array $casts = [
       'created at' => 'datetime',
       'updated at' => 'datetime'
   ];
}
