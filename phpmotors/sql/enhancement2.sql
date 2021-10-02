INSERT INTO `clients` (`clientId`, `clientFirstName`, `clientLastName`, `clientEmail`, `clientPassword`, `clientLevel`, `comment`) VALUES (NULL, 'Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', '1', 'I am the real Ironman')

UPDATE `clients` SET `clientLevel`='3' WHERE 1

UPDATE `inventory` SET `invDescription`=replace(`invDescription`, 'small interior', 'spacious interior')

SELECT inventory.invModel, carclassification.classificationName FROM inventory INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId where inventory.classificationId = 1;

DELETE FROM `inventory` WHERE `invModel` = "wrangler"

UPDATE `inventory` SET `invImage`=concat('/phpmotors', `invImage`),`invThumbnail`=concat('/phpmotors', `invThumbnail`);