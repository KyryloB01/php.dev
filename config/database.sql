CREATE TABLE categories (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    image VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE brands (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tags (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    slug VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE badges (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO categories (name, image) VALUES
('Electronics', 'electronics.jpg'),
('Clothes', 'clothes.jpg'),
('Shoes', 'shoes.jpg');

INSERT INTO brands (name, description) VALUES
('Nike', 'Sportswear and shoes'),
('Apple', 'Electronics and gadgets'),
('Zara', 'Fashion clothing');

INSERT INTO tags (name, slug) VALUES
('Sale', 'sale'),
('New', 'new'),
('Popular', 'popular');

INSERT INTO badges (title) VALUES
('Bestseller'),
('Limited'),
('Exclusive');

SELECT * FROM categories;
SELECT * FROM brands;
SELECT * FROM tags;
SELECT * FROM badges;
