<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ProductCode' => '1',
            'SupplierID' => '1',
            'quantity' => '5',
            'IssueDate' => '5.20.2022',
            'comment' => 'Some comment about the Issue '
        ];
    }
}
