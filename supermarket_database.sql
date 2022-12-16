--
-- File generated with SQLiteStudio v3.4.1 on Thu Dec 15 01:26:07 2022
--
-- Text encoding used: UTF-8
--
-- PRAGMA foreign_keys = off;
-- BEGIN TRANSACTION;
USE DB;
CREATE TABLE IF NOT EXISTS export_bill (
    ID                     INT          PRIMARY KEY
                                        NOT NULL,
    Date                   DATETIME     DEFAULT NULL,
    Name                   VARCHAR (45) DEFAULT NULL,
    Cashier_ID             INT          DEFAULT NULL,
    Customer_ID            INT          DEFAULT NULL,
    Saving_point_policy_ID INT          DEFAULT NULL
);

-- Table: bill_has_goods
CREATE TABLE IF NOT EXISTS bill_has_goods (
    Export_Bill_ID INT NOT NULL
                       REFERENCES export_bill (ID) ON DELETE CASCADE
                                                   ON UPDATE CASCADE,
    Goods_ID       INT DEFAULT NULL
                       REFERENCES goods (ID) ON DELETE CASCADE
                                             ON UPDATE RESTRICT,
    Quantity       INT DEFAULT NULL,
    Total_cost     INT DEFAULT NULL,
    PRIMARY KEY (
        Export_Bill_ID,
        Goods_ID
    )
);


-- Table: cashier
CREATE TABLE IF NOT EXISTS cashier (
    ID INT PRIMARY KEY
         NOT NULL
);

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        111111111
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        123456789
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        134827512
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        213456421
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        228888999
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        235651232
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        238511292
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        334444555
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        723152681
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        871234123
                    );

INSERT INTO cashier (
                        ID
                    )
                    VALUES (
                        898834123
                    );


-- Table: customer
CREATE TABLE IF NOT EXISTS customer (
    ID            INT          PRIMARY KEY
                               NOT NULL,
    First_name    VARCHAR (45) DEFAULT NULL,
    Last_name     VARCHAR (45) DEFAULT NULL,
    Gender        VARCHAR (45) DEFAULT NULL,
    Address       VARCHAR (45) DEFAULT NULL,
    Phone_number  VARCHAR (45) DEFAULT NULL,
    Date_of_birth DATETIME     DEFAULT NULL,
    Type          VARCHAR (45) DEFAULT NULL
);

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         100,
                         'Duc',
                         'Pham',
                         'Male',
                         '121 Lu Gia, Ho Chi Minh',
                         '0912939987',
                         '2002-04-03 00:00:00',
                         'VIP'
                     );

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         2,
                         'Vinh',
                         'Luu',
                         'Male',
                         '32 Ba Hat, Ho Chi Minh',
                         '0938227817',
                         '2002-08-26 00:00:00',
                         'Gold'
                     );

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         3,
                         'Tai',
                         'Thai',
                         'Male',
                         '123 Nguyen Xuan Khoat, Ho Chi Minh',
                         '0987172817',
                         '2002-12-31 00:00:00',
                         'Silver'
                     );

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         4,
                         'Chuan',
                         'Nguyen',
                         'Male',
                         '268 Ly Thuong Kiet, Ho Chi Minh',
                         '0912311838',
                         '2002-11-09 00:00:00',
                         'Normal'
                     );

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         5,
                         'Thanh',
                         'Pham',
                         'Male',
                         '151 Hoang Dieu, Ha Noi',
                         '0902123717',
                         '2002-11-23 00:00:00',
                         'Silver'
                     );

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         6,
                         'Bao',
                         'Ho',
                         'Female',
                         '139 Phan Dinh Phung, Ha Noi',
                         '0903214212',
                         '1999-12-24 00:00:00',
                         'VIP'
                     );

INSERT INTO customer (
                         ID,
                         First_name,
                         Last_name,
                         Gender,
                         Address,
                         Phone_number,
                         Date_of_birth,
                         Type
                     )
                     VALUES (
                         7,
                         'Hoa',
                         'Nguyen',
                         'Female',
                         '167 Yet Kieu, Da Nang',
                         '0902781232',
                         '1998-07-08 00:00:00',
                         'Gold'
                     );


