ALTER TABLE `carts` ADD `selling_price` DOUBLE(20,2) NOT NULL AFTER `price`;

COMMIT;