ALTER TABLE `addresses` ADD `name` VARCHAR(55) NOT NULL AFTER `user_id`;

COMMIT;