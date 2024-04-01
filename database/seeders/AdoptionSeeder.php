<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adoption;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add a record with Eloquent ORM
        $adp = new Adoption;
        $adp->user_id = 3;
        $adp->pet_id  = 1;
        $adp->save();

        $adp = new Adoption;
        $adp->user_id = 3;
        $adp->pet_id  = 2;
        $adp->save();

        $adp = new Adoption;
        $adp->user_id = 4;
        $adp->pet_id  = 3;
        $adp->save();
    }
}