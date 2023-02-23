<?php
namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function createPost($data)
    {
        $post = new Post;
        $post->title = $data['title'];
        $post->url = $data['url'];
        $post->description = $data['description'];
        $post->category_id = $data['category_id'];

        if (isset($data['image'])) {
            $image = $data['image'];
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $filename);
            $post->image = $filename;
        }

        $post->save();

        return $post;
    }

    public function updatePost($post, $data)
    {
        $post->title = $data['title'];
        $post->url = $data['url'];
        $post->description = $data['description'];
        $post->category_id = $data['category_id'];

        if (isset($data['image'])) {
            $image = $data['image'];
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $filename);

            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
            }

            $post->image = $filename;
        }

        $post->save();

        return $post;
    }

    public function deletePost($post)
    {
        if ($post->image) {
            Storage::delete('public/images/' . $post->image);
        }

        $post->delete();
    }
}