<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	class Quote extends Model {
		use HasFactory;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var string[]
		 */
		protected $fillable = ['quote', 'actor', 'game'];

		/**
		 * Get the route key for the model.
		 *
		 * @return string
		 */
		public function getRouteKeyName(): string {
			return 'slug';
		}

		public function path(): string {
			return route('quotes.show', $this);
		}
	}
