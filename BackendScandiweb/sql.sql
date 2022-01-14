CREATE TABLE products(
 id integer AUTO_INCREMENT PRIMARY KEY  ,
   sku text UNIQUE,
    name text,
    price integer,
    weight integer default null ,
    width integer default null,
    height integer default null,
    length integer default null,
   size integer default null,
   type text
    
);