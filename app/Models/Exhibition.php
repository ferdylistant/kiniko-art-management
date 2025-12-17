<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
  protected $table = 'exhibitions';
  public $incrementing = false;
  protected $keyType = 'string';
  protected $fillable = ['id', 'title', 'slug', 'description', 'start_date', 'end_date', 'venue', 'is_current', 'banner', 'status'];
  protected $casts = [
    'start_date' => 'date',
    'end_date'   => 'date',
  ];

  public function getFormattedPeriodAttribute()
  {
    if ($this->start_date === $this->end_date) {
      return $this->start_date->format('F j, Y');
    }

    return $this->start_date->format('F j, Y') . ' – ' .
      $this->end_date->format('F j, Y');
  }
}