CREATE TABLE products(
 id integer AUTO_INCREMENT PRIMARY KEY  ,
   sku text UNIQUE,
    name text,
    price integer,
    weight integer ,
    width integer,
    height integer,
    length integer,
   size integer,
   type text
    
);