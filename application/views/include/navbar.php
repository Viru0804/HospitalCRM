<?php
$logo = "sunshine.png";  // default

if (isset($clinic)) {
    if ($clinic == "manoday") {
        $logo = "manoday.png";
    } else if ($clinic == "sunshine") {
        $logo = "sunshine.png";
    }
}
?>

<header class="topbar">

    <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css'); ?>">

    <div class="topbar-left">

        <!-- Dynamic Clinic Logo -->
        <img src="<?= base_url('assets/img/' . $logo); ?>" class="nav-logo" alt="Clinic Logo">

        <span class="back-btn">❮</span>

        <h2 class="nav-title">
            <?= isset($page_title) ? $page_title : 'ADMIN Dashboard'; ?>
        </h2>
    </div>

    <div class="topbar-right">
        <div class="search-box">
            <span class="search-icon">🔍</span>
            <input type="text" placeholder="Search for anything..." class="search-input">
        </div>

        <button class="icon-btn">🔔</button>
        <img src="https://i.pravatar.cc/50" class="nav-profile">
    </div>
</header>