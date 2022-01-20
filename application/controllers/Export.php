<?php defined('BASEPATH') OR die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

     public function __construct()
     {
          parent::__construct();

          if(!$this->session->userdata('email')){
               redirect('auth');
          }
          $this->load->model('Peoples_model');
          $this->load->library('form_validation');
         
     }

     public function index()
     {
         
          

          $spreadsheet = new Spreadsheet();
          $sheet = $spreadsheet->getActiveSheet();
          // $spreadsheet->setActiveSheetIndex(0)
          $sheet->setCellValue('A1', 'No');
          $sheet->setCellValue('B1', 'Nomor Pegawai');
          $sheet->setCellValue('C1', 'Nama Peserta');
          $sheet->setCellValue('D1', 'Usia');
          $sheet->setCellValue('E1', 'Ahli Waris');
          $sheet->setCellValue('F1', 'Usia Ahli Waris');
         
          $kolom = 2;
          $nomor = 1;

         
          

          foreach ($pensiun as $p) {
          
          $this->db->select('*');
          $this->db->from('dbpnm');
          // $this->db->like('dbpnm.npk', $data['keyword']);
          // $this->db->or_like('dbpnm.nama', $data['keyword']);
          $this->db->join('pn', 'pn.npk = dbpnm.npk');
          $this->db->order_by('dbpnm.nama', 'ASC');
          $pensiun = $this->db->get();

          $ahli_waris         = $this->db->get_where('aw_pn', ['npk' => $pensiun['npk']])->result_array();

          $now                = new DateTime();



          $lahir              = new DateTime($p['tgl_lhr']);
          $intervallhr        = date_diff($lahir, $now);


               
                          $sheet->setCellValue('A' . $kolom, $nomor);
                          $sheet->setCellValue('B' . $kolom, $p->npk);
                          $sheet->setCellValue('C' . $kolom, $p->nama);
                          $sheet->setCellValue('D' . $kolom, $intervallhr);
                          foreach ($ahli_waris as $aw => $value) {

                          $lahir1             = new DateTime($ahli_waris['tgl_lhr_aw']);
                          $intervallhraw      = date_diff($lahir1, $now);

                          $sheet->setCellValue('E' . $kolom, $ahli_waris->nama);
                          $sheet->setCellValue('F' . $kolom, $intervallhraw);
                          }
                          
                          

               $kolom++;
               $nomor++;
          }

          $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
          $filename = 'List Pensiun'; // set filename for excel file to be exported
 
          header('Content-Type: application/vnd.ms-excel'); // generate excel file
          header('Content-Disposition: attachment;filename="'. $filename .'.xls"'); 
          header('Cache-Control: max-age=0');
        
          $writer->save('php://output');  // download file 
     }


     public function pdf_preview()
     {
          $this->load->library('dompdf_gen');

          $this->db->select('*');
          $this->db->from('dbpnm');
          // $this->db->like('dbpnm.npk', $data['keyword']);
          // $this->db->or_like('dbpnm.nama', $data['keyword']);
          $this->db->join('pn', 'pn.npk = dbpnm.npk');
          $this->db->order_by('dbpnm.nama', 'ASC');
          $data['pensiun'] = $this->db->get();

          $this->load->view('peoples/laporan_pdf_preview', $data);
          $paper_size  = 'A4';
          $orientation = 'potrait';
          $html           = $this->output->get_output();
          $this->dompdf->set_paper($paper_size, $orientation);

          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("LaporanPerubahanData.pdf", array('Attachment' => 0));
     }

}