USE nerdy_gadgets;

ALTER TABLE `user`
    CHANGE COLUMN `password` `password` VARCHAR(60) NOT NULL COLLATE 'utf8mb4_0900_ai_ci' AFTER `email`;