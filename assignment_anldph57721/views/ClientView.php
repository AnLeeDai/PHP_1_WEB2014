<?php

function timeAgo($datetime)
{
    if (!$datetime) {
        return "Không xác định thời gian";
    }

    $time = strtotime($datetime);
    $timeDifference = abs(time() - $time);

    if ($timeDifference < 60) {
        return $timeDifference.' giây trước';
    } elseif ($timeDifference < 3600) {
        return floor($timeDifference / 60).' phút trước';
    } elseif ($timeDifference < 86400) {
        return floor($timeDifference / 3600).' giờ trước';
    } else {
        return floor($timeDifference / 86400).' ngày trước';
    }
}

function renderNewsCard($news, $isFeatured = false)
{
    $image = !empty($news['HinhAnh']) ? htmlspecialchars($news['DuongDanHinh']) : 'https://i.pravatar.cc/1';
    $title = htmlspecialchars($news['TieuDe']);
    $source = htmlspecialchars($news['Nguon']);
    $time = timeAgo($news['ThoiGianTao']);
    $description = htmlspecialchars($news['MoTa']);
    $category = htmlspecialchars($news['DanhMucID']);
    $readingTime = htmlspecialchars($news['ThoiGianDoc']);

    if ($isFeatured) {
        // Render as featured article
        echo "<div class='featured-image'>
                <img src='{$image}' alt='{$title}'>
              </div>
              <div class='featured-text'>
                <div class='featured-meta'>
                    <span class='source'>{$source}</span> ·
                    <span class='time'>{$time}</span>
                </div>
                <h2 class='featured-title'>{$title}</h2>
                <p class='featured-description'>{$description}</p>
                <div class='tags'>
                    <span class='tag'>{$category}</span> ·
                    <span class='reading-time'>{$readingTime} phút đọc</span>
                </div>
              </div>";
    } else {
        // Render as a regular news card
        echo "<div class='news-card'>
                <img src='{$image}' alt='{$title}'>
                <div class='news-content' style='display: flex; justify-content: space-between; flex-direction: column; height: 100%;'>
                    <div class='news-meta'>
                        <span class='source'>{$source}</span> ·
                        <span class='time'>{$time}</span>
                    </div>
                    <h4 class='news-title'>{$title}</h4>
                    <p class='news-description'>{$description}</p>
                    <div class='tags'>
                        <span class='tag'>{$category}</span> ·
                        <span class='reading-time'>{$readingTime} phút đọc</span>
                    </div>
                </div>
              </div>";
    }
}

?>


<div class="content-container">
    <!-- Featured Section -->
    <div class="featured-section">
        <?php
        if (!empty($newsList)):
            $featured = $newsList[0];
            // Render the featured article
            renderNewsCard($featured, true);
        endif; ?>
    </div>

    <!-- Latest News Section -->
    <div class="latest-news">
        <div class="news-header">
            <h3>Tin tức mới nhất</h3>
            <a href="#" class="see-all">Xem thêm &rarr;</a>
        </div>

        <div class="news-grid">
            <?php
            foreach (array_slice($newsList, 1) as $news):
                // Render each news card
                renderNewsCard($news);
            endforeach; ?>
        </div>
    </div>
</div>
