 CREATE TABLE IF NOT EXISTS `schoolandTeacher` (  
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,  
  `school_name` text NOT NULL, 
   `teacher_name` text NOT NULL, 
  PRIMARY KEY (`teacher_id`)  
 )   ENGINE=InnoDB CHARACTER SET utf8mb4;
 --  
 -- Dumping data for table `tbl_country`  
 --  
 INSERT INTO `schoolAndTeacher` (`school_name`, `teacher_name`) VALUES  
 ('星海实验中学', '周红云'),  
 ('新城花园小学', '周丽丽'),  
 ('新城花园幼儿园', '疯子'), 
 ('新城花园酒店', '骗子')

 ALTER TABLE schoolandteacher ADD COLUMN teacher_comment VARCHAR(255) AFTER teacher_name;

  ALTER TABLE schoolandteacher DROP COLUMN teacher_comment



以下为数据库二， 存储老师id和各自的评论





 CREATE TABLE IF NOT EXISTS `teacherIndividualComment` (  
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,  
  `teacherIdentifier` text NOT NULL, 
  `teacherPhotoUrl` text NOT NULL, 
   `teacher_comment` text NOT NULL, 
  PRIMARY KEY (`teacher_id`)  
 )   ENGINE=InnoDB CHARACTER SET utf8mb4;