-- Table: customer_card
CREATE TABLE IF NOT EXISTS customer_card (
    Customer_ID  INT  PRIMARY KEY
                      NOT NULL,
    Issue_date   DATE DEFAULT NULL,
    Saving_point INT  DEFAULT NULL
);

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              1,
                              '2022-01-01',
                              100
                          );

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              2,
                              '2022-04-05',
                              200
                          );

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              3,
                              '2020-12-12',
                              500
                          );

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              4,
                              '2018-12-06',
                              1100
                          );

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              5,
                              '2019-02-28',
                              600
                          );

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              6,
                              '2021-01-31',
                              300
                          );

INSERT INTO customer_card (
                              Customer_ID,
                              Issue_date,
                              Saving_point
                          )
                          VALUES (
                              7,
                              '2022-02-27',
                              200
                          );


-- Table: employee
CREATE TABLE IF NOT EXISTS employee (
    ID                INT          PRIMARY KEY
                                   NOT NULL,
    Phone_number      VARCHAR (45) DEFAULT NULL,
    Address           VARCHAR (45) DEFAULT NULL,
    First_name        VARCHAR (45) DEFAULT NULL,
    Last_name         VARCHAR (45) DEFAULT NULL,
    Start_date        DATE         DEFAULT NULL,
    Salary            INT          DEFAULT NULL,
    Role              VARCHAR (45) DEFAULT NULL,
    Gender            VARCHAR (45) DEFAULT NULL,
    Date_of_birth     DATE         DEFAULT NULL,
    Supermarket_Scode INT          DEFAULT NULL
);

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         111111111,
                         '0902738123',
                         '123 Nguyen Dinh Chieu',
                         'Loi',
                         'Nguyen',
                         '2010-01-03',
                         5000000,
                         'Cashier',
                         'Male',
                         '1998-04-15',
                         70000
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         123456789,
                         '0902134234',
                         '182 Ba Hat Phuong 9 Quan 10',
                         'Thuan',
                         'Le',
                         '2013-09-01',
                         8000000,
                         'Manager',
                         'Male',
                         '1989-01-15',
                         70000
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         134827512,
                         '0902049391',
                         '356 Hai Ba Trung, Hoan Kiem',
                         'Thuy',
                         'Luu',
                         '2013-01-01',
                         4000000,
                         'Cashier',
                         'Female',
                         '2000-12-15',
                         15000
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         213456421,
                         '0902456712',
                         '135 Le Duc Tho, Son Tra',
                         'Tu',
                         'Ha',
                         '2018-06-19',
                         5000000,
                         'Cashier',
                         'Female',
                         '1995-06-15',
                         50506
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         228888999,
                         '0904231222',
                         '156 Ly Thuong Kiet',
                         'Thanh',
                         'Le',
                         '2014-02-27',
                         4000000,
                         'Cashier',
                         'Male',
                         '1999-03-03',
                         70000
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         235651232,
                         '0903201031',
                         '145 Le Dinh Ly, Thanh Khe',
                         'Nam',
                         'Nguyen',
                         '2020-01-12',
                         5000000,
                         'Cashier',
                         'Male',
                         '1998-12-12',
                         50506
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         238511292,
                         '0908212341',
                         '154 Cao Thang, Hai Chau ',
                         'Manh',
                         'Nguyen',
                         '2019-12-12',
                         8000000,
                         'Manager',
                         'Male',
                         '1990-09-01',
                         50506
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         334444555,
                         '0903671671',
                         '131 Nguyen Tri Phuong',
                         'Nu',
                         'Hoang',
                         '2018-08-18',
                         4000000,
                         'Cashier',
                         'Female',
                         '1995-12-31',
                         70000
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         723152681,
                         '0901012421',
                         '145 Nha Chung, Hoan Kiem',
                         'Quang',
                         'Ho',
                         '2000-09-19',
                         4000000,
                         'Cashier',
                         'Male',
                         '1989-12-12',
                         15000
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         871234123,
                         '0907123456',
                         '156 Ton Duc Thang, Lien Chieu',
                         'Tran',
                         'Vuong',
                         '2018-09-17',
                         5000000,
                         'Cashier',
                         'Female',
                         '1997-08-12',
                         50506
                     );

INSERT INTO employee (
                         ID,
                         Phone_number,
                         Address,
                         First_name,
                         Last_name,
                         Start_date,
                         Salary,
                         Role,
                         Gender,
                         Date_of_birth,
                         Supermarket_Scode
                     )
                     VALUES (
                         898834123,
                         '0908172871',
                         '321 Tue Tinh, Dong Da',
                         'Trang',
                         'Luu',
                         '2019-12-23',
                         8000000,
                         'Manager',
                         'Female',
                         '1997-08-12',
                         15000
                     );


