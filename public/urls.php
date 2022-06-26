https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-lamp-amazon-linux-2.html

https://greggborodaty.com/amazon-linux-2-upgrading-from-php-7-2-to-php-7-4/

create database datareplication;
use datareplication;
create table test_data(
id int auto_increment primary key not null,
data_key varchar(200),
data_value text
);

select * from test_data;
