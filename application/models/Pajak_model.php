<?php

/**
 * 
 */
class Pajak_model extends CI_Model
{
    public function getPensiun()
    {
        // $where = array(
        //     'okverifi !='     => '',
        //     'tgl_akhir ='     => ''
        // );
        // return $this->db->get_where('dbpnm_pn', $where)->result_array();


        $this->db->select('*');
        $this->db->from('dbpnm_pn');
        $this->db->join('dbpn', 'dbpn.npk = dbpnm_pn.npk', 'right');
        $this->db->where('dbpn.p_bln', '02');
        $this->db->where('dbpn.p_thn', '2022');
        $this->db->order_by('dbpnm_pn.nama', 'ASC');
        $query = $this->db->get()->result_array();
        return ($query);
    }

    public function getBank()
    {
        $this->db->select('*');
        $this->db->from('dbpnm_pn');
        $this->db->join('dbpn', 'dbpn.npk = dbpnm_pn.npk', 'right');
        $this->db->where('dbpn.p_bln', '02');
        $this->db->where('dbpn.p_thn', '2022');
        $this->db->order_by('dbpnm_pn.lokgj', 'ASC');
        $this->db->group_by('dbpnm_pn.lokgj');
        $query = $this->db->get()->result_array();
        return ($query);
    }

    public function getDetail($npk)
    {
        $this->db->select('*');
        $this->db->from('dbpnm_pn');
        $this->db->join('dbpn', 'dbpn.npk = dbpnm_pn.npk', 'right');
        $this->db->where('dbpnm_pn.npk', $npk);
        $this->db->where('dbpn.p_bln', '02');
        $this->db->where('dbpn.p_thn', '2022');
        $this->db->order_by('dbpnm_pn.nama', 'ASC');
        $query = $this->db->get()->row_array();
        return ($query);
    }
}
