<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogPostModel extends Model
{
    protected $table = 'blog_posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'author'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'content' => 'required|min_length[10]',
        'author' => 'required|min_length[3]|max_length[100]'
    ];
} 