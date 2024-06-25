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

            

    public $revisors = [
        ['name' => 'Alessandro' , 'email' => 'alemuolo@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Simone' , 'email' => 'simopele@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Samuele' , 'email' => 'samubatta@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Alessio' , 'email' => 'alemoro@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Andrea' , 'email' => 'andreafica@gmail.com', 'password' => 'Abcd1234!']
    ];





    public function run(): void
    {
        // User::factory(10)->create();

        foreach ($this->categories as $category){
            Category::create([
                'name' => $category
            ]);
        }

        foreach ($this->revisors as $revisor){
            User::create([
                'name' => $revisor['name'],
                'email' => $revisor['email'],
                'password'=> $revisor['password'],
                'is_revisor'=>true
            ]);
        }
        
    }
}
