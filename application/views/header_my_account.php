<div>
      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $user_data->name ?></h3>
                  <p class="text-muted"><?php echo $user_data->interest ?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">

                  <li><a href="<?php echo base_url() ?>MyAccount" <?php if($active == 'timeline'){echo 'class="active"';} ?> >Timeline</a></li>
                  <li><a href="<?php echo base_url() ?>MyAccount/About" <?php if($active == 'about'){echo 'class="active"';} ?>>About</a></li>
                  <!-- <li><a href="<?php echo base_url() ?>MyAccount/#">Album</a></li> -->

                  <li><a href="<?php echo base_url() ?>MyAccount/Following" <?php if($active == 'following'){echo 'class="active"';} ?>>Following</a></li>
                  <li><a href="<?php echo base_url() ?>MyAccount/Follower" <?php if($active == 'follower'){echo 'class="active"';} ?>>Follower</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following you</li>
                  <li><a href="<?php echo base_url() ?>MyAccount/#"><button class="btn-primary">Edit Account</button></a></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
              <h4><?php echo $user_data->name ?></h4>
              <p class="text-muted"><?php echo $user_data->interest ?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
               <li><a href="<?php echo base_url() ?>MyAccount" <?php if($active == 'timeline'){echo 'class="active"';} ?> >Timeline</a></li>
                  <li><a href="<?php echo base_url() ?>MyAccount/About" <?php if($active == 'about'){echo 'class="active"';} ?>>About</a></li>
                  <!-- <li><a href="<?php echo base_url() ?>MyAccount/#">Album</a></li> -->

                  <li><a href="<?php echo base_url() ?>MyAccount/Following" <?php if($active == 'following'){echo 'class="active"';} ?>>Following</a></li>
                  <li><a href="<?php echo base_url() ?>MyAccount/Follower" <?php if($active == 'follower'){echo 'class="active"';} ?>>Follower</a></li>
              </ul>
              <a href="<?php echo base_url() ?>MyAccount/#"><button class="btn-primary">Edit Account</button></a>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
          
      
<?php $this->load->view($myaccount_view); ?>

      <!-- foreach activity / get tb notification where from_username == this -->


          </div>
        </div>

      </div>
    