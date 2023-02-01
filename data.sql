CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(255) NOT NULL,
    crop VARCHAR(255) NOT NULL,
    active_ingredient VARCHAR(255) NOT NULL,
    diseases VARCHAR(255) NOT NULL
);

INSERT INTO products (product_name, crop, active_ingredient, diseases)
VALUES ("Product A", "Wheat", "Ingredient 1", "Disease 1"),
       ("Product B", "Rice", "Ingredient 2", "Disease 2"),
       ("Product C", "Maize", "Ingredient 3", "Disease 3"),
       ("Product D", "Barley", "Ingredient 4", "Disease 4"),
       ("Product E", "Soybean", "Ingredient 5", "Disease 5");
