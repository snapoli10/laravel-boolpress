<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
  function author() {
		return $this->belongsTo(Author::class);
	}
}
