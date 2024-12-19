<?php

namespace App\Repositories\V1;


class BaseRepository
{

    /**
     * return all the User with their perms.
     *
     * @return array
     */
    public function all($model)
    {
        return $model->get();
    }

    public function getPaginated($model, $perPage = 20)
    {
        return $model->orderBy('created_at','DESC')->paginate($perPage);
    }


    /**
     * return single User according to param ID.
     * @param  $id
     * @return array
     */
    public function find($model, $id)
    {
        return $model->where('id', $id)->first();
    }

    public function getFirst($model)
    {
        return $model::first();
    }

    /**
     * return saved User after creating from $data array.
     * @param  $data
     * @return object
     */
    public function save($model, $data)
    {
        return $model->create($data);
    }

    public function insertData($model, $data)
    {
        return $model->insert($data);
    }

    public function deleteAll($model, $column, $toDelete)
    {
        return $model->where($column, $toDelete)->delete();
    }

    public function findByColumn($model, $column, $value)
    {
        return $model->where($column, $value)->first();
    }

    /**
     * return updated User after updating from $data array.
     * @param  $data
     *
     * @return object
     */
    public function update($model, $data, $id)
    {
        $data = $model->where('id', $id)->update($data);
        return $data;
    }

    public function updateOrCreate($model, $data, $column, $value)
    {
        return $model->updateOrCreate(
            [$column => $value],
            $data
        );
    }

    public function updateOrCreateFirstEntry($model, $data)
    {
        return $model->updateOrCreate(
            [],
            $data
        );
    }

    /**
     * delete User from param id with checks of default, automation and status.
     * @param  $id
     * @return -
     */
    public function delete($model, $id)
    {
        return $model->where('id', $id)->delete();
    }

    

}
