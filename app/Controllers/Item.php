<?php

namespace App\Controllers;

use App\Models\ItemModel;


class Item extends BaseController
{

    public function __construct()
    {
        if (!session()->get('isAdminLoggedIn')) {
            return redirect()->to('admin/login');
        }
    }

    public function index()
    {
        if (session()->get('isAdminLoggedIn')) {

            $item_model = new ItemModel;
            $data['items'] = $item_model->findAll();

            return view('item/index', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }


    public function search()
    {


        $post = $this->request->getPost(['name', 'price', 'description']);

        $item_model = new ItemModel;

        $builder = $item_model->builder();

        if (!empty($post['name'])) {
            $builder->like('name', $post['name']);
        }

        if (!empty($post['price'])) {
            $builder->where('price', $post['price']);
        }

        if (!empty($post['description'])) {
            $builder->like('description', $post['description']);
        }

        $data['items'] = $builder->get()->getResult();

        return view('item/index', $data);
    }



    public function test(): string
    {
        // $db = \Config\Database::connect();
        // $builder = $db->table('tbl_item');
        // $query = $builder->get();
        // $result = $query->getResult();

        // dd($result);



        try {
            echo $x;
        } catch (\Exception $e) {
            echo 'Error';
        }
    }

    public function myForm()
    {
        helper(['form']);
        return view('item/myForm');
    }


    public function add()
    {
        $data = array();
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost([
                'name',
                'price',
                'description'
            ]);

            $post['name'] = strip_tags($_POST['name']);
            $post['description'] = strip_tags($_POST['description']);

            $rules = [
                'name' => ['label' => 'Item Name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required']
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $item_model = new \App\Models\ItemModel();


                $item_model->save($post);

                return redirect()->to('item/index');
            }
        }

        return view('item/add', $data);
    }

    // public function store()
    // {
    // }

    public function view($id)
    {
        $item_model = new \App\Models\ItemModel();
        $data['item'] = $item_model->find($id);

        return view('item/view', $data);
    }

    public function edit($id)
    {
        $data = array();
        helper(['form']);
        $itemModel = new \App\Models\ItemModel();

        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost([
                'name',
                'price',
                'description'
            ]);

            $post['name'] = strip_tags($_POST['name']);
            $post['description'] = strip_tags($_POST['description']);

            $rules = [
                'name' => ['label' => 'Item Name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required']
            ];

            if ($this->validate($rules)) {
                $itemModel->update($id, $post);

                return redirect()->to('item/index');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        $data['item'] = $itemModel->find($id);

        return view('item/edit', $data);
    }

    public function delete($id)
    {
        $item_model = new \App\Models\ItemModel();
        $data['item'] = $item_model->find($id);

        return view('item/delete', $data);
    }

    public function destroy($id)
    {
        $itemModel = new \App\Models\ItemModel();
        $itemModel->delete($id);

        return redirect()->to('item/index');
    }
}
