CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(9,3) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products` (`id`, `name`,`price`, `description`) VALUES
(1, 'Baguette', 20.000, '<p>Freshly baked every day !</p>'),
(2, 'Chocolate Pudding', 15.000, '<p>Full of flavor with chocolaty smooth texture !</p>'),
(3, 'Brown Bread', 4.000, '<p>Healthy for those who are dieting !</p>'),
(4, 'Strawberry Cake',  32.000, '<p>Soft, fragrant sponge cake, accompanied by creamy vanilla frosting, and fresh strawberries</p>'),
(5, 'Pavlova', 10.000, '<p>Australian traditional cake with crispy meringue</p>');