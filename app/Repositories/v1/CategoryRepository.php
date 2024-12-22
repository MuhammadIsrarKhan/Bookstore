<?php

namespace App\Repositories\v1;

use App\Models\Category;
use App\Repositories\V1\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function __construct()
    {
        // 
    }
    public function index()
    {
        return $this->all(new Category());
    }
    public function store($data)
    {
        return $this->save(new Category(), $data);
    }
    public function show($id)
    {
        return $this->find(new Category(), $id);
    }
    public function updateCategory($data, $id)
    {
        return $this->update(new Category(), $data, $id);
    }
    public function destroy($id)
    {
        return $this->delete(new Category(), $id);
    }
}
