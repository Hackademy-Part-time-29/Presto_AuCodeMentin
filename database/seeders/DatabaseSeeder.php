<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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
        ['name' => 'Alessio' , 'email' => 'alessio@mail.it', 'password' => 'Abcd1234!'],
        ['name' => 'Andrea' , 'email' => 'andreafica@gmail.com', 'password' => 'Abcd1234!']
    ];

    public $articles = [
        ['title' => 'Guinzaglio', 'category_id' => 10, 'description' => 'Vendo guinzaglio per inutilizzo dato che il mio cane ascolta', 'price' => '5'],
        ['title' => 'Tamburo', 'category_id' => 5, 'description' => 'Vendo tamburo perchè sono passato al flauto', 'price' => '250'],
        ['title' => 'Casco', 'category_id' => 9, 'description' => "Vendo casco con supporto per l'interphono", 'price' => '400'],
        ['title' => 'Tastiera meccanica pc', 'category_id' => 1, 'description' => 'Regalo tastiera meccanica rgbper pc', 'price' => '0'],
        ['title' => 'Allegro chirurgo', 'category_id' => 7, 'description' => 'Vendo Allegro Chirurgo dato che mio figlio ha 33 anni', 'price' => '22'],
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

        foreach ($this->articles as $article){
            Article::create([
                'title' => $article['title'],
                'category_id' => $article['category_id'],
                'description' => $article['description'],
                'price' => $article['price'],
                'is_accepted'=> true
            ]);
        }
        
    }
}
