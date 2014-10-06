<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<h3>Subscribe for Our Newsletter!</h3>
						<p>Subscribe to our newsletter email to get notification about fresh news, latest promos, giveaways and free stuff from Skew. Stay always up-to-date!</p>
						<div class="fr">
						<div style="display: inline-block;">
							<input class="col-md-6 fEmail" name='Email' placeholder='Enter Your Email'/>
							<a href="#" class="subS">Subscribe!</a>
						</div>
						</div>
					</div>
					<div class="soc col-md-12">
						<ul>
							<li class="soc1"><a href="#"></a></li>
							<li class="soc2"><a href="#"></a></li>
							<li class="soc3"><a href="#"></a></li>
							<li class="soc4"><a href="#"></a></li>
							<li class="soc5"><a href="#"></a></li>
							<li class="soc6"><a href="#"></a></li>
							<li class="soc7"><a href="#"></a></li>
							<li class="soc8"><a href="#"></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<div class="col-md-12 text-right">
						<!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
						<input  id="searchPattern" type="search" placeholder="Search the Site"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
					</div>
					<div class="col-md-6 text-left copy">
						<p>Copyright &copy; 2014 lagumurni team. All Rights Reserved.</p>
					</div>
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active" ><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#project">Projects</a></li>
							<li><a href="#news">How</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#features">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>	
    
		
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?echo base_url();?>js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script type="text/javascript">

		function insertDataKontes(){
			
			$.ajax({
		    url: "<?php echo base_url()?>home/insert_data",
		    type: "POST",
		    data:$('#kontes_form').find('input, select, textarea, button').serialize(),
		    success: function (response) {
		        alert("Contest successfully created.");
				$(this).closest('form').find("input[type=text], textarea").val("");
				window.location.reload();
		    }
		});
		}
		
		function resetFormKontes(){
			
		}
		
	
	
		$(document).ready(function() {
			    $('.multiselect').multiselect();
			    
			    $('#tanggal_mulai').datetimepicker({
				  format:'Y-m-d H:i'
				});
				
				$('#tanggal_selesai').datetimepicker({
				  format:'Y-m-d H:i'
				});
			});
	
	
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999;">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Login</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" id="form-login" method="post" action="<?=base_url();?>login/login_check">
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Username</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Password</label> -->
					<div class="col-sm-12">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
					</div>
				</div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" id="login"><span class="glyphicon glyphicon-lock"></span> Log In</button>
			<button type="button" class="btn btn-primary" id="register" data-toggle="modal" data-target="#register-modal"><span class="glyphicon glyphicon-user"></span> Register</button>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal  -->
	
	
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Register</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" id="form-register" action="<?=base_url();?>registrasi/insert_data">
				<div class="form-group">
					<!--<label class="col-sm-2 control-label" for="">Username</label>-->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="username" id="username_register" placeholder="Username"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Password</label> -->
					<div class="col-sm-12">
						<input type="password" class="form-control validate-form" name="password" id="password_register" placeholder="Password"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Retype Password</label> -->
					<div class="col-sm-12">
						<input type="password" class="form-control validate-form" name="retype_password" id="retype_password" placeholder="Retype Password"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Full Name</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="nama_lengkap" id="nama_lengkap" placeholder="Full Name"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Tanggal Lahir</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Email</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="alamat_email" id="alamat_email" placeholder="Email"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Alamat</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="alamat" id="alamat" placeholder="Alamat"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Kota</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="kota" id="kota" placeholder="Kota"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">Negara</label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="negara" id="negara" placeholder="Negara"/>
					</div>
				</div>
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label" for="">No. HP </label> -->
					<div class="col-sm-12">
						<input type="text" class="form-control validate-form" name="no_hp" id="no_hp" placeholder="No. HP "/>
					</div>
				</div>
			</form>
		   </div>
		   <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-primary" id="save_register">Register</button>
		  </div>
		  </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal  -->
	
	
	<script type="text/javascript">
		function load_kontes_by_genre(parameter){
			// $('#list_kontes').hide(300);
			// $('#list_kontes').show(300);
			$('#list_kontes').load('<?=base_url()?>/home/list_kontes_by_genre/',{id_genre:parameter},function(){
				
			});
		}
		
		$("#login").click(function() {
			var form = $('#form-login');
			var username = $("#username");
			var password = $("#password");
			if(username.val() == ''){
				alert("Username can not be empty!");
				username.focus();
				return false;
			}
			else if(password.val() == ''){
				alert("Password can not be empty!");
				password.focus();
				return false;
			}
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: form.attr('action'),
				data: form.serialize(),
				success: function(data,status) {
					if(data.status != 'error'){
						if(data.msg == '1'){
							window.location.href ='<?=base_url()?>webadmin';
						}
						else{
							window.location.href = '<?=base_url()?>';
						}
					}
					else{
						alert(data.msg);
					}
				}
			})
				return false;
		});
		
		$("#save_register").click(function() {
			var form = $('#form-register');
			var empty = false;
			var temp_field = null;
			var password_register = $("#password_register").val()
			var retype_password = $("#retype_password").val()
			var input = form.find('.validate-form').filter(function() {
				if(this.value === ""){
					empty = true;
					if(temp_field == null){
						temp_field = $(this);
					}
				}
			});
			if(empty){
				temp_field.focus();
				// alert(temp_field.attr("id"));
				alert("All input must be filled!");
				return false;
			}
			else if(retype_password!=password_register){
				alert("Password doesn't match");
				$("#retype_password").focus();
				return false;
			}
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: form.attr('action'),
				data: form.serialize(),
				success: function(data,status) {
					if(data.status != 'error'){
						$("#register-modal").modal('hide');
					}
					alert(data.msg);
				}
			})
				return false;
		});
	</script>
</html>