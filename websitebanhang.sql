
--
-- Cơ sở dữ liệu: `websitebanhang` 
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`


CREATE TABLE `binhluan` (
  `MaBL` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Binhluan` char(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaKH` int(10) NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaQTV` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(255) NOT NULL,
  `MaSP` int(255) DEFAULT NULL,
  `Soluong` int(255) DEFAULT NULL,
  `Tongtien` decimal(18,0) DEFAULT NULL,
  `Tinhtrang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `Soluong`, `Tongtien`, `Tinhtrang`) VALUES
(3042, 3, 2, '57580000', 1),
(3043, 42, 3, '35370000', 1),
(3044, 66, 1, '1290000', 1),
(3045, 3, 2, '57580000', 1),
(3046, 42, 3, '35370000', 1),
(3047, 9, 3, '67470000', 1),
(3048, 19, 1, '4490000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieudat`
--

CREATE TABLE `chitietphieudat` (
  `MaPD` int(255) DEFAULT NULL,
  `MaSP` int(255) DEFAULT NULL,
  `Soluong` int(255) DEFAULT NULL,
  `Dongia` decimal(18,0) DEFAULT NULL,
  `Tinhtrang` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieudat`
--

INSERT INTO `chitietphieudat` (`MaPD`, `MaSP`, `Soluong`, `Dongia`, `Tinhtrang`) VALUES
(2035, 9, 3, '22490000', 1),
(2036, 19, 1, '4490000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`(
--

CREATE TABLE `chitietphieunhap` 
  `MaPN` int(255) NOT NULL,
  `MaSP` int(255) DEFAULT NULL,
  `Soluongnhap` int(255) DEFAULT NULL,
  `Gianhap` decimal(18,0) DEFAULT NULL,
  `Thanhtien` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieuxuat`(
--

CREATE TABLE `chitietphieuxuat` (
  `MaPX` int(255) NOT NULL,
  `MaSP` int(255) DEFAULT NULL,
  `Soluongxuat` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenDM` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
('101', 'ÄIá»†N THOáº I');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(255) NOT NULL,
  `MaKH` int(255) NOT NULL,
  `MaNV` int(255) DEFAULT NULL,
  `Ngaylap` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaNV`, `Ngaylap`) VALUES
(3042, 1012, 102, '2018-06-13 11:11:12'),
(3043, 1012, 102, '2018-06-01 11:11:12'),
(3044, 1012, 102, '2018-05-10 11:11:12'),
(3045, 1012, 102, '2018-05-15 11:23:36'),
(3046, 1012, 102, '2018-06-12 11:23:36'),
(3047, 1059, 102, '2020-08-01 15:10:20'),
(3048, 1060, 102, '2020-08-01 15:22:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(255) NOT NULL,
  `TenKH` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Matkhau` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Diachi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Sdt` char(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Email`, `Matkhau`, `Diachi`, `Sdt`) VALUES
(1064,'zoramguan', 'zoramguan60@gmail.com', 'thanhguan123', 'LiênChiểu-ĐàNẵng', '0869804509'),
(1065, 'ThượngHiêp', 'thanh@gmail.com', '123', 'LiênChiểu-ĐàNẵng', '0869803507');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenNCC` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`) VALUES
('212'),'rolex');
('211', 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(255) NOT NULL,
  `TenNV` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Cmnd` char(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Sdt` char(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Matkhau` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Bophan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Mucluong` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `Cmnd`, `Sdt`, `Matkhau`, `Bophan`, `Mucluong`) VALUES
(13, 'Thượng Thị Thu Hiệp ', '205678126', '0869804507', '123456', 'Kho', '5000000'),
(104, 'Phan Văn Thông', '205678342', '0869804508', '123456', 'Ban hang', '6000000'),
(106,'Nguyễn Hoàng Lân','205678378','205678378','1278','Kho', '50000'),

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudat`
--

CREATE TABLE `phieudat` (
  `MaPD` int(255) NOT NULL,
  `MaKH` int(255) DEFAULT NULL,
  `Ngaydat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudat`
--

INSERT INTO `phieudat` (`MaPD`, `MaKH`, `Ngaydat`) VALUES
(2030, 1012, '2018-06-13 11:10:12'),
(2031, 1012, '2018-06-13 11:23:27'),
(2032, 1011, '2018-06-13 21:54:33'),
(2033, 1011, '2018-06-13 21:56:14'),
(2034, 1030, '2020-08-01 14:48:03'),
(2035, 1059, '2020-08-01 15:09:30'),
(2036, 1060, '2020-08-01 15:20:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` int(255) NOT NULL,
  `MaNV` int(255) DEFAULT NULL,
  `Ngaynhap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuxuat`
--

CREATE TABLE `phieuxuat` (
  `MaPX` int(255) NOT NULL,
  `MaNV` int(255) DEFAULT NULL,
  `Ngayxuat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `MaQTV` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenQTV` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Matkhau` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`MaQTV`, `TenQTV`, `Matkhau`) VALUES
('H227', NULL, '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(255) NOT NULL,
  `MaDM` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaNCC` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TenSP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `AnhSP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TongSL` int(255) DEFAULT NULL,
  `Khuyenmai` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Dongia` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaDM`, `MaNCC`, `TenSP`, `AnhSP`, `TongSL`, `Khuyenmai`, `Mota`, `Dongia`) VALUES
(1, ' 101', ' 211', ' Đồng hồ Rolex Daytona', ' Đồng hồ Rolex Daytona.png', 20, 0, 'Đồng hồ “Oyster Perpetual DATEJUST” của Rolex từ ngày có mặt trên thị trường cho đến ngày nay là một trong những chiếc đồng hồ của Rolex được ưa chuộng nhất. Lần đầu tiên nó được ra mắt vào năm 1945 để kỷ niệm 40 năm thành lập công ty Willdorf & Davis-tiề', '1200000'),


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaQTV` (`MaQTV`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `chitietphieudat`
--
ALTER TABLE `chitietphieudat`
  ADD KEY `MaPD` (`MaPD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD KEY `MaPN` (`MaPN`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `chitietphieuxuat`
--
ALTER TABLE `chitietphieuxuat`
  ADD KEY `MaPX` (`MaPX`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `khachhang_Email` (`Email`),
  ADD UNIQUE KEY `khachhang_Sdt` (`Sdt`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `nv_cmnd` (`Cmnd`),
  ADD UNIQUE KEY `nv_Sdt` (`Sdt`);

--
-- Chỉ mục cho bảng `phieudat`
--
ALTER TABLE `phieudat`
  ADD PRIMARY KEY (`MaPD`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD PRIMARY KEY (`MaPX`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`MaQTV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaHD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3049;

--
-- AUTO_INCREMENT cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  MODIFY `MaPN` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietphieuxuat`
--
ALTER TABLE `chitietphieuxuat`
  MODIFY `MaPX` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3049;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1061;

--
-- AUTO_INCREMENT cho bảng `phieudat`
--
ALTER TABLE `phieudat`
  MODIFY `MaPD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2037;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MaPN` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
