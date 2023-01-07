ALTER TABLE `addresses` ADD `shipping` DOUBLE(20,2) NOT NULL AFTER `city_id`;
ALTER TABLE `addresses` ADD `courier` VARCHAR(255) NOT NULL AFTER `shipping`;
ALTER TABLE `addresses` ADD `instruction` TEXT DEFAULT NULL AFTER `courier`;

ALTER TABLE `orders` ADD `selling_total` DOUBLE(20,2) NOT NULL AFTER `grand_total`;
ALTER TABLE `order_details` ADD `selling_price` DOUBLE(20,2) NOT NULL AFTER `price`;

COMMIT;