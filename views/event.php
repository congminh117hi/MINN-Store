<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('head.php');
    ?>
<body>
    <?php
    require_once('header.php');
    $url = 'https://newsapi.org/v2/everything?q=apple&from=2021-11-04&to=2021-11-04&sortBy=popularity&apiKey=29004d76d1544fc69078303c7c2898f3';
    $response = file_get_contents($url);
    $newdata = json_decode($response);
    ?>
    <!--Event-->
    <div class="event-page">
        <div class="event-header">
            <h1>Phones Events</h1>
            <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page
                when
                looking at its layout.</p>
        </div>
        <?php
        foreach ($newdata->articles as $News) {
            echo '
                <div class="event-main">
                    <div class="details-one">
                        <a href="'.$News -> url.'"><img src="'.$News -> urlToImage.'" alt=""></a>
                        <div class="details-content">
                            <h2><a href="'.$News -> url.'">'.$News -> title.'</a></h2>
                            <p><i class="fa fa-clock-o" style="font-size:20px; padding: 0 5px;"></i>'.$News -> publishedAt.'</p>
                            <p>'.$News -> content.'</p>
                                <div class="details-icon">
                                    <div class="details-left">
                                        <i class="fa fa-location-arrow" style="font-size:24px"></i>
                                        <p>Washington</p>
                                    </div>
                                <div class="details-right">
                                    <i class="fa fa-star-o" style="font-size:24px"></i>
                                    <p>Regular</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
        ?>
    </div>
    <?php
        require_once('footer.php');
    ?>
    <?php
        require_once('scripts.php');
    ?>
</body>

</html>