/*Default Trains*/
insert into TRAIN (Fuel, Type, passenger_capacity) values ('Electric', 'Passenger', '69');
insert into TRAIN (Fuel, Type, passenger_capacity) values ('Electric', 'Passenger', '19');
insert into TRAIN (Fuel, Type) values ('Electric', 'Cargo');
insert into TRAIN (Fuel, Type, passenger_capacity) values ('Diesel', 'Passenger', '50');
insert into TRAIN (Fuel, Type) values ('Diesel', 'Cargo');
insert into TRAIN (Fuel, Type) values ('Diesel', 'Cargo');

  /*default conductors*/
insert into CONDUCTOR (phoneNum, condName, age, Certification) values ('2885325', 'Sir Topham Hatt', '78', 'Yes');
insert into CONDUCTOR (phoneNum, condName, age, Certification) values ('1373388', 'Samus', '37', 'Yes');
insert into CONDUCTOR (phoneNum, condName, age, Certification) values ('9333819', 'John', '34', 'Yes');
insert into CONDUCTOR (phoneNum, condName, age, Certification) values ('4338853', 'Scott', '56', 'Yes');
insert into CONDUCTOR (phoneNum, condName, age, Certification) values ('4688022', 'Timmy', '14', 'No');
insert into CONDUCTOR (phoneNum, condName, age, Certification) values ('3003596', 'Dundee', '28', 'No');

/*default Route*/
insert into ROUTES (typesOfTrain, name) values ('Passanger', 'Emerald Serpent Line');
insert into ROUTES (typesOfTrain, name) values ('Passanger', 'Train to Hell');
insert into ROUTES (typesOfTrain, name) values ('Passanger', 'Volcano Vista');
insert into ROUTES (typesOfTrain, name) values ('Passanger', 'Polar Express');
insert into ROUTES (typesOfTrain, name) values ('Cargo', 'Weyland-Yutani Cargo');
insert into ROUTES (typesOfTrain, name) values ('Cargo', 'Canadian Pacific Rail');
insert into ROUTES (typesOfTrain, name) values ('Cargo', 'Black Site Cargo');

/*default Stations */
insert into STATION (name, openingTime, closingTime, location, Type) values ('Lethbridge Cargo', '9:15', '22:00', 'Lethbridge', 'Cargo');
insert into STATION (name, openingTime, closingTime, location, Type) values ('Calgary Cargo', '9:00', '22:00', 'Calgary', 'Cargo');
insert into STATION (name, openingTime, closingTime, location, Type) values ('Heritage Park Station', '10:00', '18:00', 'Calgary', 'Passanger');
insert into STATION (name, openingTime, closingTime, location, Type) values ('Brunch Stop', '8:00', '12:00', 'Lethbridge', 'Passanger');
insert into STATION (name, openingTime, closingTime, location, Type) values ('P&H Grain', '10:00', '22:00', 'Lethbridge', 'Cargo');
insert into STATION (name, openingTime, closingTime, location, Type) values ('Stalkers Station', '6:00', '20:00', 'The Zone', 'Passanger');
insert into STATION (name, location, Type) values ('The End of The Line', 'Hades', 'Passanger');
