<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Hasil Pemilihan Ketua Osis SMKN 2 KARANGANYAR',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Jl. Yos Sudarso, Jengglong, Bejen, Kec. Karanganyar ',0,1,'C');
        $pdf->Cell(190,7,'Kabupaten Karanganyar Jawa Tengah 57716',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,7,'NO',1,0);
        $pdf->Cell(100,7,'Nama Kandidat',1,0);
        $pdf->Cell(68,7,'Jumlah Suara',1,1);
        $pdf->SetFont('Arial','',10);
            $query1 = $this->db->query('SELECT * FROM suara WHERE nama_kandidat = 1 ')->num_rows();
            $pdf->Cell(20,10,'1',1,0);
            $pdf->Cell(100,10,'Kandidat 1',1,0);
            $pdf->Cell(68,10,$query1,1,1);
            
            $query2 = $this->db->query('SELECT * FROM suara WHERE nama_kandidat = 2 ')->num_rows();  
            $pdf->Cell(20,10,'2',1,0);
            $pdf->Cell(100,10,'Kandidat 2',1,0);
            $pdf->Cell(68,10,$query2,1,1);
           
            $query3 = $this->db->query('SELECT * FROM suara WHERE nama_kandidat = 3 ')->num_rows();
            $pdf->Cell(20,10,'3',1,0);
            $pdf->Cell(100,10,'Kandidat 3',1,0);
            $pdf->Cell(68,10,$query3,1,1);
      
        $pdf->Output();
    }

    function dua(){
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','A5');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR STATUS SISWA',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,7,'NO',1,0);
        $pdf->Cell(40,7,'NIS',1,0);
        $pdf->Cell(88,7,'NAMA',1,0);
        $pdf->Cell(40,7,'STATUS',1,1);
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query('SELECT * FROM login WHERE status=1 ');
        $no=0;
        foreach ($data->result() as $dat){
            $no++;
            $pdf->Cell(20,6,$no,1,0);
            $pdf->Cell(40,6,$dat->nis,1,0);
            $pdf->Cell(88,6,$dat->username,1,0);
            $pdf->Cell(40,6,'SUDAH MEMILIH',1,1);
        }
        $pdf->Output();
	}
    function tiga(){
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','A5');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR STATUS SISWA',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,7,'NO',1,0);
        $pdf->Cell(40,7,'NIS',1,0);
        $pdf->Cell(88,7,'NAMA',1,0);
        $pdf->Cell(40,7,'STATUS',1,1);
        $pdf->SetFont('Arial','',10);
        $rows = $this->db->query('SELECT * FROM login WHERE status=0 AND level=2');
        $no=0;
        foreach ($rows->result() as $row){
            $no++;
            $pdf->Cell(20,6,$no,1,0);
            $pdf->Cell(40,6,$row->nis,1,0);
            $pdf->Cell(88,6,$row->username,1,0);
            $pdf->Cell(40,6,'BELUM MEMILIH',1,1);
        }
        $pdf->Output();
	}
    }
