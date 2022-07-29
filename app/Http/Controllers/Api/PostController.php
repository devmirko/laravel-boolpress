<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        // se inviato una richiesta con dei dati non accettati
        // dichiaro una variabile con il nuemro di post per pagine di default
        $per_page_default = 10;
        // variabile con la richiesta query e la funzione (non supriore alla variabile $per_page_default)
        $per_page = $request->query('per_page', $per_page_default);
        // se per_page e tra questi parametri
        if ($per_page < 1 || $per_page > 100) {
            $per_page = $per_page_default;
        }

        $posts = Post::with('user')->with('category')->with('tags')->paginate($per_page);

        return response()->json([
            'success'   => true,
            'response'  => $posts
        ]);

    }
    // funzione che controlla la route della pagina home con la comparsa di post random
    // public function random() {
    //     $sql = Post::with(['user', 'category', 'tags'])->limit(9)->inRandomOrder();
    //     $posts = $sql->get();

    //     return response()->json([
    //         // 'sql'       => $sql->toSql(), // solo per debugging
    //         'success'   => true,
    //         'result'    => $posts,
    //     ]);
    // }


    public function show($slug)
    {
        $post = Post::with(['user', 'category', 'tags'])->where('slug', $slug)->first();

        if ($post) {
            return response()->json([
                'success'   => true,
                'result'    => $post
            ]);
        } else {
            return response()->json([
                'success'   => false,
            ]);
        }

    }

}
