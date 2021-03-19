<?php

$var_f7ab77965df5d4b315a1b1ff1eae3435 = "\e[32m";
$var_57bae1167c7b89c6167b4c29c6236f24 = "\033[0;31m";
$var_94a65aa92208fa2ff9b512153c929d0c = "\e[0m";

echo " $var_f7ab77965df5d4b315a1b1ff1eae3435
$$$$$$\            $$\             $$\                                   $$\                 $$$$$$$$\ $$\                 $$\                     
$$  __$$\           $$ |            $$ |                                  \__|                $$  _____|\__|                $$ |                    
$$ /  \__|$$\   $$\ $$$$$$$\   $$$$$$$ | $$$$$$\  $$$$$$\$$$$\   $$$$$$\  $$\ $$$$$$$\        $$ |      $$\ $$$$$$$\   $$$$$$$ | $$$$$$\   $$$$$$\  
\$$$$$$\  $$ |  $$ |$$  __$$\ $$  __$$ |$$  __$$\ $$  _$$  _$$\  \____$$\ $$ |$$  __$$\       $$$$$\    $$ |$$  __$$\ $$  __$$ |$$  __$$\ $$  __$$\ 
 \____$$\ $$ |  $$ |$$ |  $$ |$$ /  $$ |$$ /  $$ |$$ / $$ / $$ | $$$$$$$ |$$ |$$ |  $$ |      $$  __|   $$ |$$ |  $$ |$$ /  $$ |$$$$$$$$ |$$ |  \__|
$$\   $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ | $$ | $$ |$$  __$$ |$$ |$$ |  $$ |      $$ |      $$ |$$ |  $$ |$$ |  $$ |$$   ____|$$ |      
\$$$$$$  |\$$$$$$  |$$$$$$$  |\$$$$$$$ |\$$$$$$  |$$ | $$ | $$ |\$$$$$$$ |$$ |$$ |  $$ |      $$ |      $$ |$$ |  $$ |\$$$$$$$ |\$$$$$$$\ $$ |      
 \______/  \______/ \_______/  \_______| \______/ \__| \__| \__| \_______|\__|\__|  \__|      \__|      \__|\__|  \__| \_______| \_______|\__|      
                                                                                                                                                    
                                                                                                                                                    
                                                                                                                                                    
 
&#9733;·.·´¯`·.·&#9733; Subdomain Finder  &#9733;·.·´¯`·.·&#9733;

$var_57bae1167c7b89c6167b4c29c6236f24 Coded by Null $var_94a65aa92208fa2ff9b512153c929d0c

";

echo "\nURL (masukan url website disini): ";
$var_db9fed695af7f4f6697160cd32f19751 = trim(fgets(STDIN));

$var_e8061cb59b46a4a2bda304354b950448 = curl_init(); 
curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_URL, "https://sonar.omnisint.io/subdomains/".$var_db9fed695af7f4f6697160cd32f19751);
curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_RETURNTRANSFER, 1); 
$var_e1320c5ad025163a6058158335d81f3c = curl_exec($var_e8061cb59b46a4a2bda304354b950448); 
curl_close($var_e8061cb59b46a4a2bda304354b950448); 

$var_83eec45a7a7f3dec3fc6d22a7bfa26e3 = json_decode($var_e1320c5ad025163a6058158335d81f3c, true);
echo "\n";

if ($var_83eec45a7a7f3dec3fc6d22a7bfa26e3 == null) {
	echo $var_57bae1167c7b89c6167b4c29c6236f24 . "Masukan salah atau situs tidak memiliki subdomain! $var_94a65aa92208fa2ff9b512153c929d0c \n";
} else {
	foreach($var_83eec45a7a7f3dec3fc6d22a7bfa26e3 as $var_180a3037e57f4f940140793ef5332cbf => $var_fd832cc4b0fe6afaf34eb5559144bc3e) {
	    echo $var_180a3037e57f4f940140793ef5332cbf+1 . ". " . $var_fd832cc4b0fe6afaf34eb5559144bc3e . "\n";
	    $var_cc4ee5ae222171352fa0817ad97c21c1 = fopen('hasil.txt', 'a+');
		fwrite($var_cc4ee5ae222171352fa0817ad97c21c1, $var_fd832cc4b0fe6afaf34eb5559144bc3e."\n");
		fclose($var_cc4ee5ae222171352fa0817ad97c21c1);
	}

	echo "$var_f7ab77965df5d4b315a1b1ff1eae3435 \nSave di file hasil.txt! $var_94a65aa92208fa2ff9b512153c929d0c \n";
}