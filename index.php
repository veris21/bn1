<!-- =========[ BN1FB 2016 Project v.1.0 ]============ -->
    <link href="css/style-responsive.css" rel="stylesheet">
						<div class="container">
										<div class="site_title">
											<p>Ini adalah website penampung aspirasi masyarakat terkait pelaksanaan Pemilukada Gubernur Kepulauan Bangka Belitung, ,<br>
                      Website ini bukanlah website resmi KPU , Lembaga, Instansi, kelompok atau Perseorangan tertentu, dan merupakan sumbangsih saya <br>
                      <strong><a href="http://instagram.com/veris_juniardi">Veris Juniardi</a> &amp; Kawan - Kawan</strong><br>
                       sebagai putra daerah asli Provinsi Bangka Belitung untuk menampung dan mempublish aspirasi masyarakat Bangka Belitung yang tertuang di Sosial Media (Twiter &amp; Instagram) dengan menggunakan Hashtag BN1_2016 (#BN1_2016) terkait #kritik dan #saran, serta #pelanggaran Pemilukada Gubernur dan Wakil Gubernur Bangka Belitung 2016 melalui sosial media</p>
										</div>
				<!-- Menu Start -->
										</div>
	</header>
  <!-- About Section Start -->
	<section id="welcome_section">
						<!-- About text start -->
						</div>
						<div class="row">
						<!-- About service part end-->
					</div>
<section id="welcome_section">
<div class="container">
  <div class="section-title text-center">
		<div class="welcome_icon">
    <i class="fa fa-twitter fa-4x"></i>
   </div>
    <h2>Timeline Twitter</h2>
  </div>
  <ul class="mad-list">
    <?php
    foreach ($t->statuses as $key => $s) {
    ?>
    <li class="timeline">
      <div class="mad-list-icon">
      <img src="<?php echo $s->user->profile_image_url; ?> " alt="" class="img img-circle"/>
        <!-- <span class="mad-icon-40" style="background-image:url(https://i.stack.imgur.com/1ZIkv.jpg?s=64&g=1)"></span> -->
      </div>
      <div class="mad-list-text">
        <p>
          <b><?php echo $s->user->name; ?></b>&mdash;
          <small class="text-muted"><i class="glyphicon glyphicon-time"> </i> <?php echo time_since(strtotime($s->created_at)); ?></small>
          <br/>
          <?php echo $s->text; ?>
          <br/>
          <small class="pull-right">
            <strong class="sos"><i class="fa fa-user"> </i> <?php echo $s->user->friends_count; ?> </strong>
            <strong class="sos"><i class="fa fa-commenting-o"> </i> <?php echo $s->user->statuses_count; ?> </strong>
            <strong class="sos"><i class="fa fa-retweet"> </i> <?php echo $s->retweet_count; ?> </strong>
          </small>
        </p>
      </div>
    </li>
    <br>
  <?php
        } ?>
  </ul>
</div>
</section>


<div id="instagram">
</div>

  <!-- Subscriber Section Start -->
	<section id="donasi">
						<div class="section-title">
						<div class="email_subscribe_form_part wow zoomIn">
	</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>