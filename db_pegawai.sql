CREATE TABLE `data_pegawai` (
 `id` int(11) NOT NULL,
 `nama` varchar(50) NOT NULL,
 `alamat` text NOT NULL,
 `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
 ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
