<?php
// Display messages if available
if (isset($message)) {
    foreach ($message as $msg) {
        echo '
        <div class="message">
            <span>' . $msg . '</span>
            <i class="bx bx-x" onclick="this.parentElement.remove()"></i>
        </div>
        ';
    }
}
?>

<header>
    <section class="flex">
        <a href="dashboard.php"><img src="../image/reallogo2.png" width="130px" alt=""></a>
        <form action="search_page.php" method="POST" class="search-form">
            <input type="text" name="search" placeholder="Search.." required maxlength="100">
            <button type="submit" class="bx bx-search-alt-2" name="search_btn"></button>
        </form>
        <div class="icons">
            <div id="menu-btn" class="bx bx-list-plus"></div>
            <div id="search-btn" class="bx bx-search-alt-2-plus"></div>
            <div id="user-btn" class="bx bxs-user"></div>
        </div>

        <div class="profile">
            <?php
            
            include '../components/connection.php';

            // Get tutor ID from session
            $tutor_id = $_SESSION['tutor_id'] ?? null;

            if ($tutor_id) {
                // Query to fetch tutor profile
                $query = "SELECT * FROM tutors WHERE id = $tutor_id";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    $fetch_profile = mysqli_fetch_assoc($result);
                    ?>
                    <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
                    <h3><?= $fetch_profile['name']; ?></h3>
                    <span><?= $fetch_profile['profession']; ?></span>
                    <br>
                    <div id="flex-btn">
                        <a href="profile.php" class="btn">View Profile</a>
                        <a href="../components/admin_logout.php" onclick="return confirm('Are you sure you want to logout?');" class="btn">Logout</a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <h3>Please Login or Register</h3>
                <div id="flex-btn">
                    <a href="login.php" class="btn">Login</a>
                    <a href="register.php" class="btn">Register</a>
                </div>
                <?php
            }

            // Close database connection
            mysqli_close($conn);
            ?>
        </div>
    </section>
</header>
