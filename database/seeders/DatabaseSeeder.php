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
        "Articoli per Animali",
    ];

            

    public $revisors = [
        ['name' => 'Alessandro' , 'email' => 'alemuolo@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Simone' , 'email' => 'simopele@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Samuele' , 'email' => 'samubatta@gmail.com', 'password' => 'Abcd1234!'],
        ['name' => 'Alessio' , 'email' => 'alessio@mail.it', 'password' => 'Abcd1234!'],
        ['name' => 'Andrea' , 'email' => 'andrfichera@gmail.com', 'password' => 'Abcd1234!']
    ];

   
    public $articles = [
            ['title' => 'Guinzaglio', 'category_id' => 10, 'description' => 'Vendo guinzaglio per inutilizzo dato che il mio cane ascolta', 'price' => '5'],
            ['title' => 'Tamburo', 'category_id' => 5, 'description' => 'Vendo tamburo perchè sono passato al flauto', 'price' => '250'],
            ['title' => 'Casco', 'category_id' => 9, 'description' => "Vendo casco con supporto per l'interphono", 'price' => '400'],
            ['title' => 'Tastiera meccanica pc', 'category_id' => 1, 'description' => 'Regalo tastiera meccanica rgb per pc', 'price' => '0'],
            ['title' => 'Allegro chirurgo', 'category_id' => 7, 'description' => 'Vendo Allegro Chirurgo dato che mio figlio ha 33 anni', 'price' => '22'],
            ['title' => 'Bicicletta', 'category_id' => 8, 'description' => 'Vendo bicicletta da corsa, usata pochissimo', 'price' => '150'],
            ['title' => 'Monitor 4K', 'category_id' => 1, 'description' => 'Vendo monitor 4K, perfetto per gaming', 'price' => '300'],
            ['title' => 'Pallone da calcio', 'category_id' => 4, 'description' => 'Vendo pallone da calcio ufficiale Serie A', 'price' => '25'],
            ['title' => 'Orologio da polso', 'category_id' => 6, 'description' => 'Vendo orologio da polso, marca nota', 'price' => '100'],
            ['title' => 'Tablet', 'category_id' => 1, 'description' => 'Vendo tablet 10 pollici, usato pochissimo', 'price' => '200'],
            ['title' => 'Chitarra elettrica', 'category_id' => 5, 'description' => 'Vendo chitarra elettrica con amplificatore', 'price' => '500'],
            ['title' => 'Cuffie wireless', 'category_id' => 1, 'description' => 'Vendo cuffie wireless con noise cancelling', 'price' => '150'],
            ['title' => 'Tavola da surf', 'category_id' => 8, 'description' => 'Vendo tavola da surf, ottime condizioni', 'price' => '250'],
            ['title' => 'Zaino trekking', 'category_id' => 10, 'description' => 'Vendo zaino da trekking, 50L', 'price' => '75'],
            ['title' => 'Lego Star Wars', 'category_id' => 7, 'description' => 'Vendo set Lego Star Wars, mai aperto', 'price' => '120'],
            ['title' => 'Ellittica', 'category_id' => 8, 'description' => 'Vendo ellittica, usata poco', 'price' => '400'],
            ['title' => 'Bici elettrica', 'category_id' => 8, 'description' => 'Vendo bici elettrica con batteria nuova', 'price' => '600'],
            ['title' => 'Giacca invernale', 'category_id' => 6, 'description' => 'Vendo giacca invernale, taglia L', 'price' => '80'],
            ['title' => 'Racchetta da tennis', 'category_id' => 4, 'description' => 'Vendo racchetta da tennis, usata una volta', 'price' => '60'],
            ['title' => 'Fotocamera reflex', 'category_id' => 1, 'description' => 'Vendo fotocamera reflex con obiettivo 18-55mm', 'price' => '500'],
            ['title' => 'Libro di cucina', 'category_id' => 7, 'description' => 'Vendo libro di cucina italiana', 'price' => '15'],
            ['title' => 'Sciarpa', 'category_id' => 6, 'description' => 'Vendo sciarpa di lana, fatta a mano', 'price' => '30']
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
