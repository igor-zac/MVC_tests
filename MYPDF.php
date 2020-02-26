<?php
require_once("tcpdf.php");

class OrderRecap extends TCPDF
{
    public function Header(){
        $this->SetFont('helvetica', 'B', 25);
        $this->Cell(0, 15, 'Récapitulatif commande', 0, false, 'C', 0, '', 0, false, 'M', 'M');

    }

    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }

    public function __construct(Order $myOrder){

        parent::__construct(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $this->SetupPDF($myOrder);
    }

    private function SetupPDF($myOrder){



        $this->SetTitle('Récapitulatif commande');

// set default header data
        $this->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 011', PDF_HEADER_STRING);

// set header and footer fonts
        $this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
        $this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
        $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->SetHeaderMargin(15);
        $this->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------

// set font
        $this->SetFont('helvetica', '', 12);

// add a page
        $this->AddPage();

// column titles
        $header = array('Réf. article', 'Nom article', 'Prix unitaire', 'Quantité', 'Total');

// data loading


        $date = $myOrder->getOrderDate();
        $ref = $myOrder->getOrderReference();
        $total = $myOrder->getTotal();
        $contenuCommande = $myOrder->getOrderContent();
        $clientInfo = $myOrder->getClient();


        $this->InfosCommande($ref, $date, $total);
        $this->InfosClients($clientInfo);
        $this->ContenuCommande($header, $contenuCommande);

    }


    // Colored table
    private function TableauArticles($header, $data)
    {

        // Colors, line width and bold font
        $this->SetFillColor(50, 50, 50); // COULEUR HEADER TABLEAU
        $this->SetTextColor(255); // COULEUR TEXTE HEADER TABLEAU
        $this->SetDrawColor(0, 0, 0); // COULEUR BORDURES TABLEAU
        $this->SetLineWidth(0.3); // LARGEUR BORDURES TABLEAU
        $this->SetFont('', 'I');
        // Header
        $w = array(25, 50, 35, 30, 35);
        $num_headers = count($header);
        for ($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(200, 200, 200);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        foreach ($data as $article) {
            $prix=$article[3]/100;

            $this->Cell($w[0], 6, $article[0], 'LR', 0, 'C', $fill);
            $this->Cell($w[1], 6, $article[1], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, number_format($prix, 2).'€', 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $article[2], 'LR', 0, 'R', $fill);
            $this->Cell($w[4], 6, number_format($prix * $article[2], 2).'€', 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill = !$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }

    private function InfosClients($clientInfo){
        $nom = $clientInfo['nom'];
        $prenom = $clientInfo['prenom'];
        $adresse = $clientInfo['adresse'];
        $cp = $clientInfo['cp'];
        $ville = $clientInfo['ville'];

        $this->SetFont('helvetica', '', 11);

        $html= '<h1>Informations client</h1>
<ul style="list-style: none;">
<li>Nom : '.$nom.'</li>
<li>Prenom : '.$prenom.'</li>
<li>Adresse : '.$adresse.'</li> 
<li>Code postal : '.$cp.'</li> 
<li>Ville : '.$ville.'</li> 
</ul>
<br>
';
        $this->writeHTML($html, true, false, true, false, '');

    }

    private function InfosCommande($ref, $date, $total){

        $this->SetFont('helvetica', '', 12);

        $html = '<p><span style="font-weight: bold;">Réf. commande : </span>'.$ref.'
<br><span style="font-weight: bold;">Date : </span>'.$date.' 
<br><span style="font-weight: bold;">Total : </span>'.number_format($total, 2).'€<br>
</p>';

        $this->writeHTML($html, true, false, true, false, '');


    }

    private function ContenuCommande($header, $data){
        $this->SetFont('helvetica', '', 11);

        $html= '<h1>Informations commande</h1><br>';

        $this->writeHTML($html, true, false, true, false, '');
        $this->TableauArticles($header, $data);
    }
}