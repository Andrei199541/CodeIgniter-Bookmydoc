<?php
	tcpdf();
	$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$obj_pdf->SetCreator(PDF_CREATOR);
	$title = "PDF Report";
	$obj_pdf->SetTitle($title);	
	$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, "Monthly Report");
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$obj_pdf->SetFont('helvetica', '', 9);
	$obj_pdf->setFontSubsetting(false);
	$obj_pdf->AddPage();
	ob_start();
?>
		<table border="1" cellspacing="0" cellpadding="3">
			<tr>
				<td>Col1</td>
				<td>Col2</td>
			</tr>
			<tr>
				<td>val1</td>
				<td>val1</td>
			</tr>
			<tr>
				<td>val2</td>
				<td>val2</td>
			</tr>
		</table>
<?php
		$content = ob_get_contents();
	ob_end_clean();
	$obj_pdf->writeHTML($content, true, false, true, false, '');
	$obj_pdf->Output('output.pdf', 'I');
?>