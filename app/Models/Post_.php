<?php

namespace App\Models;

class Post
{
    private static $properties_posts = [
        [
            "title" => "Ruko 1",
            "slug" => "ruko-1",
            "address" => "Jln Noenoeng Tisnasaputra",
            "floor-count" => 2,
            "bedroom-count" => 2,
            "toilet-count" => 2,
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, magni quidem culpa sequi corrupti libero repudiandae at, obcaecati alias saepe possimus ullam nulla delectus eveniet temporibus illum quis maiores provident ea atque laborum tempora voluptatibus? Nisi, nemo tempore ratione explicabo molestias cum et minus dolorem laboriosam facilis suscipit mollitia! Asperiores fugit, neque culpa consectetur recusandae vel, cumque vitae qui accusamus officiis nisi inventore impedit nesciunt at provident tenetur, consequatur exercitationem possimus. Eos eveniet repellat aperiam repellendus iure itaque magni tempora voluptates provident, iste quidem autem architecto voluptate exercitationem, consequatur saepe doloremque. Beatae ex animi reiciendis qui consequatur libero repellat fuga?"
        ],
        [
            "title" => "Ruko 2",
            "slug" => "ruko-2",
            "address" => "Jln Jend Soedirman",
            "floor-count" => 1,
            "bedroom-count" => 1,
            "toilet-count" => 1,
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi natus vel aut, odit tempore quasi adipisci iusto qui ad error vero fugiat, quas, illum asperiores distinctio earum dolore beatae. Nesciunt minima, labore nisi quae laborum necessitatibus corrupti fugit ducimus vitae molestiae officia laboriosam dolorum illum, ullam iste quia. Iure, minus."
        ],
    ];

    public static function all()
    {
        return collect(self::$properties_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
