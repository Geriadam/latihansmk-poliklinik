<?php
require('fpdf17/fpdf.php');

class PDF extends FPDF
{

// membaca data dari database

function LoadData()
{
    $data=array();
    mysql_connect("localhost","root","");
    mysql_select_db("db_poliklinik");
    $query = "SELECT B.nama,B.alamat,A.tanggal,A.jam,C.nama_poli,D.nama_penyakit,E.nama,A.jumlah,A.harga,A.total from pemeriksaan A,pasien B,Poliklinik C,penyakit D,dokter E where A.id_pasien=B.id_pasien AND A.id_poli = C.id_poli AND A.id_penyakit=D.id_penyakit AND A.id_dokter = E.id_dokter ";
    $hasil = mysql_query($query);
    $i = 0;
    while ($fetchdata = mysql_fetch_array($hasil))
    {
	$i++; // membuat counter 1, 2, 3, ... untuk ditampilkan
      array_unshift($fetchdata,$i);
	$data[] = $fetchdata;	
    }
    return $data;
}


function Header() {


$this->Image('LOGO.jpg',15,5,15);
 
	$this->SetFont('Arial','B',18);
 
	$this->Cell(0,0.75,'Poliklinik Sehat Selalu',0,0,'C');
 
	$this->Ln(5);
 
	$this->SetFont('Arial','B',14);
 
	$this->Cell(0,1,'Kabupaten Jombang',0,0,'C');
 
	$this->Ln(5);
 
	$this->SetFont('Arial','',10);
 
	$this->Cell(0,0.5,'Jl. Jakarta - Curahmalang ',0,0,'C');
	$this->Ln(4);
	$this->SetFont('Arial','',10);

	$this->Cell(0,0.5,'Sumobito - 61483',0,0,'C');
	$this->Cell(0, 10.8, " ", "B");
	$this->Ln(2);
	$this->Cell(0, 1.5, " ", "B");
	$this->Ln();
	$this->Cell(0, 0.8, " ", "B");
	$this->Ln();
	$this->SetFont('Arial','',14);
	$this->Ln(5);
	$this->cell(0,0.75,'Laporan Data Pemeriksaan',0,0,'C');
	$this->Ln(8);
}
 
// function untuk menampilkan tabel
function clear(){
	$this->cell(0,0,34,'a',0,0,'C');
}

function TabelWarna($header,$data)
{
    // setting lebar masing-masing kolom dalam mm
    $w=array(6,36,40,20,20,30,30,35,15,20,25);    

    // membuat kepala tabel
    for($i=0;$i<count($header);$i++)
    {
	// memberi warna latar merah pada kepala tabel
	$this->SetFillColor(47, 136, 203);    	
// setting huruf bold pada kepala tabel
	$this->SetFont('Arial','B',7);           
	// parameter L menunjukkan teks rata kiri pada setiap 
// sel kepala tabel 
$this->Cell($w[$i],7,$header[$i],1,0,'L',1);    
    }
    $this->Ln();
    // menampilkan data
    // setting jenis font pada data tabel
    $this->SetFont('Arial','',6);     
	
    $j = 0;
    foreach($data as $row)
    {
	// menampilkan perubahan warna latar putih dan biru muda 
// setiap ganti baris
	if ($j % 2 == 0) 
$this->SetFillCOlor(255,255,255,255,255,255,255,255); // setting warna putih
	else 
$this->SetFillCOlor(149,194,255); // setting warna biru muda
	
	// menampilkan data rata kiri	
	for($i=0;$i<=sizeof($w)-1;$i++)
		$this->Cell($w[$i],6,$row[$i],1,0,'L',1);							
      $this->Ln();
	$j++;
    }
    // penutup tabel
    $this->Cell(array_sum($w),0,'','T');
}

}

$pdf=new PDF();
$pdf->SetTitle($title);

// nama-nama kolom untuk kepala tabel
$header=array('No','Nama Pasien','Alamat','Tanggal','Jam','Jenis Poli','Diagnosa','Nama Dokter' ,'Jumlah','Harga','Total');

// memanggil function untuk baca data
$data=$pdf->LoadData();
$pdf->addPage('L','A4');

// memanggil function untuk menampilkan tabel
$pdf->TabelWarna($header,$data);
$pdf->Output();
?>
