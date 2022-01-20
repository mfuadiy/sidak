<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Coba_model extends CI_Model
{

	public function import_data($databarang)
	{
		$jumlah = count($databarang);
		if($jumlah > 0){
			$this->db->replace('m_barang', $databarang);
		}
	}

	public function getDataBarang()
	{
		return $this->db->get('m_barang')->result_array();
	}

	public function getPensiun()
    {
        $this->db->select('*');
        $this->db->from('dbpnm_pn');
        $this->db->join('pn', 'pn.npk = dbpnm_pn.npk', 'right');
        $this->db->where('dbpnm_pn.npk', '8000040391');
        // $this->db->or_where('dbpnm.kota', 'Karawang');
        $this->db->order_by('dbpnm_pn.nama', 'ASC');
        $query = $this->db->get()->result_array();
        return ($query);
    }

}