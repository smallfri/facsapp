<?php

namespace Database\Factories;

use App\Models\TItem;
use App\Models\TUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'text' => Str::random(10),
            'description' => Str::random(10),
        ];
    }

    public function run()
    {
        factory(TUser::class, 50)->create()->each(function ($user) {
            $user->titems()->save(factory(TItem::class)->make());
        });
    }
}
