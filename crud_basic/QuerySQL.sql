# create table products
CREATE TABLE products
(
    product_id          INT AUTO_INCREMENT PRIMARY KEY,
    product_name        VARCHAR(100),
    product_price       DECIMAL(10, 2),
    product_description TEXT,
    product_image       VARCHAR(100)
);

# get all products
SELECT *
FROM products;

# insert data to table products
INSERT INTO products (product_name, product_price, product_description, product_image)
VALUES (:product_name, :product_price, :product_description, :product_image)

