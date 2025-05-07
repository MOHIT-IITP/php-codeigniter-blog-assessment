<?php

namespace App\Controllers;

use App\Models\BlogPostModel;

class HomeController extends BaseController
{
    protected $blogPostModel;

    public function __construct()
    {
        $this->blogPostModel = new BlogPostModel();
    }

    public function index()
    {
        $data['posts'] = $this->blogPostModel->orderBy('created_at', 'DESC')->findAll();
        return view('home/index', $data);
    }

    public function show($id)
    {
        $data['post'] = $this->blogPostModel->find($id);
        
        if (!$data['post']) {
            return redirect()->to('/')->with('error', 'Blog post not found');
        }

        return view('home/show', $data);
    }
} 