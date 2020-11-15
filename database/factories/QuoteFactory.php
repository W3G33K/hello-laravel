<?php

	namespace Database\Factories;

	use App\Models\Quote;
	use App\Models\User;
	use Illuminate\Database\Eloquent\Factories\Factory;

	/**
	 * Class QuoteFactory
	 * @package Database\Factories
	 *
	 * * Usages & Examples:
	 *
	 * * * Creates 1 Random Quote.
	 * Quote::factory()->create()
	 *
	 * * * Creates 5 Random Quotes.
	 * Quote::factory()
	 * 		->times(5)->create()
	 *
	 * * * Creates 1 Random Quote & Overrides 'user_id' property.
	 * Quote::factory()->create([
	 * 		'user_id' => 3
	 * ]);
	 *
	 * * * Creates 3 Random Quote & Overrides 'game' property.
	 * Quote::factory()
	 * 		->times(5)->create([
	 * 			'game' => 'Mass Effect'
	 * 		]);
	 * 
	 */
	class QuoteFactory extends Factory {
		/**
		 * The name of the factory's corresponding model.
		 *
		 * @var string
		 */
		protected $model = Quote::class;

		/**
		 * Define the model's default state.
		 *
		 * @return array
		 */
		public function definition() {
			return [
				'user_id' => User::factory(),
				'slug' => $this->faker->unique()->slug(3),
				'quote' => $this->faker->paragraph,
				'actor' => $this->faker->name,
				'game' => $this->faker->text(48),
			];
		}
	}
