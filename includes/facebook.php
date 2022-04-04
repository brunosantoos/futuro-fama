<?php
$query_args = array('page_id' => 4);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post();
$compartilhamento = get_field('compartilhamento');
endwhile;
?>
<script>
var $fcbk = {};
$fcbk.scope = 'publish_actions, public_profile';
$fcbk.user = {};
var wallPost = {
	url : "",
	message: "<?php echo $compartilhamento; ?>"
};
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1130962486931628',
      xfbml      : true,
      version    : 'v2.4'
    });

  };
function getStatus(){
	$('.loader').fadeIn('fast');
	TweenLite.to($('.login'), 0.5, {opacity: 0, ease:'Power0.easeOut'});
	FB.getLoginStatus(function(response) {
  	if (response.status == 'connected') {
    	onLoginInfo(response);
  	} else {
    	FB.login(function(response) {
      	onLoginInfo(response);
    	}, {scope: 'public_profile'});
  	}
	});	
}
function onLoginInfo(response) {
	if (response.status === 'not_authorized') {
		$.msg({ content: 'Voce precisa aceitar o aplicativo!', timeOut : 2500 });
		$('.loader').fadeOut('fast');
		TweenLite.to($('.login'), 0.5, {opacity: 1, ease:'Power0.easeOut'});
	}else if (response.status == 'connected') {
		FB.api("/me?fields=name,email", {
			access_token : FB.getAccessToken()
		}, function(data) {
			jQuery.post($('.body').attr('urli') + "/php/check.php",{facebook: data.id},function(dt){
			if(dt.length > 0){
				window.open($('.body').attr('url') + "/quiz",'_self');
			}else{
			if($('#nome').val().length == 0){
				$('#nome').val(data.name);
			}
			if($('#email').val().length == 0){
				$('#email').val(data.email);
			}
			$('#facebook').val(data.id);
			$('.loader').fadeOut('fast');
			$('.wellcome').fadeIn('slow');
			$('.login').hide();
			}});
		});
    }else{
		$.msg({ content: 'Voce precisa estar logado!', timeOut : 2500 });
		$('.loader').fadeOut('fast');
		TweenLite.to($('.login'), 0.5, {opacity: 1, ease:'Power0.easeOut'});
	}
}
function checkStatus(){
    	FB.login(function(response) {
      	onLogin(response);
    	}, {scope: $fcbk.scope});
}
function onLogin(response) {
	if (response.status === 'not_authorized') {
		$.msg({ content: 'Voce precisa aceitar o aplicativo!', timeOut : 2500 });
	}else if (response.status == 'connected') {
		FB.api("/me", {
			access_token : FB.getAccessToken()
		}, function(data) {
			postToWall();
		});
    }else{
		$.msg({ content: 'Voce precisa estar logado!', timeOut : 2500 });
	}
}
function postToWall() {
	console.log(wallPost);
	FB.api('photos', 'post', wallPost, function(response) {
		if (!response || !response.error) {
			$.msg({ content: "Resultado compartilhado com sucesso!", timeOut : 2500 });
		} else {
			$.msg({ content: "Erro no compartilhamento!", timeOut : 2500 });
			//window.setTimeout(function() {tryLoginagain(); }, 2500);
		}
	});			
}
function tryLoginagain(){
	FB.login(function(response) {
		if (response.status === 'not_authorized') {
			$.msg({ content: 'Voce precisa aceitar o aplicativo!', timeOut : 2500 });
		} else{
			FB.api("/me", {
				access_token : FB.getAccessToken()
			}, function(data) {
				postToWall();
			});
		}
	}, {
		scope : $fcbk.scope
	});
}
</script>