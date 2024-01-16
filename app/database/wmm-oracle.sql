CREATE TABLE Users( 
      id number(10)    NOT NULL , 
      user_name varchar  (30)   , 
      user_email varchar  (100)   , 
      user_password varchar  (30)   , 
 PRIMARY KEY (id)) ; 

 
  CREATE SEQUENCE Users_id_seq START WITH 1 INCREMENT BY 1; 

CREATE OR REPLACE TRIGGER Users_id_seq_tr 

BEFORE INSERT ON Users FOR EACH ROW 

    WHEN 

        (NEW.id IS NULL) 

    BEGIN 

        SELECT Users_id_seq.NEXTVAL INTO :NEW.id FROM DUAL; 

END;
 