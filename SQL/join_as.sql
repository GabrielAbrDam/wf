INSERT INTO country(`name`) VALUE ("Luxembourg");

INSERT INTO town(`name`, postal_code, Countryid) 
    SELECT 'Luxembourg City', 'L-1480', id
   FROM country WHERE `name` = "Luxembourg";
   
INSERT INTO address(address_field_1, Townid)
    SELECT 'rue du moulin', id
   FROM town WHERE `name`= "Luxembourg City";
   
INSERT INTO address_type(label) VALUE("invoice");

INSERT INTO person(firstname, lastname) VALUE("jason", "Burns");

INSERT INTO person_address VALUE(1, 1, 1);

SELECT count(human.id) as humanCount from person AS human
    JOIN person_address ON human.id = person_address.Personid
    JOIN address ON person_address.Addressid = address.id
    JOIN town ON address.Townid = town.id
    JOIN country ON town.Countryid = country.id;