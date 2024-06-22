<?php
// Model fungsinya buat proses pengambilan query atau proses bisnis logic yang datanya diambil dari database
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Sandhika Galih',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae accusantium maiores iure
                        expedita ducimus assumenda quod repellat tempora quo accusamus iste ex, consectetur repellendus nam eaque blanditiis non maxime,
                        praesentium quae commodi nobis cupiditate nulla. Nostrum accusamus ab eveniet? Hic, vel beatae! Aspernatur
                        reiciendis tempore qui quam modi quibusdam placeat, dolore blanditiis aut magni officiis iusto id, consectetur
                        suscipit asperiores eum corrupti, eius quae. Vitae itaque nobis nihil culpa ducimus sed dicta dolorem repellat
                        voluptatem repellendus tempora dolor et perspiciatis, expedita sapiente accusamus corrupti facere a esse. Rerum
                        laborum quos a earum! Corporis saepe dolores asperiores iste doloribus omnis iusto tenetur, odit consequatur
                        itaque fuga harum consectetur vitae repellat tempora, nobis error rem, vel unde quidem perferendis a dicta quis.'
      ],
      [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => "Farhan Putra",
        'body' => '
                Recusandae pariatur officia consequuntur dolorem laudantium itaque dicta magni ad placeat a. Hic iure cum quo
                consequuntur, commodi magni culpa nemo! Exercitationem recusandae saepe corrupti deleniti maxime, ad quas ut
                fuga sed ipsa numquam odio? Aliquid iure dolores officia, eaque soluta ipsum totam iste dignissimos molestias
                officiis? Asperiores odio quibusdam nesciunt illum sint obcaecati, eveniet perspiciatis molestiae esse non quam
                officiis amet vitae recusandae numquam hic dolorem quia aspernatur minima ea ab? Sit animi est cum officiis
                harum impedit enim.'
      ]
    ];
  }

  public static function find($slug): array
  {
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });
    $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    // cek apakah variabel post itu ada atau kosong
    if (!$post) {
      abort(404);
    }
    return $post;
  }
}
