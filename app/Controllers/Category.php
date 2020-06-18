<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{

    /**
     * respected model
     */
    protected $model;

    /**
     * Category Constructor
     */
    public function __construct()
    {
        $this->model = model(CategoryModel::class);
    }

    public function index()
    {
        $categories = $this->model->findAll();
        return view('category/index', [
            'categories' => $categories,
            'parent_categories' => array_column($categories, 'name', 'id'),
            'message' => session()->getFlashdata('message')
        ]);
    }

    /**
     * Get sub-categories of parent category
     */
    public function sub($id)
    {
        $categories = $this->model->where('parent_id', $id)->findAll();

        if ($this->request->isAJAX()) {
            echo json_encode([
                'categories' => $categories
            ]);
            exit;
        }

        return view('category/sub', [
            'categories' => $categories,
            'parent_categories' => array_column($categories, 'name', 'id'),
            'message' => session()->getFlashdata('message')
        ]);
    }

    /**
     * Create a new category
     */
    public function create()
    {
        if ($this->request->getPost()) {
            $data = [
                'name' => $this->request->getPost('category_name'),
                'parent_id'    => ($this->request->getPost('parent_category')) ? $this->request->getPost('parent_category') : NULL
            ];
        }

        $res = $this->model->insert($data);
        if ($res) {
            session()->setFlashdata('message', 'Category has been created successfully.');
        } else {
            session()->setFlashdata('message', 'Category cannot be created. Please try again Later.');
        }

        return $this->response->redirect('/category');
    }

    /**
     * Get the category creation form
     */
    public function add()
    {
        $categories = $this->model->findAll();
        return view('category/add', ['categories' => $categories]);
    }

    public function delete($id)
    {
        $this->model->delete([$id]);
        session()->setFlashdata('message', 'Category has been deleted successfully.');
        return $this->response->redirect('/category');
    }

    /**
     * Get the category update form
     */
    public function update($id)
    {
        $category = $this->model->find($id);
        $categories = $this->model->where('id !=', $id)->findAll();
        return view('category/update', [
            'categories' => $categories,
            'updated_category' => $category
        ]);
    }

    /**
     * Edit a category
     */
    public function edit($id)
    {
        if ($this->request->getPost()) {
            $data = [
                'name' => $this->request->getPost('category_name'),
                'parent_id'    => ($this->request->getPost('parent_category')) ? $this->request->getPost('parent_category') : NULL
            ];
        }

        $res = $this->model->update($id, $data);
        if ($res) {
            session()->setFlashdata('message', 'Category has been updated successfully.');
        } else {
            session()->setFlashdata('message', 'Category cannot be updated. Please try again Later.');
        }

        return $this->response->redirect('/category');
    }
}
