

CREATE TABLE IF NOT EXISTS User_Ref(
  id serial PRIMARY KEY,
  Label VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS User_acount(
  id serial PRIMARY KEY,
  name VARCHAR (250) NOT NULL,  
  firstname VARCHAR (250) NOT NULL,  
  mail VARCHAR (250) NOT NULL,  
  password VARCHAR (250) NOT NULL,  
  role INTEGER NOT NULL,
  FOREIGN KEY(role) REFERENCES User_Ref(id)
);

CREATE TABLE IF NOT EXISTS _product(
  id serial PRIMARY KEY,
  seller INTEGER NOT NULL,
  type VARCHAR (250) NOT NULL,
  Label VARCHAR (250) NOT NULL,
  picture VARCHAR (250) NOT NULL,
  description VARCHAR (250) NOT NULL,
  price INTEGER NOT NULL,
  FOREIGN KEY(seller) REFERENCES User_acount(id),
  FOREIGN KEY(type) REFERENCES _type(id)
);


CREATE TABLE IF NOT EXISTS _type(
  id serial PRIMARY KEY,
  typelabel VARCHAR (250) NOT NULL
);

CREATE TABLE IF NOT EXISTS user_purchase(
  id serial PRIMARY KEY,
  price INTEGER NOT NULL,
  buyer INTEGER NOT NULL,
  date DATE NOT NULL,
  FOREIGN KEY(buyer) REFERENCES User_acount(id)
);

CREATE TABLE IF NOT EXISTS _comment(
  id serial PRIMARY KEY,
  author INTEGER NOT NULL,
  text VARCHAR (250) NOT NULL,
  date DATE NOT NULL,
  FOREIGN KEY(author) REFERENCES User_acount(id)
);

CREATE TABLE IF NOT EXISTS _cart(
  id serial PRIMARY KEY,
  client INTEGER NOT NULL,
  product INTEGER NOT NULL,
  FOREIGN KEY(client) REFERENCES User_acount(id),
  FOREIGN KEY(product) REFERENCES _product(id)
)
