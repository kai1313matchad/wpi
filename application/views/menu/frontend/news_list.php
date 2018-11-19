<section class="bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1 class="section-heading">NEWS</h1>
                    <hr class="light">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">News List</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <?php
                for ($i=0 ; $i < count($newsdata) ; $i++)
                { 
                    if($i == 0 or $i == 4)
                    {
                        echo '<div class="row">';
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';       
                    }
                    elseif($i > 0 and $i < 3 )
                    {
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';                        
                    }
                    elseif($i == 3 or $i == 7)
                    {                        
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';                        
                    }
                }
            ?>
            <br>            
        </div>
        <div class="container text-center">
                <?php echo $pagination; ?>
        </div>
    </section>