<?php

namespace App\Repositories\v1;

use App\Models\Author;

class AuthorRepository extends BaseRepository
{
    public function index()
    {
        return $this->all(new Author());
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'bio' => $request->bio,
        ];
        return $this->save(new Author(), $data);
    }

    public function show($id)
    {
        return $this->find(new Author(), $id);
    }

    public function updateAuthor($request, $id)
    {
        $data = [
            'name' => $request->name,
            'bio' => $request->bio,
        ];
        return $this->update(new Author(), $data, $id);
    }

    public function destroy($id)
    {
        return $this->delete(new Author(), $id);
    }
}
