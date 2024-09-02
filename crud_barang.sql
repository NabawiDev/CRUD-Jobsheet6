
CREATE TABLE `barang` (
  `id` int NOT NULL,
  `kodebarang` varchar(50) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `barang` (`id`, `kodebarang`, `namabarang`, `merk`, `harga`, `jumlah`) VALUES
(2, '12', 'BogixAul', 'Nike', 150000.00, 89);

ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

