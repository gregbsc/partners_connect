<div class="row">
	<div class="container">

    <div class="login-screen">

          <div class="login-icon">

              <h4>Welcome to <small>Partners Connect</small></h4>
              <h1> <?php // print_r($postinfo); ?> </h1>
              
          </div>

          <!-- start of form -->
          <div class="login-form">
            
            <div class="form-group">

              <?php // form login // open ?>
              <?php $attributes = array('id' => 'login-form'); ?>
              <?php echo form_open('admin/login', $attributes); ?>

              <input required="" type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" name="login-name" mouseev="true" autocomplete="off" keyev="true" clickev="true" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); padding-right: 0px; background-attachment: scroll; cursor: auto; background-position: 100% 50%; background-repeat: no-repeat no-repeat;">
              <label class="login-field-icon fui-user" for="login-name"></label>
            
            </div>

            <div class="form-group">
              <input required="" type="password" class="form-control login-field" value="" placeholder="PIN number" id="login-pass" name="login-pass" mouseev="true" autocomplete="off" keyev="true" clickev="true" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); padding-right: 0px; background-attachment: scroll; cursor: auto; background-position: 100% 50%; background-repeat: no-repeat no-repeat;">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

              <span id="login-form-login" class="btn btn-primary btn-lg btn-block">Login</span>
              <div id="required-message"> </div>

            </form>
            <!-- end of form -->
            </div>
          
    </div>
  </div>
</div>	

<!-- Must move to js file  -->

<script>

  $('#login-form-login').click( function(){

    var loginName, loginPass;

    loginName = $('#login-name').val().length;
    loginPass = $('#login-pass').val();
    loginPassVal = $('#login-pass').val().length;

      if( loginName > 2 && loginPassVal == 4 && !isNaN( loginPassVal ) ) {

        $('#login-form').submit();

      } else {

        $('#required-message').html('Enter your email address and 4 digit pin number.');

      }

  });

</script>