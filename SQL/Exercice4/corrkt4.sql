
ALTER TABLE person_address ADD CONSTRAINT PersonID FOREIGN KEY (Personid) REFERENCES person(id);
ALTER TABLE person_address ADD CONSTRAINT adresse_typeid FOREIGN KEY (Address_typeid) REFERENCES address_type(id);
ALTER TABLE person_address ADD CONSTRAINT adressidfff FOREIGN KEY (Addressid) REFERENCES address(id);
ALTER TABLE Address ADD CONSTRAINT Town_Add FOREIGN KEY (Townid) REFERENCES Town(id);
ALTER TABLE Town ADD CONSTRAINT Country_Add FOREIGN KEY (Countryid) REFERENCES Country(id);
