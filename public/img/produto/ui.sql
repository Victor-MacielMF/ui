-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 25-Out-2021 às 12:12
-- Versão do servidor: 8.0.26
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Cor', NULL, NULL),
(2, 'Bateria', NULL, NULL),
(3, 'Wi-Fi', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carac_opcaos`
--

CREATE TABLE `carac_opcaos` (
  `id` bigint UNSIGNED NOT NULL,
  `caracteristica_id` bigint UNSIGNED NOT NULL,
  `nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `carac_opcaos`
--

INSERT INTO `carac_opcaos` (`id`, `caracteristica_id`, `nome`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rosa', NULL, NULL, NULL),
(2, 1, 'Vermelho', NULL, NULL, NULL),
(3, 1, 'Azul', NULL, NULL, NULL),
(4, 2, '8800 Mah 4.2 V', NULL, NULL, NULL),
(5, 2, '7.000 Mah 2.2V', NULL, NULL, NULL),
(6, 2, '6.000 Mah 4.4V', NULL, NULL, NULL),
(7, 3, 'Módulo CRP', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carac_opcao_produto_carac`
--

CREATE TABLE `carac_opcao_produto_carac` (
  `id` bigint UNSIGNED NOT NULL,
  `produto_carac_id` bigint UNSIGNED NOT NULL,
  `carac_opcao_id` bigint UNSIGNED NOT NULL,
  `preco` double(8,2) NOT NULL,
  `quantidade` smallint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `carac_opcao_produto_carac`
--

INSERT INTO `carac_opcao_produto_carac` (`id`, `produto_carac_id`, `carac_opcao_id`, `preco`, `quantidade`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50.00, 4, NULL, NULL),
(2, 1, 2, 50.00, 3, NULL, NULL),
(3, 1, 3, 50.00, 6, NULL, NULL),
(4, 2, 4, 90.00, 4, NULL, NULL),
(5, 2, 5, 80.00, 3, NULL, NULL),
(6, 2, 6, 70.00, 5, NULL, NULL),
(7, 3, 7, 100.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint UNSIGNED NOT NULL,
  `produto_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comentario` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compatibilidades`
--

CREATE TABLE `compatibilidades` (
  `id` bigint UNSIGNED NOT NULL,
  `carac_opcao_produto_carac_id` bigint UNSIGNED NOT NULL,
  `carac_opcao_produto_carac_c_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `user_id`, `cep`, `cidade`, `estado`, `endereco`, `numero`, `complemento`, `bairro`, `referencia`, `created_at`, `updated_at`) VALUES
(1, 1, '77.600-000', 'Paraíso do Tocantins', 'TO', 'Rua Azulao', '796', NULL, 'Jardim Paulista', NULL, '2021-10-25 12:06:06', '2021-10-25 12:06:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_10_14_041251_create_enderecos_table', 1),
(5, '2021_10_24_225141_create_produtos_table', 1),
(6, '2021_10_24_225200_create_caracteristicas_table', 1),
(7, '2021_10_24_225201_create_produto_caracs_table', 1),
(8, '2021_10_24_225256_create_carac_opcaos_table', 1),
(9, '2021_10_24_225606_create_carac_opcao_produto_carac_table', 1),
(10, '2021_10_24_225721_create_compatibilidades_table', 1),
(11, '2021_10_24_230036_create_comentarios_table', 1),
(12, '2021_10_24_230202_create_produto_imagems_table', 1),
(13, '2021_10_24_230249_create_categorias_table', 1),
(14, '2021_10_24_230250_create_produto_categorias_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_simplificada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) DEFAULT NULL,
  `quantidade` smallint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `user_id`, `nome`, `descricao`, `descricao_simplificada`, `preco`, `quantidade`, `created_at`, `updated_at`) VALUES
(1, 1, 'Robô Otto', 'Este pequeno robô carismático é capaz de andar de forma autônoma, desviando de obstáculos que são captados através de seu sensor de distância, possui também a possibilidade de ser controlado pelo celular se escolher uma capacidade de bateria maior, permitindo incluir um módulo Wi-fi', 'Robô perfeito para montar com seu filho', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_caracs`
--

CREATE TABLE `produto_caracs` (
  `id` bigint UNSIGNED NOT NULL,
  `produto_id` bigint UNSIGNED NOT NULL,
  `caracteristica_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto_caracs`
--

INSERT INTO `produto_caracs` (`id`, `produto_id`, `caracteristica_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_categorias`
--

CREATE TABLE `produto_categorias` (
  `id` bigint UNSIGNED NOT NULL,
  `produto_id` bigint UNSIGNED NOT NULL,
  `categoria_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_imagems`
--

CREATE TABLE `produto_imagems` (
  `id` bigint UNSIGNED NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` datetime NOT NULL,
  `sexo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_perfil` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rg`, `cpf`, `nascimento`, `sexo`, `telefone`, `foto_perfil`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'João Victor Maciel de Freitas', 'joaovictormacieldefreitas2345@gmail.com', NULL, '$2y$10$rzNMR5JhswF6oiIfY/PMgeKPP7ac7eZP0wybVhFq3POl70oC.YSuu', '950.207', '040.081.351-38', '1999-09-02 00:00:00', 'M', '(63) 98447-2602', NULL, NULL, '2021-10-25 12:06:06', '2021-10-25 12:06:06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carac_opcaos`
--
ALTER TABLE `carac_opcaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carac_opcaos_caracteristica_id_foreign` (`caracteristica_id`);

--
-- Índices para tabela `carac_opcao_produto_carac`
--
ALTER TABLE `carac_opcao_produto_carac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carac_opcao_produto_carac_produto_carac_id_foreign` (`produto_carac_id`),
  ADD KEY `carac_opcao_produto_carac_carac_opcao_id_foreign` (`carac_opcao_id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_produto_id_foreign` (`produto_id`),
  ADD KEY `comentarios_user_id_foreign` (`user_id`);

--
-- Índices para tabela `compatibilidades`
--
ALTER TABLE `compatibilidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compatibilidades_carac_opcao_produto_carac_id_foreign` (`carac_opcao_produto_carac_id`),
  ADD KEY `compatibilidades_carac_opcao_produto_carac_c_id_foreign` (`carac_opcao_produto_carac_c_id`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enderecos_user_id_foreign` (`user_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_user_id_foreign` (`user_id`);

--
-- Índices para tabela `produto_caracs`
--
ALTER TABLE `produto_caracs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_caracs_produto_id_foreign` (`produto_id`),
  ADD KEY `produto_caracs_caracteristica_id_foreign` (`caracteristica_id`);

--
-- Índices para tabela `produto_categorias`
--
ALTER TABLE `produto_categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_categorias_produto_id_foreign` (`produto_id`),
  ADD KEY `produto_categorias_categoria_id_foreign` (`categoria_id`);

--
-- Índices para tabela `produto_imagems`
--
ALTER TABLE `produto_imagems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_imagems_produto_id_foreign` (`produto_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `carac_opcaos`
--
ALTER TABLE `carac_opcaos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `carac_opcao_produto_carac`
--
ALTER TABLE `carac_opcao_produto_carac`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `compatibilidades`
--
ALTER TABLE `compatibilidades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto_caracs`
--
ALTER TABLE `produto_caracs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto_categorias`
--
ALTER TABLE `produto_categorias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto_imagems`
--
ALTER TABLE `produto_imagems`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carac_opcaos`
--
ALTER TABLE `carac_opcaos`
  ADD CONSTRAINT `carac_opcaos_caracteristica_id_foreign` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristicas` (`id`);

--
-- Limitadores para a tabela `carac_opcao_produto_carac`
--
ALTER TABLE `carac_opcao_produto_carac`
  ADD CONSTRAINT `carac_opcao_produto_carac_carac_opcao_id_foreign` FOREIGN KEY (`carac_opcao_id`) REFERENCES `carac_opcaos` (`id`),
  ADD CONSTRAINT `carac_opcao_produto_carac_produto_carac_id_foreign` FOREIGN KEY (`produto_carac_id`) REFERENCES `produto_caracs` (`id`);

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `compatibilidades`
--
ALTER TABLE `compatibilidades`
  ADD CONSTRAINT `compatibilidades_carac_opcao_produto_carac_c_id_foreign` FOREIGN KEY (`carac_opcao_produto_carac_c_id`) REFERENCES `carac_opcao_produto_carac` (`id`),
  ADD CONSTRAINT `compatibilidades_carac_opcao_produto_carac_id_foreign` FOREIGN KEY (`carac_opcao_produto_carac_id`) REFERENCES `carac_opcao_produto_carac` (`id`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `produto_caracs`
--
ALTER TABLE `produto_caracs`
  ADD CONSTRAINT `produto_caracs_caracteristica_id_foreign` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristicas` (`id`),
  ADD CONSTRAINT `produto_caracs_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);

--
-- Limitadores para a tabela `produto_categorias`
--
ALTER TABLE `produto_categorias`
  ADD CONSTRAINT `produto_categorias_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `produto_categorias_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);

--
-- Limitadores para a tabela `produto_imagems`
--
ALTER TABLE `produto_imagems`
  ADD CONSTRAINT `produto_imagems_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
