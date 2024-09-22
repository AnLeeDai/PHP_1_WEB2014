<div class="container">
    <div class="banner">
        <img src="assets/images/banner.png" alt="Banner quảng cáo">
    </div>

    <div class="product-grid">
        <?php
        for ($i = 0; $i < 10; $i++) {
            ?>

            <div class="product-item">
                <a>
                    <img src="assets/images/iPhone-16.jpg" - <?php echo $i + 1; ?>.png" alt="Sản
                    phẩm <?php echo $i + 1; ?>">
                </a>

                <a>
                    <h2 style="font-size: 25px">Sản phẩm <?php echo $i + 1; ?> - Tên sản phẩm</h2>
                </a>

                <div class="describe">
                    Đây là mô tả ngắn gọn cho sản phẩm <?php echo $i + 1; ?>. Sản phẩm này có các tính năng nổi bật,
                    thiết kế đẹp mắt, và được cung cấp với giá cả hợp lý.
                </div>

                <div class="price mt-3">
                    <strong>Giá:</strong> <?php echo rand(100, 500); ?>,000 VND
                </div>
            </div>

        <?php } ?>
    </div>
</div>