-- Table: export_bill

INSERT INTO export_bill (
                            ID,
                            Date,
                            Name,
                            Cashier_ID,
                            Customer_ID,
                            Saving_point_policy_ID
                        )
                        VALUES (
                            1,
                            '2022-04-05 00:00:00',
                            'Bill_1',
                            111111111,
                            1,
                            123
                        );


-- Table: goods
CREATE TABLE IF NOT EXISTS goods (
    ID          INT           PRIMARY KEY
                              NOT NULL,
    Brand       VARCHAR (45)  DEFAULT NULL,
    Name        VARCHAR (45)  DEFAULT NULL,
    Price       INT           DEFAULT NULL,
    Type        VARCHAR (45)  DEFAULT NULL,
    Description VARCHAR (255) DEFAULT NULL
);

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      1,
                      'PepsiCo',
                      'Pepsi Can',
                      15000,
                      'Foods and Beverages',
                      '1 can of Pepsi contains 320ml of pepsi'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      2,
                      'Coca-Cola',
                      'Coca-cola',
                      10600,
                      'Foods and Beverages',
                      '1 can of Coca-Cola contains 320ml.'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      3,
                      'BreadTalk',
                      'Sweet Bread',
                      15000,
                      'Foods and Beverages',
                      '1 loaf of bread'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      4,
                      'Vietgap',
                      'Broccoli',
                      45000,
                      'Foods And Beverages',
                      '300g of Broccoli'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      5,
                      'Vietgap',
                      'Kale',
                      46500,
                      'Foods And Beverages',
                      '500g of Kale'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      6,
                      'Acer',
                      'Acer Nitro 5 Gaming AN515',
                      19600000,
                      'Electronics',
                      'This laptop contains 8GB RAM, AMD Ryzen 5 chip.'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      7,
                      'Apple',
                      'MacBook Air M1',
                      29290000,
                      'Electronics',
                      'This laptop contains 7-core GPU, SSD 256GB, chip M1'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      8,
                      'Apple',
                      'Iphone 11',
                      11690000,
                      'Electronics',
                      'This iphone contains chip Apple 13 Bionic; memory has 64 GB'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      9,
                      'Decathlon',
                      'Tennis Racket TR160',
                      825000,
                      'Sports',
                      'Tennis Rackets for Adults'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      10,
                      'Addidas',
                      'Ultra 4DFWD',
                      6000000,
                      'Sports',
                      'Running shoes'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      11,
                      'Uniqlo',
                      'Disney Long Sleeve Sweatshirt',
                      686000,
                      'Clothes',
                      'Sweatshirt'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      12,
                      'Uniqlo',
                      'Peanuts Long Sleeve Sweatshirt',
                      784000,
                      'Clothes',
                      'Sweatshirt'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      13,
                      'Uniqlo',
                      'AIRism Cotton Crew Neck Oversized T-Shirt',
                      391000,
                      'Clothes',
                      'T-Shirt'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      14,
                      'Decathlon',
                      'Riverside 500 Bicycle',
                      9995000,
                      'Sports',
                      'Bicycles'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      15,
                      'Dove',
                      'Dove Men+ Care Body Wash for Men Skin Care',
                      635789,
                      'Health and Personal Care',
                      'This bottle contains 532.324 ml of solution.'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      16,
                      'Berroca',
                      'Berroca C effervescent tablet',
                      63000,
                      'Heath and Personal Care',
                      'This tube contains 10 effervescent tablets'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      17,
                      'Colgate',
                      'Colgate Electric Toothbrush Sonic 360 Charcoal',
                      359000,
                      'Heath and Personal Care',
                      'This electric toothbrush is for adults, use batteries, uses sound technology'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      18,
                      'Decathlon',
                      'Football ball France',
                      135000,
                      'Sports',
                      'This ball is very stable and durable, drawn inspiration from France'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      19,
                      'Decathlon',
                      'Hiking Bag NH100 10L',
                      63000,
                      'Sports',
                      'This bag is designed for every age and for hiking purposes; This bag can contain bottles of water, light snacks'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      20,
                      'YaMe',
                      'T-Shirt Round Neck Anubis Ver11',
                      227000,
                      'Clothes',
                      'This bag is designed comfortability, durability. Also this shirt is very relevant to modern taste'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      21,
                      'Canifa',
                      'Shealth Dress for Woman',
                      299000,
                      'Clothes',
                      'This dress is made of cotton, is tight and great for hang-out use'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      22,
                      'Canifa',
                      'Pajama for Women 6LS22W010',
                      449000,
                      'Clothes',
                      'This pajama is made for comfortable use at home and during sleep'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      23,
                      'Kanen',
                      'Kanen K6 Headphone',
                      480000,
                      'Electronics',
                      'This headphone uses bluetooth technology but can also use wires. Great for listening to music'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      24,
                      'Orihiro Japan',
                      'Shark Fin Tablet Squalene Orihiro',
                      570000,
                      'Health and Personal Care',
                      'This bottle contains 360 capsules, and ingested by mouth. Great for strengthening bones health'
                  );

