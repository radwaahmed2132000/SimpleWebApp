CREATE TABLE products(
 id integer NOT NULL  AUTO_INCREMENT ,
   sku text ,
    name text,
    price integer,
    weight integer default null ,
    width integer default null,
    height integer default null,
    length integer default null,
   size integer default null,
   type text,
    primary key(id)
);