<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;

	class CreateQuotesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('quotes', function(Blueprint $table) {
				$table->id();
				$table->string('slug', 32)->unique();
				$table->text('quote');
				$table->string('actor', 32);
				$table->string('game', 32);
				$table->timestamps();
				$table->timestamp('published_at')->nullable();
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists('quotes');
		}
	}
