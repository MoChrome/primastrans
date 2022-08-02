<?php

namespace App\Models;

class Post
{
    private static $services_list = [
        [
            "title" => "Paket A",
            "slug" => "paket-a",
            "price" => "RP.XXX",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti reiciendis quae magni quas, voluptate dolorem dignissimos exercitationem fugiat nemo beatae nobis aliquam, porro praesentium. Sequi beatae, reiciendis ipsa molestias unde, atque saepe ex voluptas eius fugit veniam eum mollitia incidunt! Perferendis minus perspiciatis exercitationem tempora alias distinctio quis voluptate accusamus mollitia praesentium. Assumenda et aliquam distinctio, exercitationem tenetur dignissimos esse excepturi sint, minima voluptatum omnis. Dolores, rerum obcaecati. Nisi assumenda, laudantium quidem iste modi rem numquam odit. Obcaecati, reprehenderit ut."
        ],
        [
            "title" => "Paket B",
            "slug" => "paket-b",
            "price" => "RP.XXAB",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptas modi mollitia hic. Architecto quo, assumenda cum optio dolore, ipsum aliquid ad ducimus veritatis nobis aut minima unde nemo suscipit iure magni corporis mollitia! Blanditiis quos, tempore labore dolor voluptates minima placeat explicabo exercitationem recusandae est architecto vitae eaque pariatur."
        ],
    ];

    public static function all()
    {
        return self::$services_list;
    }

    public static function find($slug)
    {
        $services_list = self::$services_list;
        $post = [];
        foreach ($services_list as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
