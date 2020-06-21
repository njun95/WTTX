<?php
require('fpdf.php'); 
class PDF extends FPDF{
         function Header(){
             global $title;
             
			 //Logo
             $this->Image('../images/logo-camtel-2.jpg',5,5,20,20);
			 $this->Ln(20);
             // Arial bold 15
             $this->SetFont('Arial','B',15);
             // Calculate width of title and position
             $w = $this->GetStringWidth($title)+6;
             $this->SetX((210-$w)/2);
             // Colors of frame, background and text
             $this->SetDrawColor(0,0,0);
             $this->SetFillColor(255,255,255);
             $this->SetTextColor(200,220,255);
             // Thickness of frame (1 mm)
             $this->SetLineWidth(1);
             // Title
             $this->Cell($w,12,$title,1,1,'C',true);
             // Line break
             $this->Ln(10);
            }

         function Footer(){
             // Position at 1.5 cm from bottom
             $this->SetY(-15);
             // Arial italic 8
             $this->SetFont('Times','I',8);
             // Text color in gray
             $this->SetTextColor(0,0,0);
             $this->Cell(0,0,'WTTX Dimensioning',0,1,'C');
			 $this->Ln(5);			 
			  // Page number
			 $this->Cell(0,0,'Rapport du '.date('d').' / '.date('m').' / '.date('y').' à  '.date('H').' H '.date('i'),0,1,'C');
             $this->Cell(0,0,'Page '.$this->PageNo(),0,1,'R');
            }

         function ChapterTitle($num, $label){
             // Arial 12
             $this->SetFont('Times','B',12);
             // Background color
             $this->SetFillColor(200,220,255);
             // Title
             $this->Cell(0,10," $num - $label",0,1,'L',true);
             // Line break
             $this->Ln(4);
            }

         function PrintChapter($num, $title){
             $this->AddPage();
             $this->ChapterTitle($num,$title);             
            }
        }
         $pdf = new PDF();
     $title = 'WTTX Dimensioning';
     $pdf->SetTitle($title);
     $pdf->SetAuthor('Njun Line Daniele Fru');

      //$rapdf = $_GET['rapdf'];   
        // if($rapdf == "couv" or $rapdf == "capa" or $rapdf == "capex"){	
           		   
	 
     $pdf->PrintChapter('I','Coverage Planning');
	 $pdf->Ln(5);

	  $pdf->SetFont('Times','B',12);
     $pdf->Cell(0,0,'General Parameters',0,1,'');
     $pdf->Cell(80);
	 $pdf->Cell(0,0,'Downlink',0,1,'');
	 $pdf->Cell(80);
	 $pdf->Cell(0,0,'UPLINK',0,1,'');
	 $pdf->Ln();
	 
  $pdf->Output();

	 //}
?>