INSERT INTO goods (
                      ID,
                      Brand,
                      Name,
                      Price,
                      Type,
                      Description
                  )
                  VALUES (
                      25,
                      'Pharmekal',
                      'Omega-3 Fish Oil',
                      175000,
                      'Health and Personal Care',
                      'This bottle contains 100 softgels, contains 3 types of fat: EPA, DHA, DPA. Great for heart health'
                  );


-- Table: import_bill
CREATE TABLE IF NOT EXISTS import_bill (
    ID                INT          PRIMARY KEY
                                   NOT NULL,
    Name              VARCHAR (45) DEFAULT NULL,
    Date              DATETIME     DEFAULT NULL,
    Supplier_ID       INT          DEFAULT NULL,
    Supermarket_Scode INT          DEFAULT NULL
);


-- Table: import_goods
CREATE TABLE IF NOT EXISTS import_goods (
    Import_Bill_ID INT NOT NULL,
    Goods_ID       INT NOT NULL,
    Quantity       INT DEFAULT NULL,
    Total_cost     INT DEFAULT NULL,
    PRIMARY KEY (
        Import_Bill_ID,
        Goods_ID
    )
);


-- Table: Login_info
CREATE TABLE IF NOT EXISTS Login_info (
    userID    INT          PRIMARY KEY
                           UNIQUE
                           NOT NULL,
    username  VARCHAR (45),
    password  VARCHAR (60),
    userlevel INT
);

INSERT INTO Login_info (
                           userID,
                           username,
                           password,
                           userlevel
                       )
                       VALUES (
                           1,
                           'chuan',
                           'chuan',
                           100
                       );

INSERT INTO Login_info (
                           userID,
                           username,
                           password,
                           userlevel
                       )
                       VALUES (
                           2,
                           'vinh',
                           'vinh',
                           50
                       );

INSERT INTO Login_info (
                           userID,
                           username,
                           password,
                           userlevel
                       )
                       VALUES (
                           3,
                           'tai',
                           'tai',
                           50
                       );

INSERT INTO Login_info (
                           userID,
                           username,
                           password,
                           userlevel
                       )
                       VALUES (
                           4,
                           'duc',
                           'duc',
                           10
                       );

INSERT INTO Login_info (
                           userID,
                           username,
                           password,
                           userlevel
                       )
                       VALUES (
                           5,
                           'thanh',
                           'thanh',
                           10
                       );

INSERT INTO Login_info (
                           userID,
                           username,
                           password,
                           userlevel
                       )
                       VALUES (
                           6,
                           'hoa',
                           'hoa',
                           10
                       );


-- Table: manager
CREATE TABLE IF NOT EXISTS manager (
    ID    INT NOT NULL,
    Scode INT DEFAULT NULL,
    PRIMARY KEY (
        ID
    )
);

INSERT INTO manager (
                        ID,
                        Scode
                    )
                    VALUES (
                        898834123,
                        15000
                    );

INSERT INTO manager (
                        ID,
                        Scode
                    )
                    VALUES (
                        238511292,
                        50506
                    );

INSERT INTO manager (
                        ID,
                        Scode
                    )
                    VALUES (
                        123456789,
                        70000
                    );


-- Table: offer
CREATE TABLE IF NOT EXISTS offer (
    Supermarket_Scode INT          NOT NULL,
    Sale_promo_ID     VARCHAR (45) NOT NULL,
    Start_date        DATE         DEFAULT NULL,
    End_date          DATE         DEFAULT NULL,
    PRIMARY KEY (
        Supermarket_Scode,
        Sale_promo_ID
    )
);

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      15000,
                      '15100001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      15000,
                      '15200001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      15000,
                      '15300001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      15000,
                      '15400001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      50506,
                      '50100001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      50506,
                      '50200001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      50506,
                      '50300001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      50506,
                      '50400001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      70000,
                      '70100001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      70000,
                      '70200001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      70000,
                      '70300001',
                      '2022-11-25',
                      '2022-11-27'
                  );

