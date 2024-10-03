<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Basic</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif;">

<header style="background-color: #333; padding: 10px; margin-bottom: 20px">
    <nav>
        <ul style="list-style: none; display: flex; margin: 0; padding: 0; justify-content: center;">
            <li style="margin-right: 20px;">
                <a href="index.php" style="color: white; text-decoration: none; font-weight: bold; transition: color 0.3s;">Home</a>
            </li>
            <li style="margin-right: 20px;">
                <a href="index.php?route=create" style="color: white; text-decoration: none; font-weight: bold; transition: color 0.3s;">Create</a>
            </li>
            <li style="margin-right: 20px;">
                <a href="index.php?route=edit" style="color: white; text-decoration: none; font-weight: bold; transition: color 0.3s;">Edit</a>
            </li>
            <li>
                <a href="index.php?route=delete" style="color: white; text-decoration: none; font-weight: bold; transition: color 0.3s;">Delete</a>
            </li>
        </ul>
    </nav>
</header>

<!-- CSS for hover effects -->
<script>
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('mouseover', () => link.style.color = '#ff4081');
        link.addEventListener('mouseout', () => link.style.color = 'white');
    });
</script>

