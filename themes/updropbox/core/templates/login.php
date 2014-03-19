<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<fieldset>
<form method="post">
	<h2>Login</h2>
	<?php if (!empty($_['redirect_url'])) {
		print_unescaped('<input type="hidden" name="redirect_url" value="' . OC_Util::sanitizeHTML($_['redirect_url']) . '" />');
	} ?>
		<ul>
			<?php if (isset($_['invalidcookie']) && ($_['invalidcookie'])): ?>
			<li class="errors">
				<?php p($l->t('Automatic logon rejected!')); ?><br>
				<small><?php p($l->t('If you did not change your password recently, your account may be compromised!')); ?></small>
				<br>
				<small><?php p($l->t('Please change your password to secure your account again.')); ?></small>
			</li>
			<?php endif; ?>
			<?php if (isset($_['invalidpassword']) && ($_['invalidpassword'])): ?>
			<a href="<?php print_unescaped(OC_Helper::linkToRoute('core_lostpassword_index')) ?>">
				<li class="errors">
					<?php p($l->t('Lost your password?')); ?>
				</li>
			</a>
			<?php endif; ?>
		</ul>
	
		
		
		<!-- 
		 <p class="infield grouptop">
			<input type="text" name="user" class="uname" id="user" placeholder="HALLO HALLO"
				   value="<?php p($_['username']); ?>"<?php  p($_['user_autofocus'] ? ' autofocus' : ''); ?>
				  />
				  
			<label for="user" class="" style="display:none;"><?php p($l->t('Username')); ?></label> 
			<img class="svg" src="<?php print_unescaped(image_path('', 'actions/user.svg')); ?>" alt=""/>
		</p>

		<p class="infield groupbottom">
			<input type="password" name="password" id="password" class="pewe" value="" data-typetoggle="#show" placeholder=""
				   required<?php p($_['user_autofocus'] ? '' : ' autofocus'); ?> />
			<label for="password" class="infield"><?php p($l->t('Password')); ?></label>
			<img class="svg" id="password-icon" src="<?php print_unescaped(image_path('', 'actions/password.svg')); ?>" alt=""/>
			
			<input type="checkbox" id="show" name="show" />
			<label for="show"></label>
	
		</p>
		<input type="checkbox" name="remember_login" value="1" id="remember_login" checked /><label
			for="remember_login" id="remember-login"><?php p($l->t('remember')); ?></label>
		<input type="hidden" name="timezone-offset" id="timezone-offset"/>
		<input type="submit" id="submit" class="login primary loginbutton"  value="<?php p($l->t('Log in')); ?>"/>   -->
		
		  <label for="user" style="display:none"> Name</label>
		 <input class="uname" name="user" id="user" type="text" placeholder="Benutzername ohne @uni-potsdam.de"  value="<?php p($_['username']); ?>"/>
		 <label  style="display:none"> Password</label> 
		
		 <input name="password" id="password" class="pewe" type="password" value="Passwort">
		 
		<div class="remember-login" style="width:40%;margin-top:1em;">
		 <input type="checkbox" name="remember_login" value="1" id="remember_login" checked /><label
			for="remember_login" id="remember-login"><?php p($l->t('remember')); ?></label>
		<input type="hidden" name="timezone-offset" id="timezone-offset"/>
		</div>
		 
									
		<button class=" login primary loginbutton" id="submit" type="submit" value="<?php // p($l->t('Log in')); ?>">Einloggen</button> 
	
	
	</form>
</fieldset>

<?php if (!empty($_['alt_login'])) { ?>

	<fieldset>
		<form id="alternative-logins">
		<legend><?php p($l->t('Alternative Logins')) ?></legend>
		<ul>
			<?php foreach($_['alt_login'] as $login): ?>
				<li><a class="button" href="<?php print_unescaped($login['href']); ?>" ><?php p($login['name']); ?></a></li>
			<?php endforeach; ?>
		</ul>
 </form>	
</fieldset>

<?php } ?>

<?php
OCP\Util::addscript('core', 'visitortimezone');