INSERT INTO offer (
                      Supermarket_Scode,
                      Sale_promo_ID,
                      Start_date,
                      End_date
                  )
                  VALUES (
                      70000,
                      '70400001',
                      '2022-11-25',
                      '2022-11-27'
                  );


-- Table: sales_promotion
CREATE TABLE IF NOT EXISTS sales_promotion (
    ID   INT          PRIMARY KEY
                      NOT NULL,
    Name VARCHAR (45) DEFAULT NULL
);

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                15100001,
                                'Ha Noi - Black Friday - VIP member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                15200001,
                                'Ha Noi - Black Friday - Gold member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                15300001,
                                'Ha Noi - Black Friday - Silver member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                15400001,
                                'Ha Noi - Black Friday - Normal member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                50100001,
                                'Da Nang - Black Friday - VIP member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                50200001,
                                'Da Nang - Black Friday - Gold member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                50300001,
                                'Da Nang - Black Friday - Silver member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                50400001,
                                'Da Nang - Black Friday - Normal member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                70100001,
                                'Ho Chi Minh - Black Friday - VIP member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                70200001,
                                'Ho Chi Minh - Black Friday - Gold member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                70300001,
                                'Ho Chi Minh - Black Friday - Silver member'
                            );

INSERT INTO sales_promotion (
                                ID,
                                Name
                            )
                            VALUES (
                                70400001,
                                'Ho Chi Minh - Black Friday - Normal member'
                            );


-- Table: sales_promotion_condition
CREATE TABLE IF NOT EXISTS sales_promotion_condition (
    ID             INT          NOT NULL,
    Discount_rate  INT          DEFAULT NULL,
    Customer_Type  VARCHAR (45) DEFAULT NULL,
    Cost_Threshold INT          DEFAULT NULL,
    PRIMARY KEY (
        ID
    )
);

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          15100001,
                                          20,
                                          'VIP',
                                          3000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          15200001,
                                          15,
                                          'Gold',
                                          3000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          15300001,
                                          10,
                                          'Silver',
                                          3000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          15400001,
                                          5,
                                          'Normal',
                                          3000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          50100001,
                                          20,
                                          'VIP',
                                          2500000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          50200001,
                                          15,
                                          'Gold',
                                          2500000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          50300001,
                                          10,
                                          'Silver',
                                          2500000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          50400001,
                                          5,
                                          'Normal',
                                          2500000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          70100001,
                                          20,
                                          'VIP',
                                          4000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          70200001,
                                          15,
                                          'Gold',
                                          4000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          70300001,
                                          10,
                                          'Silver',
                                          4000000
                                      );

INSERT INTO sales_promotion_condition (
                                          ID,
                                          Discount_rate,
                                          Customer_Type,
                                          Cost_Threshold
                                      )
                                      VALUES (
                                          70400001,
                                          5,
                                          'Normal',
                                          4000000
                                      );


-- Table: saving_point_policy
CREATE TABLE IF NOT EXISTS saving_point_policy (
    ID         INT          NOT NULL,
    Name       VARCHAR (45) DEFAULT NULL,
    Percentage INT          DEFAULT NULL,
    Start_date DATETIME     DEFAULT NULL,
    PRIMARY KEY (
        ID
    )
);

INSERT INTO saving_point_policy (
                                    ID,
                                    Name,
                                    Percentage,
                                    Start_date
                                )
                                VALUES (
                                    123,
                                    'VIP Discount',
                                    20,
                                    '2022-01-01 00:00:00'
                                );

INSERT INTO saving_point_policy (
                                    ID,
                                    Name,
                                    Percentage,
                                    Start_date
                                )
                                VALUES (
                                    134,
                                    'Gold Discount',
                                    10,
                                    '2022-01-01 00:00:00'
                                );

INSERT INTO saving_point_policy (
                                    ID,
                                    Name,
                                    Percentage,
                                    Start_date
                                )
                                VALUES (
                                    145,
                                    'Silver Discount',
                                    5,
                                    '2022-01-01 00:00:00'
                                );


