<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * from system_settings limit 1");
if($qry->num_rows > 0){
	foreach($qry->fetch_array() as $k => $val){
		$meta[$k] = $val;
	}
}
 ?>
<div class="container-fluid">
	
	<div class="card col-lg-12">
		<div class="card-body">
			<form action="" id="manage-settings">
			<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-size: cover;
        background-position: center;
    }

    h1 {
        font-size: 36px;
        margin-top: 50px;
        color: #333;
    }

    p {
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 50px;
        background-color: rgba(255, 255, 255, 0.8);
        box-shadow: 0px 0px 10px #ccc;
        border-radius: 10px;
        backdrop-filter: blur(10px);
    }

    img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }
</style>
<body>
    <div class="container">
        <h1>About Developer</h1><br><br>
        <p>HELLO!<br>Here's who I am & what I do</p>
        <p>Greetings Everyone!<br>
        I am Aswin, a resident of Vancouver,Canada . I work as a Software & Web Developer as Freelancer. I've worked in the past as Quality Assurance & Developer At Pratham IT System.Pvt.Ltd for almost 2 years.Hit me up at Mainali.aswin88@gmail.com. You can give a ring at +1 672 971 9810 for any other queries, question or projects to work with!!</p>
        <p>Striving for skills is what I mostly do.<br>You Learn When You Fail, So Never Be Afraid of Failing.</p>
        <p><em>Sabai Sapana Nai Ho Ki??</em></p>
    </div>
</body>
			</form>
		</div>
	</div>

<script>
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
	$('.text-jqte').jqte();

	$('#manage-settings').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_settings',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.','success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})

	})
</script>
<style>
	
</style>
</div>
