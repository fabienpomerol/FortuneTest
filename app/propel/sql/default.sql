
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- fortune
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `fortune`;

CREATE TABLE `fortune`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`content` TEXT NOT NULL,
	`score` INTEGER DEFAULT 0 NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
