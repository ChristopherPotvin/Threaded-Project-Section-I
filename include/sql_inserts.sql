
-- PACKAGE

INSERT INTO `packages` (`PackageId`, `PkgName`, `PkgStartDate`, `PkgEndDate`, `PkgDesc`, `PkgBasePrice`, `PkgAgencyCommission`) VALUES
(5, 'Cartagena 2x1', '2018-11-01 00:00:00', '2019-01-04 00:00:00', 'Travel to the Caribbean & Celebrate with anyone else.', '4800.0000', '400.0000'),
(6, 'Santorini week', '2018-11-15 00:00:00', '2018-12-30 00:00:00', '8 Day All Inclusive Greek Vacation', '3000.0000', '310.0000'),
(7, 'New York Christmas', '2018-11-18 00:00:00', '2018-12-23 00:00:00', 'Celebrate Christmas and shopping.', '2800.0000', '300.0000'),
(8, 'Vancouver Special', '2018-10-01 00:00:00', '2018-12-31 00:00:00', 'Get in love with Vancouver city.', '3000.0000', '280.0000'),
(9, 'Miami New Year', '2018-11-01 00:00:00', '2018-12-30 00:00:00', 'Sun, beach, parties and more in Miami', '3000.0000', '280.0000'),
(10, 'Rome for Lovers', '2018-11-01 00:00:00', '2018-12-15 00:00:00', 'Discover all the culture in Rome', '3000.0000', '280.0000'),
(11, 'Cancun Amazing', '2018-11-01 00:00:00', '2018-12-20 00:00:00', 'Go away from the winter, Cancun is waiting for you.', '3000.0000', '280.0000'),
(12, 'Puerto Vallarta', '2018-11-01 00:00:00', '2018-12-20 00:00:00', 'Sun and Beach and more for you in Vallarta', '3000.0000', '280.0000');


-- Packages Products Suppliers

INSERT INTO `packages_products_suppliers` (`PackageId`, `ProductSupplierId`) VALUES
(5, 65),
(5, 93),
(6, 32),
(6, 33),
(6, 90),
(7, 28),
(7, 82),
(7, 87),
(8, 9),
(8, 65),
(8, 84),
(9, 65),
(9, 93),
(10, 32),
(10, 33),
(10, 90),
(11, 28),
(11, 82),
(11, 87),
(12, 9),
(12, 65),
(12, 84);
