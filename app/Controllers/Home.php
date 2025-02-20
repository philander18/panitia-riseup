<?php

namespace App\Controllers;

use App\Models\RiseupModel;
use DateTime;

class Home extends BaseController
{
    protected $RiseupModel;
    protected $jumlahlist = 10;
    public function __construct()
    {
        $this->RiseupModel = new RiseupModel();
    }
    public function index(): string
    {
        header('Clear-Site-Data: "cache"');
        $session = session();
        if (!is_null($this->request->getVar('kode'))) {
            if (!empty($this->RiseupModel->akses($this->request->getVar('kode')))) {
                $session->set('akses', $this->RiseupModel->akses($this->request->getVar('kode'))[0]['akses']);
            }
        }
        if (!$session->has('akses')) {
            header("location: home/portal");
            exit;
        }
        $data = [
            'judul' => 'Home',
            'akses' => $session->akses
        ];
        return view('Home/index', $data);
    }

    public function portal(): string
    {
        $session = session();
        if ($session->has('akses')) {
            header("location: index");
            exit;
        }
        $data = [
            'judul' => 'Portal',
        ];
        return view('Portal/index', $data);
    }

    public function keluar(): string
    {
        $session = session();
        $session->remove('akses');
        header("location: portal");
        exit;
    }
}