-- Table: store
CREATE TABLE IF NOT EXISTS store (
    Supermarket_Scode INT NOT NULL,
    Goods_ID          INT NOT NULL,
    Quantity          INT DEFAULT NULL,
    PRIMARY KEY (
        Supermarket_Scode,
        Goods_ID
    )
);

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      1,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      2,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      3,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      4,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      5,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      6,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      7,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      8,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      9,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      10,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      11,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      12,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      13,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      14,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      15,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      16,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      17,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      18,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      19,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      20,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      21,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      22,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      23,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      24,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      70000,
                      25,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      1,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      2,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      3,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      4,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      5,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      6,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      7,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      8,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      9,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      10,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      11,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      12,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      13,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      14,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      15,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      16,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      17,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      18,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      19,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      20,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      21,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      22,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      23,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      24,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      50506,
                      25,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      1,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      2,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      3,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      4,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      5,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      6,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      7,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      8,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      9,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      10,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      11,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      12,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      13,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      14,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      15,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      16,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      17,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      18,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      19,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      20,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      21,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      22,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      23,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      24,
                      NULL
                  );

INSERT INTO store (
                      Supermarket_Scode,
                      Goods_ID,
                      Quantity
                  )
                  VALUES (
                      15000,
                      25,
                      NULL
                  );


-- Table: supermarket
CREATE TABLE IF NOT EXISTS supermarket (
    SCode               INT          NOT NULL,
    Name                VARCHAR (45) DEFAULT NULL,
    Location            VARCHAR (45) DEFAULT NULL,
    Number_of_employees VARCHAR (45) DEFAULT NULL,
    PRIMARY KEY (
        SCode
    )
);

INSERT INTO supermarket (
                            SCode,
                            Name,
                            Location,
                            Number_of_employees
                        )
                        VALUES (
                            15000,
                            'Ha Noi Satra',
                            'Ha Noi',
                            '2000'
                        );

INSERT INTO supermarket (
                            SCode,
                            Name,
                            Location,
                            Number_of_employees
                        )
                        VALUES (
                            50506,
                            'Da Nang co-op',
                            'Da Nang',
                            '1000'
                        );

INSERT INTO supermarket (
                            SCode,
                            Name,
                            Location,
                            Number_of_employees
                        )
                        VALUES (
                            70000,
                            'Ho Chi Minh Co-op',
                            'Ho Chi Minh city',
                            '3000'
                        );


-- Table: supplier
CREATE TABLE IF NOT EXISTS supplier (
    ID            INT          NOT NULL,
    Name          VARCHAR (45) DEFAULT NULL,
    Location      VARCHAR (45) DEFAULT NULL,
    Email_address VARCHAR (45) DEFAULT NULL,
    Phone_number  VARCHAR (45) DEFAULT NULL,
    PRIMARY KEY (
        ID
    )
);

INSERT INTO supplier (
                         ID,
                         Name,
                         Location,
                         Email_address,
                         Phone_number
                     )
                     VALUES (
                         1,
                         'Ha Noi Retailers',
                         'Ha Noi',
                         'hanoifoods@gmail.com',
                         '0902034712'
                     );

INSERT INTO supplier (
                         ID,
                         Name,
                         Location,
                         Email_address,
                         Phone_number
                     )
                     VALUES (
                         2,
                         'Da Nang wholesale',
                         'Da Nang',
                         'danangwholesale@gmail.com',
                         '0903765189'
                     );

INSERT INTO supplier (
                         ID,
                         Name,
                         Location,
                         Email_address,
                         Phone_number
                     )
                     VALUES (
                         3,
                         'Ho Chi Minh Coop',
                         'Ho Chi Minh',
                         'hochiminhcoop@gmail.com',
                         '0903782642'
                     );

INSERT INTO supplier (
                         ID,
                         Name,
                         Location,
                         Email_address,
                         Phone_number
                     )
                     VALUES (
                         4,
                         'Ha Noi Electronics',
                         'Ha Noi',
                         'hanoielectron@gmail.com',
                         '0902742123'
                     );

INSERT INTO supplier (
                         ID,
                         Name,
                         Location,
                         Email_address,
                         Phone_number
                     )
                     VALUES (
                         5,
                         'Da Nang Fresh',
                         'Da Nang',
                         'danangfresh@gmail.com',
                         '0903651521'
                     );

INSERT INTO supplier (
                         ID,
                         Name,
                         Location,
                         Email_address,
                         Phone_number
                     )
                     VALUES (
                         6,
                         'Ho Chi Minh market',
                         'Ho Chi Minh',
                         'hochiminhmart@gmail.com',
                         '0902456128'
                     );


-- COMMIT TRANSACTION;
-- PRAGMA foreign_keys = on;
