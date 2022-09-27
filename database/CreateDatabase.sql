-- CREATE DATABASE electromenager_bdd;

CREATE TABLE IF NOT EXISTS User_Ref(
  id serial PRIMARY KEY,
  Label VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS User(
  id serial PRIMARY KEY,
  name VARCHAR (250) NOT NULL,  
  firstname VARCHAR (250) NOT NULL,  
  mail VARCHAR (250) NOT NULL,  
  password VARCHAR (250) NOT NULL,  
  role INTEGER NOT NULL,
  FOREIGN KEY(role) REFERENCES User_Ref(id)
);
