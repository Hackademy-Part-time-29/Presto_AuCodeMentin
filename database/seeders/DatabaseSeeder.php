<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        "Elettronica e Tecnologia",
        "Abbigliamento e Accessori",
        "Casa e Giardino",
        "Bellezza e Salute",
        "Sport e Tempo Libero",
        "Alimentari e Bevande",
        "Giochi e Giocattoli",
        "Libri, Film e Musica",
        "Auto e Moto",
        "Articoli per Animali"
    ];

    public function run(): void
    {
        // User::factory(10)->create();

        foreach ($this->categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
        
    }
}
