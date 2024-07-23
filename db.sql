CREATE DATABASE IF NOT EXISTS diemthi_db;

USE diemthi_db;

CREATE TABLE IF NOT EXISTS thanhhoa_2023_1 (
    id INT NOT NULL AUTO_INCREMENT,
    SBD INT,
    Toán FLOAT,
    Văn FLOAT,
    Ngoại_ngữ FLOAT,
    Sinh FLOAT,
    Sử FLOAT,
    Địa FLOAT,
    GDCD FLOAT,
    Hóa FLOAT,
    Lí FLOAT,
    sumD FLOAT,
    sumC FLOAT,
    sumB FLOAT,
    sumA FLOAT,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
