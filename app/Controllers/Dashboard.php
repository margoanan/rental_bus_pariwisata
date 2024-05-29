<?php

namespace App\Controllers;

use App\Models\Dashboard_model;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->dashboard_model = new Dashboard_model();
    }

    public function index()
    {
        $data['total_pelanggan'] = $this->dashboard_model->getCountPel();
        $data['total_bus'] = $this->dashboard_model->getCountBus();

        echo view('dashboard', $data);
        echo view('_partials/footer');
    }
}
