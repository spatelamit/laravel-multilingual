--
-- Database: `laravel-multi`
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


INSERT INTO `currency_rates` (`id`, `currency_from`, `currency_to`, `currency_symbol`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'usd', 'eur', '€', 0.92, '2024-05-31 18:42:37', '2024-05-31 18:42:37'),
(2, 'usd', 'jpy', '¥', 157.00, '2024-05-31 18:42:37', '2024-05-31 18:42:37'),
(3, 'usd', 'brl', 'R$', 5.25, '2024-05-31 18:42:37', '2024-05-31 18:42:37'),
(4, 'usd', 'pln', 'zł', 3.94, '2024-05-31 18:42:37', '2024-05-31 18:42:37'),
(5, 'usd', 'usd', '$', 1.00, NULL, NULL);



INSERT INTO `products` (`id`, `title`, `description`, `price`, `img`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'Powerful laptop for work and entertainment', 999.99, 'https://m.media-amazon.com/images/I/61Qe0euJJZL.jpg', 10, '2024-05-31 15:38:04', '2024-05-31 15:38:04'),
(2, 'Smartphone', 'Latest smartphone with advanced features', 799.99, 'https://www.khoslaonline.com/wp-content/uploads/2023/06/ONE-PLUS-NORD-CE-2-LITE-5G-BLUE-TIDE-6GB128GB.png', 15, '2024-05-31 15:38:04', '2024-05-31 15:38:04'),
(3, 'Headphones', 'High-quality headphones for immersive audio experience', 149.99, 'https://m.media-amazon.com/images/I/71VR6c3j2bL._AC_UF1000,1000_QL80_.jpg', 20, '2024-05-31 15:38:04', '2024-05-31 15:38:04'),
(4, 'Camera', 'Professional camera for capturing stunning photos and videos', 1299.99, 'https://in.canon/media/image/2023/05/19/b89bed4e21e540f985dedebe80166def_EOS+R100+RF-S18-45mm+Front+Slant.png', 8, '2024-05-31 15:38:04', '2024-05-31 15:38:04'),
(5, 'Smartwatch', 'Smartwatch with health monitoring and fitness tracking features', 199.99, 'https://m.media-amazon.com/images/I/61ZjlBOp+rL.jpg', 12, '2024-05-31 15:38:04', '2024-05-31 15:38:04');


INSERT INTO `product_translations` (`id`, `product_id`, `language`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'es', 'Laptop', 'Potente portátil para trabajo y entretenimiento', NULL, NULL),
(2, 1, 'ja', 'ノートパソコン', '仕事やエンターテイメント用のパワフルなノートパソコン', NULL, NULL),
(3, 1, 'pl', 'Laptop', 'Potężny laptop do pracy i rozrywki', NULL, NULL),
(4, 1, 'pt', 'Laptop', 'Laptop poderoso para trabalho e entretenimento', NULL, NULL),
(5, 2, 'es', 'Smartphone', 'Último smartphone con características avanzadas', NULL, NULL),
(6, 2, 'ja', 'スマートフォン', '最新の高機能スマートフォン', NULL, NULL),
(7, 2, 'pl', 'Smartfon', 'Najnowszy smartfon z zaawansowanymi funkcjami', NULL, NULL),
(8, 2, 'pt', 'Smartphone', 'Smartphone mais recente com recursos avançados', NULL, NULL),
(9, 3, 'es', 'Auriculares', 'Auriculares de alta calidad para una experiencia de audio inmersiva', NULL, NULL),
(10, 3, 'ja', 'ヘッドフォン', '没入型オーディオ体験向けの高品質ヘッドフォン', NULL, NULL),
(11, 3, 'pl', 'Słuchawki', 'Wysokiej jakości słuchawki do immersyjnego doświadczenia dźwiękowego', NULL, NULL),
(12, 3, 'pt', 'Fones de Ouvido', 'Fones de ouvido de alta qualidade para uma experiência de áudio imersiva', NULL, NULL),
(13, 4, 'es', 'Cámara', 'Cámara profesional para capturar fotos y videos impresionantes', NULL, NULL),
(14, 4, 'ja', 'カメラ', '見事な写真とビデオを撮影するためのプロフェッショナルカメラ', NULL, NULL),
(15, 4, 'pl', 'Aparat', 'Profesjonalny aparat do robienia oszałamiających zdjęć i filmów', NULL, NULL),
(16, 4, 'pt', 'Câmera', 'Câmera profissional para capturar fotos e vídeos incríveis', NULL, NULL),
(17, 5, 'es', 'Smartwatch', 'Smartwatch con funciones de monitoreo de salud y seguimiento de fitness', NULL, NULL),
(18, 5, 'ja', 'スマートウォッチ', '健康モニタリングおよびフィットネストラッキング機能付きのスマートウォッチ', NULL, NULL),
(19, 5, 'pl', 'Smartwatch', 'Smartwatch z funkcjami monitorowania zdrowia i śledzenia aktywności fizycznej', NULL, NULL),
(20, 5, 'pt', 'Smartwatch', 'Smartwatch com recursos de monitoramento de saúde e rastreamento de fitness', NULL, NULL);

