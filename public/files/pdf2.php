<?php
    $this->_pdf->AddPage();
    $this->_pdf->SetFont('Arial','B',16);
    $this->_pdf->Cell(40,10, utf8_decode('PDF2 '. $arg[0] . ' ' . $arg[1]));
    $this->_pdf->Output();
?>

