create table products (
category varchar(20) not null,
name varchar(20) not null,
stock int,
rental_price int,
purchase_price int,
image varchar(100),
primary key(name)

);

insert into products values ('Air Purifier', 'SK 매직 공기청정기',10000 , 30510, 769000,'./picture/AirPurifierMotion.jpg');
insert into products values ('Air Purifier', 'SK 매직 공기청정기 mini',10000 , 23900, 429000,'./picture/AirPurifierMini.jpg');
insert into products values ('Air Purifier', 'SK 매직 슈퍼 H 청정기',10000 , 49900, 929000,'./picture/AirPurifierSuperH.jpg');
insert into products values ('Air Purifier', 'SK 매직 슈퍼 I 청정기',10000 , 27900, 619000,'./picture/AirPurifierSuperI.jpg');
insert into products values ('Air Purifier', 'SK 매직 슈퍼 L 청정기',10000 , 24900, 619000,'./picture/AirPurifierSuperL.jpg');
insert into products values ('Humidifier', '디펜서 공기 가습기 PH15',10000 , 19510, 469000,'./picture/HumidifierPH15.jpg');
insert into products values ('Humidifier', '디펜서 공기 가습기 PH28',10000 , 21600, 519000,'./picture/HumidifierPH28.jpg');
insert into products values ('Humidifier', '어토미서 3001 원심 가습기',10000 , 8900, 215000,'./picture/Humidifier3001.jpg');
insert into products values ('Humidifier', '어토미서 505 원심 가습기',10000 , 8900, 215000,'./picture/Humidifier505.jpg');
insert into products values ('Humidifier', '어토미서 ABS3 원심 가습기',10000 , 8900, 215000,'./picture/HumidifierABS3.jpg');
insert into products values ('Humidifier', 'CP3 미니 스팀 가습기',10000 , 29500, 709000,'./picture/HumidifierCP3.jpg');
insert into products values ('Humidifier', 'RS 스팀 가습기',10000 , 45600, 1095000,'./picture/HumidifierRS.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 슬림 정수기',10000 , 20900, 89000,'./picture/WaterPurifierStand3.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 인버터 정수기',10000 , 23900, 910000,'./picture/WaterPurifierStand2.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 정수기 스윙형 블랙',10000 , 38900, 2100000,'./picture/WaterPurifierSwing2.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 정수기 스윙형 실버',10000 , 38900, 2100000,'./picture/WaterPurifierSwing1.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 정수기 스탠드형 화이트',10000 , 23900, 910000,'./picture/WaterPurifierStand1.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 정수기 업다운형 블랙',10000 , 36900, 1990900,'./picture/WaterPurifierUpDown3.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 정수기 업다운형 실버',10000 , 36900, 1990900,'./picture/WaterPurifierUpDown2.jpg');
insert into products values ('Water Purifier', 'LG 퓨리케어 정수기 업다운형 화이트',10000 , 36900, 1990900,'./picture/WaterPurifierUpDown1.jpg');
