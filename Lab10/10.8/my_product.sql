--
-- Cơ sở dữ liệu: `my_product`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(9,3) NOT NULL,
  `sale_price` float(9,3) DEFAULT 0.000,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `origin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `image_list` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  `category_id` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sale_price`, `description`, `origin`, `quantity`, `image_list`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Baguette', 'bread-9.png', 20.000, 20.000, '<p>Freshly baked every day !</p>', 'vn', 2, NULL, 1, 1, '2021-03-12', '2021-04-11'),
(2, 'Chocolate Pudding', 'bread-11.png', 15.000, 15.000, '<p>Full of flavor with chocolaty smooth texture !</p>', 'usa', 1, NULL, 1, 3, '2021-03-12', '2021-03-12'),
(3, 'Brown Bread', 'bread-2.jpg', 5.000, 4.000, '<p>Healthy for those who are dieting !</p>', 'usa', 1, NULL, 1, 1, '2021-03-12', '2021-03-12'),
(4, 'Strawberry Cake', 'strawberrycake.png', 35.000, 32.000, '<p>Soft, fragrant sponge cake, accompanied by creamy vanilla frosting, and fresh strawberries</p>', 'vn', 5, NULL, 1, 2, '2021-03-12', '2021-04-11'),
(5, 'Pavlova', 'bread-12.png', 15.000, 10.000, '<p>Australian traditional cake with crispy meringue</p>', 'vn', 2, NULL, 1, 2, '2021-03-19', '2021-03-21'),
(6, 'Wheat flour', 'bread-3.jpg', 6.000, 6.000, '<p>Wheat flour makes your cakes fluffy and scrumptious !!!</p>', 'usa', 20, NULL, 1, 4, '2021-03-21', '2021-03-21'),
(7, 'Rye flour', 'bread-6.jpg', 7.000, 6.000, '<p>Delight your taste with unique texture and flavor</p>', 'usa', 14, NULL, 1, 4, '2021-03-21', '2021-03-21'),
(8, 'French toast', 'bread-8.jpg', 6.000, 2.000, '<p>Crunchy crust - a companion for a hot bowl of soup</p>', 'vn', 87, NULL, 1, 1, '2021-03-21', '2021-03-21');
