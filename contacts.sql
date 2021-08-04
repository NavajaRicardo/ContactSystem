/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - contacts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `addedbyuserid` bigint(20) DEFAULT NULL,
  `istatus` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`name`,`company`,`phone`,`email`,`addedbyuserid`,`istatus`) values (1,'Ricardo','test','test2','test',3,1),(2,'test','test','test','test',3,1);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) DEFAULT NULL,
  `statusid` tinyint(4) DEFAULT NULL COMMENT '1 = Active / 0 = InActive',
  `profileid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `login` */

insert  into `login`(`id`,`password`,`statusid`,`profileid`) values (1,'43ec4e8a91dab52a2261fa78f461b7c314cfb986',1,3);

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL COMMENT '1 = Active / 0 = InActive',
  `DateAdded` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `profile` */

insert  into `profile`(`id`,`Name`,`emailaddress`,`Status`,`DateAdded`) values (3,'Ricardo Navaja III','rica',1,'2021-08-03 16:16:07');

/* Function  structure for function  `fn_passwordgenerator` */

/*!50003 DROP FUNCTION IF EXISTS `fn_passwordgenerator` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `fn_passwordgenerator`($passwd TEXT
) RETURNS text CHARSET latin1
BEGIN
/*Testing:
select fn_passwordgenerator('123')
*/
  DECLARE $_salt 	TEXT;
  DECLARE $_hashcode	TEXT;
  
  SET $_salt 		= (SELECT SHA1(CONCAT('Kshdnru1*(#$dkjtnda0!@#fdght', $passwd)) AS salt);
  SET $_hashcode 	= (SELECT SHA1(CONCAT($_salt, $passwd)) AS hash_value);  
  	
  RETURN $_hashcode;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_contacts_iu` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_contacts_iu` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_contacts_iu`(
	   $ContactID			BIGINT
	  ,$ContactName			VARCHAR(50)
	  ,$Company			VARCHAR(50)
	  ,$PhoneNo			VARCHAR(50)
	  ,$EmailAdd			VARCHAR(50)
	  ,$addedByUserID		BIGINT
	  ,$StatusID                     TINYINT
	 
)
BEGIN
DECLARE $_HashPass              VARCHAR(200);
DECLARE $_ProfileID             BIGINT;
DECLARE $_next_id	 	INT DEFAULT 0;
DECLARE $_error_msg 	 	VARCHAR(1000);
DECLARE $_error_number	 	INT DEFAULT 100; -- 100=sucess, 101=duplicate, 102=no record inserted
/*DECLARE EXIT HANDLER FOR SQLEXCEPTION
  BEGIN
	ROLLBACK;
	SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated' AS Result;
  ROLLBACK;
END;*/
DECLARE EXIT HANDLER FOR SQLWARNING
 BEGIN
    -- WARNING
    SELECT 'WARNING' AS Result;
 ROLLBACK;
