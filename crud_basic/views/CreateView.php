<div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif;">
    <h2 style="margin-bottom: 20px; font-size: 24px; color: #333; text-align: center;">Create Product</h2>
    <form method="POST" enctype="multipart/form-data">
        <div style="margin-bottom: 20px;">
            <label for="product-name" style="display: block; margin-bottom: 5px; font-weight: bold;">Product Name</label>
            <input type="text" id="product-name" name="name" required
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none; font-size: 16px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="product-price" style="display: block; margin-bottom: 5px; font-weight: bold;">Product Price</label>
            <input type="number" id="product-price" name="price" required
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none; font-size: 16px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="product-description" style="display: block; margin-bottom: 5px; font-weight: bold;">Product Description</label>
            <textarea id="product-description" name="description" required
                      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none; font-size: 16px; resize: vertical; min-height: 100px;"></textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="product-image" style="display: block; margin-bottom: 5px; font-weight: bold;">Product Image</label>
            <input type="file" id="product-image" name="image" accept="image/*" required
                   style="width: 100%; padding: 3px; border: 1px solid #ccc; border-radius: 5px; outline: none;">
        </div>

        <div style="margin-bottom: 20px;">
            <button type="submit"
                    style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
                Create Product
            </button>
        </div>
    </form>
</div>
