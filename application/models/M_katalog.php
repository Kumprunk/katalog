<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_katalog extends CI_Model
{
    function katalog()
    {
        $query = "SELECT * FROM produk";

        return $this->db->query($query);
    }
    function detail($kd_produk)
    {
        $query = "SELECT * FROM pecah_stok where kd_produk = $kd_produk";

        return $this->db->query($query);
    }
    function get($limit, $offset)
    {
        if (!$limit && $offset) {
            $query = $this->db
                ->get_where('produk');
        } else {
            $query =  $this->db->get('produk', $limit, $offset);
        }
        return $query->result();
         //print_r($query->result());
    }
    function count()
    {
        $query = $this->db->get_where('produk');
        return $query->num_rows();
    }
    function search($data)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->like('nama_produk', $data);
        return $this->db->get()->result();
    }

}