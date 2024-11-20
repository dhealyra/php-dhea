<?php

$lampu = "Kuning";

switch ($lampu) {
    case 'Merah':
        echo "Berhenti !";
        break;

    case 'Kuning':
        echo "Siap-Siap!";
        break;
    
    case 'Hijau':
        echo "Gas keun";
        break;
        
    default:
        echo "Warna Tidak Ada!";
        break;
}
?>