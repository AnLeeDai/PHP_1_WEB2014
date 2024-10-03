<table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; margin: 20px 0; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <thead>
    <tr style="background-color: #4CAF50; color: white; text-align: left;">
        <th style="padding: 12px; border-bottom: 2px solid #ddd;">Product ID</th>

        <th style="padding: 12px; border-bottom: 2px solid #ddd;">Product Image</th>

        <th style="padding: 12px; border-bottom: 2px solid #ddd;">Product Name</th>

        <th style="padding: 12px; border-bottom: 2px solid #ddd;">Product Description</th>

        <th style="padding: 12px; border-bottom: 2px solid #ddd;">Product Price</th>
    </tr>
    </thead>

    <tbody>
    <?php
    foreach ($productList as $product) { ?>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px; border-bottom: 1px solid #ddd;"><?php echo $product['product_id']; ?></td>

            <td style="padding: 12px; border-bottom: 1px solid #ddd;">
                <img src="uploads/<?php echo $product['product_image']; ?>" alt="<?php echo $product['product_image']; ?>"
                     style="width: 100px; border-radius: 5px;">
            </td>

            <td style="padding: 12px; border-bottom: 1px solid #ddd;"><?php echo $product['product_name']; ?></td>

            <td style="padding: 12px; border-bottom: 1px solid #ddd;"><?php echo $product['product_description']; ?></td>

            <td style="padding: 12px; border-bottom: 1px solid #ddd; color: #e91e63; font-weight: bold;">
                <?php echo number_format($product['product_price'], 0, ',', '.'); ?> VND
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
