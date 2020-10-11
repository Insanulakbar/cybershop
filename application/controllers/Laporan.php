<?php
class Laporan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan'); //Memanggil model laporan 
	}

	function index()
	{

		$this->load->view('partials/v_head');
		$this->load->view('partials/v_header');
		$this->load->view('partials/v_sidebar');
		$this->load->view('laporan/v_laporan'); //View Laporan
		$this->load->view('partials/v_footer');
	}

	public function export_pdf()
    {    
        $data['stok'] = $this->m_laporan->LaporanPDF();   

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "Laporan_Barang.pdf"; //Nama File PDF
	    $this->pdf->load_view('laporan/v_laporan_pdf',$data); //View untuk mencetak tampilan PDF Keseluruhan Produk
    }

    public function export_pc()
    {    
        $data['stok_pc'] = $this->m_laporan->LaporanPC();    

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "Laporan_PC.pdf"; //Nama File PDF
	    $this->pdf->load_view('laporan/v_laporan_pc',$data); //View untuk mencetak tampilan PDF PC
    }

    public function export_laptop()
    {    
        $data['stok_laptop'] = $this->m_laporan->LaporanLaptop();    

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "Laporan_laptop.pdf"; //Nama File PDF
	    $this->pdf->load_view('laporan/v_laporan_laptop',$data); //View untuk mencetak tampilan PDF Laptop
    }

    public function export_notebook()
    {    
        $data['stok_notebook'] = $this->m_laporan->LaporanNotebook();    

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "Laporan_notebook.pdf"; //Nama File PDF
	    $this->pdf->load_view('laporan/v_laporan_notebook',$data); //View untuk mencetak tampilan PDF Notebook
    }

    public function export_Smartphone()
    {    
        $data['stok_smartphone'] = $this->m_laporan->LaporanSmartphone();    

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "Laporan_smartphone.pdf"; //Nama File PDF
	    $this->pdf->load_view('laporan/v_laporan_smartphone',$data); //View untuk mencetak tampilan Smartphone
    }
}