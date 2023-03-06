<?php
namespace App\Services;

use App\Models\Category;
class CategoriesService
{
    public function createCategory($data)
    {
        $category = new Category;
        $category->name = $data['name'];

        $category->save();

        return $category;
    }

    public function updateCategory($category, $data)
    {
        $category->update( $data );

        return $category;
    }

    public function deleteCategory($category)
    {
        $category->delete();
    }
}