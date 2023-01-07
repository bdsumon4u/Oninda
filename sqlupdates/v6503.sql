ALTER TABLE `orders` ADD `commission_status` ENUM('unpaid','paid') NOT NULL DEFAULT 'unpaid' AFTER `selling_total`;
ALTER TABLE `orders` ADD `commission_ref` VARCHAR(255) NOT NULL AFTER `commission_status`;

COMMIT;