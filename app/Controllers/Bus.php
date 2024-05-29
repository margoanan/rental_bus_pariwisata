<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Bus_model;

class Bus extends BaseController
{
    protected $busModel;

    public function __construct()
    {
        $this->busModel = new Bus_model();
    }

    public function index()
    {
        $data['data_bus'] = $this->busModel->findAll();
        return view('bus/index', $data);
    }

    public function create()
    {
        return view('bus/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $data = [
            'nopol' => $this->request->getPost('nopol'),
            'nama_bus' => $this->request->getPost('nama_bus'),
            'keadaan_bus' => $this->request->getPost('keadaan_bus'),
            'status_bus' => $this->request->getPost('status_bus'),
        ];

        if (!$validation->run($data, 'bus')) {
            return redirect()->to(base_url('bus/create'))->withInput()->with('errors', $validation->getErrors());
        }

        $this->busModel->insert($data);

        return redirect()->to(base_url('bus'))->with('success', 'Bus created successfully');
    }

    public function edit($id)
    {
        $data['bus'] = $this->busModel->find($id);

        return view('bus/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('nopol');

        $data = [
            'nama_bus' => $this->request->getVar('nama_bus'),
            'keadaan_bus' => $this->request->getVar('keadaan_bus'),
            'status_bus' => $this->request->getVar('status_bus'),
        ];

        $this->busModel->update($id, $data);

        return redirect()->to(base_url('bus'))->with('success', 'Bus updated successfully');
    }

    public function delete($id)
    {
        
        $this->busModel->delete($id);

        return redirect()->to(base_url('bus'))->with('success', 'Bus deleted successfully');
    }
}
