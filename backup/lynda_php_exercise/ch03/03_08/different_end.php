<?php $member = 0;  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serving different content</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <header class="both">
        <h1>Nonesuch Club</h1>
        <p>Welcome one and all to a really exclusive club for PHP developers. So exclusive, it doesn't exist!</p>
    </header>
    <?php if (!$member) : ?>
    <section class="non-members">
        <h2>Become a Member</h2>
        <p>Useful information for non-members. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloribus esse itaque necessitatibus nobis placeat repellat temporibus voluptas. Architecto maxime quisquam soluta veniam? Aliquid consequuntur cum eligendi enim, natus non!</p>
        <p>Accusamus animi architecto asperiores aspernatur at dolor eaque error est illum ipsam libero nam nemo nisi, officiis pariatur quae quidem quod sed sunt totam velit veniam vero voluptas voluptatem voluptatibus?</p>
    </section>
    <?php
    endif;
    if ($member) :
    ?>
    <section class="members">
        <h2>Members' News</h2>
        <p>For members's eyes only. Amet at, cum delectus deserunt dolorem doloribus ea esse eum eveniet facilis fuga illo in itaque iusto laudantium minus molestiae necessitatibus nobis, non obcaecati odit ratione repellendus rerum. Odit, placeat.</p>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            <li>Commodi error numquam perferendis quis sit! Dicta, sit!</li>
            <li>Ab amet iste, molestias nobis officia quas ullam!</li>
            <li>Atque dolorum facere fuga fugiat labore quae sit?</li>
        </ul>
        <p>Aliquid cum ex expedita illum ipsa maxime, minus, natus nihil officia praesentium quas, quisquam ratione sapiente. Aliquid animi beatae fugit in magnam necessitatibus, nihil nobis quod repudiandae saepe. Similique, ullam?</p>
    </section>
    <?php endif; ?>
    <section>
        <div class="both">
        <h3>About this Club</h3>
            <p>This is public information about the Nonesuch Club, so it can be seen by members and non-members alike. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur fugiat praesentium quod reiciendis. Dolor exercitationem expedita inventore maiores nostrum quibusdam repellendus saepe sunt. Aliquid assumenda beatae ipsa neque vel.</p>
            <p>Accusamus architecto, aspernatur commodi consectetur doloremque esse est illum impedit inventore itaque iusto laboriosam nesciunt nostrum nulla optio provident quae quidem sapiente sequi tempore vel veritatis voluptatem. Magni, quos rerum?</p>
        </div>
        <?php if ($member) : ?>
        <div class="members">
            <h3>Information for Members Only</h3>
            <p>Don't let non-members into the secret! Dolor dolores dolorum harum, illum molestias quia quidem ullam. A accusamus alias assumenda iure provident quae quos! A, alias cumque distinctio excepturi, incidunt mollitia nemo neque quam suscipit ut voluptate.</p>
        </div>
        <?php endif; ?>
    </section>

    <footer class="both">
        <p>&copy; 2015 Nonesuch Club</p>
    </footer>
</div>
</body>
</html>