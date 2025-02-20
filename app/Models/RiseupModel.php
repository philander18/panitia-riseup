<?php

namespace App\Models;

use CodeIgniter\Model;

class RiseupModel extends Model
{
    protected $table = 'peserta';
    protected $allowedFields = ['nama', 'gereja', 'harapan', 'verified', 'pic'];
    public function akses($kode)
    {
        $where = "kode = '" . $kode . "'";
        return $this->db->table('akses')->select('posisi,akses, kode')->where($where)->get()->getResultArray();
    }

    public function list_gereja()
    {
        $list_gereja = $this->db->table('list_gereja')->select('nama')->distinct('nama')->orderBy('nama', 'asc')->get()->getResultArray();
        $data['list_gereja'] = $list_gereja;
        $data['select_gereja'] = $list_gereja[0]['nama'];
        return $data;
    }

    function input_peserta($data)
    {
        return $this->db->table('peserta')->insert($data);
    }

    public function search_peserta_verifikasi($keyword, $jumlahlist, $index, $order, $gereja)
    {
        $where = "nama like '%" . $keyword . "%' and gereja = '" . $gereja . "' and verified = 1";
        $select = "nama, gereja";
        $all = $this->db->table('peserta')->select($select)->where($where)->orderBy($order)->get()->getResultArray();
        $jumlahdata = count($all);
        $lastpage = ceil($jumlahdata / $jumlahlist);
        $tabel = array_splice($all, $index);
        array_splice($tabel, $jumlahlist);
        $data['lastpage'] = $lastpage;
        $data['tabel'] = $tabel;
        $data['jumlah'] = $jumlahdata;
        return $data;
    }
}