END;
START TRANSACTION;
	
	IF $ContactID = 0 THEN -- INSERT
		
		/*IF EXISTS(SELECT `emailaddress` FROM `contacts`
			  WHERE `phone`    	= $PhoneNo
			   LIMIT 1)THEN
			SET $_error_msg = 'Phone No  already exist.';
			SET $_error_number = 101;	
		END IF;
		
		IF EXISTS(SELECT `emailaddress` FROM `contacts`
			  WHERE `email`    	= $EmailAdd
			   LIMIT 1)THEN
			SET $_error_msg = 'Email   already exist.';
			SET $_error_number = 101;	
		END IF;*/
				
		IF $_error_number = 100 THEN
		
			
		
			
			INSERT INTO `contacts`
			   (
				 
				  
				 `name`
				 ,`company`
				 ,`phone`
				 ,`email`
				 ,`addedbyuserid`
			    )
			 VALUE
			    (	
				  		
				  $ContactName			
				  ,$Company			
				  ,$PhoneNo			
				  ,$EmailAdd			
				  ,$addedByUserID		
			    );
			IF ROW_COUNT() = 0 THEN		
				SET $_error_msg = 'No record inserted in Contacts.';
				SET $_error_number = 102;	
			
			END IF;	
		END IF;
	ELSE -- UPDATE
	
		IF $StatusID = 0  THEN
			UPDATE `contacts` 
				SET `istatus` = 0 
			WHERE `id` = $ContactID;
			
			IF ROW_COUNT() = 0 THEN		
				SET $_error_msg = 'No record updated in Contacts.';
				SET $_error_number = 102;	
			
			END IF;	
			
		
		ELSE
		
		UPDATE `contacts` 
				SET `name` = $ContactName,
					`company` = $Company,
					`phone` = $PhoneNo,
					`email` = $EmailAdd
				WHERE `id` = $ContactID;
			
			IF ROW_COUNT() = 0 THEN		
				SET $_error_msg = 'No record updated in Contacts.';
				SET $_error_number = 102;	
			
			END IF;	
		
		END IF;
	
	END IF;	
	
	IF $_error_number = 100 THEN -- success
	
		SELECT '1' AS 'IsSuccess', $ContactID AS 'ContactID';
		
		
		
	
		COMMIT; 
		
	ELSEIF $_error_number = 101 THEN -- duplicate record
		SELECT 
			'0'		AS 'IsSuccess',
			$_error_msg 	AS Result;
		ROLLBACK;		
	ELSE				-- no record has been commited	
		SELECT 
			'0'		AS 'IsSuccess',
			$_error_msg 	AS Result;
		ROLLBACK;		
	END IF;
 
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_contacts_s` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_contacts_s` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_contacts_s`(
	  $ContactID			BIGINT
	  ,$ContactName			VARCHAR(50)
	  ,$addedByUserID		BIGINT
	 
)
BEGIN
DECLARE $_HashPass              VARCHAR(200);
DECLARE $_ProfileID             BIGINT;
DECLARE $_next_id	 	INT DEFAULT 0;
DECLARE $_error_msg 	 	VARCHAR(1000);
DECLARE $_error_number	 	INT DEFAULT 100; -- 100=sucess, 101=duplicate, 102=no record inserted
/*DECLARE EXIT HANDLER FOR SQLEXCEPTION
  BEGIN
	ROLLBACK;
	SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated' AS Result;
  ROLLBACK;
END;*/
DECLARE EXIT HANDLER FOR SQLWARNING
 BEGIN
    -- WARNING
    SELECT 'WARNING' AS Result;
 ROLLBACK;
END;
START TRANSACTION;
	
	SELECT
	  A.`id`,
	  A.`name`,
	  IFNULL(`company` , 'N/A') AS 'company',
	  IFNULL(`phone` , 'N/A') AS 'phone',
	  IFNULL(`email` , 'N/A') AS 'email'
	  
	 FROM `contacts` A
	 WHERE A.`addedbyuserid` = $addedByUserID
	 AND A.`name` LIKE CONCAT('%', $ContactName, '%')
	 AND A.id = IFNULL($ContactID, A.id)
	 AND istatus = 1;
	
 
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_login_s` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_login_s` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login_s`(
	  
	  
	  $EmailAdd			VARCHAR(50)
	  ,$ProfilePassword		VARCHAR(100)
	 
)
BEGIN
DECLARE $_HashPass              VARCHAR(200);
DECLARE $_ProfileID             BIGINT;
DECLARE $_next_id	 	INT DEFAULT 0;
DECLARE $_error_msg 	 	VARCHAR(1000);
DECLARE $_error_number	 	INT DEFAULT 100; -- 100=sucess, 101=duplicate, 102=no record inserted
/*DECLARE EXIT HANDLER FOR SQLEXCEPTION
  BEGIN
	ROLLBACK;
	SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated' AS Result;
  ROLLBACK;
END;*/
DECLARE EXIT HANDLER FOR SQLWARNING
 BEGIN
    -- WARNING
    SELECT 'WARNING' AS Result;
 ROLLBACK;
