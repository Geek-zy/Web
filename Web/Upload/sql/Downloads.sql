
create table Mac (

   	id int unsigned not null auto_increment primary key,
   	Tag char(16) not null,
	Name text not null,
   	Version text not null,
	Introduce text not null,
	Worked_OS text not null,
	Course_URL text not null,
	Download_URL text not null,
	Image_URL text not null,
	Remarks_1 text null default '',
	Remarks_2 text null default ''
);

alter table Mac AUTO_INCREMENT=100;

insert into Mac (id, Tag, Name, Version, Introduce, Worked_OS, Course_URl, Download_URL, Image_URL, Remarks_1, Remarks_2) values ('序号', '软件编号', '软件名称', '软件版本', '软件简介', '运行环境', '教程地址', '下载地址', '图标地址', '备注1', '备注2');
insert into Mac (id, Tag, Name, Version, Introduce, Worked_OS, Course_URl, Download_URL, Image_URL, Remarks_1, Remarks_2) values (NULL, '(0001,0001)', 'Ubuntu', '14.04', '最好用的个人Linux操作系统', 'Linux', 'http://www.baidu.com', 'package/OS/ubuntu-14.04-desktop-amd64.iso', 'ico/panda.png', NULL, NULL);
insert into Mac (id, Tag, Name, Version, Introduce, Worked_OS, Course_URl, Download_URL, Image_URL, Remarks_1, Remarks_2) values (NULL, '(0001,0001)', 'Ubuntu', '14.04', '最好用的个人Linux操作系统', 'Linux', 'http://www.baidu.com', 'package/OS/ubuntu-14.04-desktop-amd64.iso', 'ico/panda.png', NULL, NULL);
insert into Mac (id, Tag, Name, Version, Introduce, Worked_OS, Course_URl, Download_URL, Image_URL, Remarks_1, Remarks_2) values (NULL, '(0001,0001)', 'Ubuntu', '14.04', '最好用的个人Linux操作系统', 'Linux', 'http://www.baidu.com', 'package/OS/ubuntu-14.04-desktop-amd64.iso', 'ico/panda.png', NULL, NULL);
insert into Mac (id, Tag, Name, Version, Introduce, Worked_OS, Course_URl, Download_URL, Image_URL, Remarks_1, Remarks_2) values (NULL, '(0001,0001)', 'Ubuntu', '14.04', '最好用的个人Linux操作系统', 'Linux', 'http://www.baidu.com', 'package/OS/ubuntu-14.04-desktop-amd64.iso', 'ico/panda.png', NULL, NULL);
