<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public string $title;
    public string $excerpt;
    public $date;
    public string $slug;
    public string $body;

    /**
     * @param $title
     * @param $excerpt
     * @param $date
     * @param $slug
     * @param $body
     */
    public function __construct($title, $excerpt, $date, $slug, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->slug = $slug;
        $this->body = $body;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public static function findOrFail($slug): mixed
    {
        $post = static::find($slug);

        if (!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public static function find($slug): mixed
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function all(): mixed
    {
        return cache()->rememberForever('posts.all',
            fn() => collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->slug,
                    $document->body()
                ))
                ->sortByDesc('date'));
    }
}
