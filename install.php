<?php
include dirname(__FILE__) . '/dbh/conn.php';
$stauts = TRUE;
if ($stauts) {
  echo "success";
$sql  ="";
// CREATE TABLE `details`.`companyDetails` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `CD_key` VARCHAR(255) NULL , `CD_values` VARCHAR(255) NULL , `c_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `e_date` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
// INSERT INTO `companyDetails` (`id`, `CD_key`, `CD_values`, `c_date`, `e_date`) VALUES (NULL, 'address', 'adress', current_timestamp(), current_timestamp()), (NULL, 'mobile', 'mobile', current_timestamp(), current_timestamp()),(NULL, 'mail1', 'mail1', current_timestamp(), current_timestamp()),(NULL, 'mail2', 'mail2', current_timestamp(), current_timestamp()), (NULL, 'whatsapp', 'whatsapp', current_timestamp(), current_timestamp());

} else {
  echo "fail";
}
