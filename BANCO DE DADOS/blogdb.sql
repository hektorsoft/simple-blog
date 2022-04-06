-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Abr-2022 às 05:23
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blogdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `conteudo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `id_users`, `titulo`, `data`, `conteudo`) VALUES
(1, 1, 'Teste Update', '2022-03-31 15:52:51', 'Teste de Mysql por Gabriel'),
(21, NULL, 'big post', '2022-04-01 18:53:38', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum vitae urna sit amet sagittis. Quisque aliquet ex varius, dignissim erat eu, accumsan urna. Morbi consectetur eros et sem blandit, et vehicula turpis tincidunt. Sed suscipit fringilla enim et aliquet. Donec hendrerit pretium tristique. Sed ac lorem a arcu venenatis ornare in vitae sapien. Quisque non augue lorem. Pellentesque aliquet venenatis vehicula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ex turpis, suscipit sit amet massa sed, iaculis interdum dolor. Donec justo est, pulvinar eu pellentesque sed, tempor convallis dui. Pellentesque aliquet sapien sed risus congue, id faucibus ipsum varius. Curabitur magna purus, fringilla vitae ante eu, efficitur interdum est. Etiam ultrices metus justo, nec finibus nibh tempus eu. Mauris gravida et lorem convallis tempus. Nullam non aliquam urna.\r\n\r\nIn consectetur in ex quis consequat. Vivamus interdum odio ultrices ligula suscipit sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum consequat ligula nec suscipit hendrerit. Praesent quis dignissim neque. Morbi vulputate tempus porttitor. Phasellus cursus nulla quis justo vulputate pretium. Aenean vitae dui eget ante hendrerit suscipit. Nulla et nibh ullamcorper turpis consectetur tempor. Nunc eu tempor mauris. Nulla non lacus at lacus suscipit dictum dapibus vitae velit. Quisque ante sem, condimentum a metus eget, tincidunt tempor libero. Maecenas tortor velit, volutpat eget condimentum non, lacinia aliquet ligula. Proin vitae porta est. Suspendisse semper molestie viverra.\r\n\r\nCras sed feugiat mi, nec malesuada mi. In posuere nunc et ante dictum mollis. Aliquam erat volutpat. Donec venenatis sed leo vitae semper. Phasellus nec ex pharetra, porttitor dolor vitae, placerat enim. Vivamus fermentum velit quis ante accumsan convallis. Nulla facilisi. Aliquam lorem libero, commodo sit amet enim quis, pharetra bibendum dolor. Quisque justo urna, ultricies sit amet aliquet in, congue vel ipsum. Donec luctus dictum auctor. Aliquam vitae euismod enim. Sed nunc lectus, vulputate viverra nulla nec, imperdiet commodo magna. Integer pulvinar sagittis quam, at finibus risus blandit eu. Suspendisse et magna et arcu molestie commodo nec a augue. Sed pharetra a nibh quis mattis.\r\n\r\nCras cursus dignissim maximus. Nam nec ex dignissim, tincidunt sapien eu, placerat nisi. Aliquam erat volutpat. Fusce urna ipsum, dignissim sollicitudin turpis eget, tempor accumsan nisi. Maecenas blandit, dui id blandit consequat, velit lectus dapibus lacus, quis imperdiet massa tellus quis tellus. Ut vel est lectus. Mauris suscipit elit enim, sed congue eros bibendum sed. Fusce diam elit, suscipit sed quam nec, convallis placerat sem. Mauris posuere, sapien non ornare elementum, augue magna finibus orci, sit amet iaculis erat augue id felis. Nulla condimentum metus ac dui laoreet, eget placerat quam ullamcorper. Proin rhoncus convallis tortor nec pretium.\r\n\r\nIn hac habitasse platea dictumst. Suspendisse eget arcu efficitur justo mollis convallis. Curabitur eleifend mollis lobortis. Nullam sapien augue, elementum eu enim sit amet, ullamcorper porta ex. Fusce vehicula odio a massa ultrices dictum. Proin id nisl elit. Nullam at dolor in ligula malesuada sollicitudin nec nec velit. Sed accumsan orci placerat augue luctus vehicula. Aenean pretium aliquet facilisis.'),
(22, 1, 'Teste Id User', '2022-04-01 19:34:54', 'Testado'),
(23, 3, 'Teste User 2', '2022-04-01 20:55:30', 'Testado por Usuario 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `users` varchar(200) NOT NULL,
  `pass` varchar(240) NOT NULL,
  `nome` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_users`, `users`, `pass`, `nome`) VALUES
(1, 'Gabriel', '827ccb0eea8a706c4c34a16891f84e7b', 'Gabriel Arcangelo de Lima'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`id_users`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`id_users`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
