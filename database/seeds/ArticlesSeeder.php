<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'image' => "public/images/thumbnails/1543229667sbPnXP7WpjZK0dCuP1ogzdQYFrU5fnDt08UcdmdX (copie).jpeg",
            'titre'=>"Cras ex mauris, ornare eget pretium sit amet. ",
            'texte' => "Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…",
            'user_id'=>"1",
            'categorie_id'=>"1",
            'etat_id'=>"1",

        ]);
        DB::table('articles')->insert([
            'image' => "public/images/thumbnails/1543229667sbPnXP7WpjZK0dCuP1ogzdQYFrU5fnDt08UcdmdX (copie).jpeg",
            'titre'=>"Cras ex mauris, ornare eget pretium sit amet. ",
            'texte' => "Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…",
            'user_id'=>"1",
            'categorie_id'=>"1",
            'etat_id'=>"1",

        ]);
        DB::table('articles')->insert([
            'image' => "public/images/thumbnails/1543229667sbPnXP7WpjZK0dCuP1ogzdQYFrU5fnDt08UcdmdX (copie).jpeg",
            'titre'=>"Cras ex mauris, ornare eget pretium sit amet. ",
            'texte' => "Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. You won’t find any of that sugary nonsense you might find at other places, the ingredients here are fresh, you can really taste the difference. Do yourself a favor, get the large one, because it comes out like this…",
            'user_id'=>"1",
            'categorie_id'=>"2",
            'etat_id'=>"1",
            'textepreview'=>'Let’s just start with the margaritas seeing as we are already talking about the bar, and also because they are life changing. Such a versatile drink, ready to support you on any occasion, but this particular one takes it to the next level. '

        ]);
    }
}
