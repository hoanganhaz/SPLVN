<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Lấy 9 bài viết mỗi trang, sắp xếp theo ngày tạo mới nhất
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);

        return view('client.post.index', compact('posts'));
    }

    public function show(Request $request, $slug = null)
    {
        // Hỗ trợ nhận slug từ param đường dẫn hoặc từ query string
        if (!$slug) {
            $queryString = $request->getQueryString();
            $slug = $request->query('slug') ?? $queryString;

            // Nếu query string có dạng key=value, ưu tiên giá trị của 'slug' hoặc giá trị đầu tiên
            if ($slug && strpos($queryString, '=') !== false) {
                parse_str($queryString, $qs);
                $slug = $qs['slug'] ?? (count($qs) ? reset($qs) : null);
            }
        }

        if (!$slug) {
            abort(404);
        }

        // Tìm bài viết theo slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // Lấy bài viết liên quan (cùng category hoặc mới nhất)
        $relatedPosts = Post::where('id', '!=', $post->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('client.post.postDetail', compact('post', 'relatedPosts'));
    }
}
