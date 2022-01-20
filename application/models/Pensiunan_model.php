<?php

/**
 * 
 */
class Pensiunan_model extends CI_Model
{
    public function getPensiun($npk)
    {
        $this->db->select('*');
        $this->db->from('dbpnm_pn');
        $this->db->join('pn', 'pn.npk = dbpnm_pn.npk', 'right');
        $this->db->where('dbpnm_pn.npk', $npk);
        // $this->db->or_where('dbpnm.kota', 'Karawang');
        $this->db->order_by('dbpnm_pn.nama', 'ASC');
        $query = $this->db->get()->row_array();
        return ($query);
    }
    public function getAhliWaris($npk)
    {
        $this->db->order_by('norut', 'ASC');
        return $this->db->get_where('aw_pn', ['npk' => $npk])->result_array();
    }
}
