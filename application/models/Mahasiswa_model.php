<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {

        return $this->db->get('mahasiswa')->result_array();
        /** ini mengambil data dari database */
    }
}
