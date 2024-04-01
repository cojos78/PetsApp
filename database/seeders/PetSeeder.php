<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add a record with Eloquent ORM
        $pet = new Pet;
        $pet->name     = "Firulais";
        $pet->photo    = "1708984846.png";
        $pet->kind     = "Dog";
        $pet->weight   = 5;
        $pet->age      = 3;
        $pet->breed    = "Galgo";
        $pet->location = "Manizales";
        $pet->save();
        
        // Add a record with Eloquent ORM
        $pet = new Pet;
        $pet->name     = "Pocholo";
        $pet->photo    = "1708697222.png";
        $pet->kind     = "Dog";
        $pet->weight   = 10;
        $pet->age      = 4;
        $pet->breed    = "Pug";
        $pet->location = "Manizales";
        $pet->save();

        // Add a record with Eloquent ORM
        $pet = new Pet;
        $pet->name     = "Michi";
        $pet->kind     = "Cat";
        $pet->weight   = 8;
        $pet->age      = 2;
        $pet->breed    = "Persa";
        $pet->location = "Pereira";
        $pet->save();

    }
}