END;
START TRANSACTION;
	SET $_HashPass = (SELECT fn_passwordgenerator($ProfilePassword));
	
	IF EXISTS(SELECT `profileid` FROM `login`
			  WHERE `password`   	= $_HashPass
			   LIMIT 1)THEN
			   
			SET $_ProfileID = ( SELECT `profileid` FROM `login`
			  WHERE `password`   	= $_HashPass
			   LIMIT 1 );
				
	ELSE 
			SET $_error_msg = 'User Not Found.';
			SET $_error_number = 101;	
		END IF;
	
	IF $_error_number = 100 THEN -- success
	
		SELECT '1' AS 'IsSuccess', $_ProfileID AS 'ProfileID';
		
		
		
	
		COMMIT; 
		
	ELSEIF $_error_number = 101 THEN -- duplicate record
		SELECT 
			'0'		AS 'IsSuccess',
			$_error_msg 	AS Result;
		ROLLBACK;		
	ELSE				-- no record has been commited	
		SELECT 
			'0'		AS 'IsSuccess',
			$_error_msg 	AS Result;
		ROLLBACK;		
	END IF;
 
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registration_iu` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registration_iu` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registration_iu`(
	   $ProfileID			BIGINT
	  ,$profileName			VARCHAR(50)
	  ,$EmailAdd			VARCHAR(50)
	  ,$ProfilePassword		VARCHAR(100)
	 
)
BEGIN
DECLARE $_HashPass              VARCHAR(200);
DECLARE $_ProfileID             BIGINT;
DECLARE $_next_id	 	INT DEFAULT 0;
DECLARE $_error_msg 	 	VARCHAR(1000);
DECLARE $_error_number	 	INT DEFAULT 100; -- 100=sucess, 101=duplicate, 102=no record inserted
/*DECLARE EXIT HANDLER FOR SQLEXCEPTION
  BEGIN
	ROLLBACK;
	SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated' AS Result;
  ROLLBACK;
END;*/
DECLARE EXIT HANDLER FOR SQLWARNING
 BEGIN
    -- WARNING
    SELECT 'WARNING' AS Result;
 ROLLBACK;
END;
START TRANSACTION;
	
	IF $ProfileID = 0 THEN -- INSERT
		
		IF EXISTS(SELECT `emailaddress` FROM `profile`
			  WHERE `emailaddress`    	= $EmailAdd
			   LIMIT 1)THEN
			SET $_error_msg = 'Email Add  already exist.';
			SET $_error_number = 101;	
		END IF;
				
		IF $_error_number = 100 THEN
		
			
		
			
			INSERT INTO `profile`
			   (
				 `Name`
				 ,`emailaddress`
				 ,`Status`
			    )
			 VALUE
			    (	
				$profileName
				,$EmailAdd
				,1	
			    );
			IF ROW_COUNT() = 0 THEN		
				SET $_error_msg = 'No record inserted in Profile.';
				SET $_error_number = 102;	
			ELSE
				SET $_HashPass = (SELECT fn_passwordgenerator($ProfilePassword));	
				SET $_ProfileID = (SELECT LAST_INSERT_ID());
				INSERT INTO `login`
				(
				  `password`
				  ,`statusid`
				  ,profileid
				)
				VALUES
				(
				  $_HashPass
				  ,1
				  ,$_ProfileID
				);
				
				
				IF ROW_COUNT() = 0 THEN		
					SET $_error_msg = 'No record inserted in Login.';
					SET $_error_number = 102;
				END IF;	
			END IF;	
		END IF;
	
	END IF;	
	
	IF $_error_number = 100 THEN -- success
	
		SELECT '1' AS 'IsSuccess';
		
		
		
	
		COMMIT; 
		
	ELSEIF $_error_number = 101 THEN -- duplicate record
		SELECT 
			'0'		AS 'IsSuccess',
			$_error_msg 	AS Result;
		ROLLBACK;		
	ELSE				-- no record has been commited	
		SELECT 
			'0'		AS 'IsSuccess',
			$_error_msg 	AS Result;
		ROLLBACK;		
	END IF;
 
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
