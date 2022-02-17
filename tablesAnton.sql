create table Users(
User_id int primary key unique auto_increment,
Username varchar(100) unique ,
email varchar(50),
phonenumber varchar(50)
);
create table Post(
Post_id int primary key unique auto_increment,
Employee_id int primary key ,
foreign key(Employee_id) references Employee(Employee_id),
Text_ps varchar(1000) ,
date_ps datetime,
Header varchar(50)
);
create table Comments(
Comment_id int primary key unique auto_increment,
User_id int,
foreign key(User_id) references Users(User_id),
text_cm varchar(500),
Post_id int,
foreign key(Post_id) references Posts(Post_id)

);
create table Login(
password_enc varchar(100) not null,
User_id int,
foreign key (User_id) references Users(User_id)
);
