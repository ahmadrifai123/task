<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" id="uangform">
				<span class="contact1-form-title">
					TEST FORM 
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="form-control" type="text" name="uang" id="uang" placeholder="Dollar">
					<span class="shadow-input1"></span>
				</div>

		
<div class="wrap-input1 validate-input" data-validate = "Name is required">
					
                  <select class="form-control" id="konversi" name="konversi">
                    <option></option>
                    
                  </select>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="form-control" type="text" name="hasil" id="hasil" placeholder="Rupiah">
					<span class="shadow-input1"></span>
				</div>

				<!-- <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div> -->

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit">
						<span>
							Pindah nyang Rupiah
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
 <script>
         $(function(){
            var url = "https://free.currconv.com"
            var api = "fe25711d79135e058c37"
            $.ajax({
                url:url+"/api/v7/currencies?apiKey="+api,
                type:"get",
                success:function(res){
                    var matauang = res.results
                    // console.log(matauang)
                    var htmls = ''
                    $.each(matauang,function(id,res){
                        htmls += '<option value="'+res.id+'">'+res.currencyName+'</option>'
                    });
                    $('select#konversi').append(htmls);
                }
            });

            $('#uangform').submit(function(e){
                var uang = $('input#uang').val()
                var matauang = $('select#konversi').val();
                $.ajax({
                    url:url+"/api/v7/convert?q="+matauang+"_IDR&compact=ultra&apiKey="+api,
                    type:"get",
                    success:function(res){
                        // console.log()
                        kali = parseFloat(res[matauang+"_IDR"]) * parseFloat(uang);
                        $('input#hasil').val(parseFloat(kali));
                    },
                    error:function(){
                        alert('Error koneksi')
                    }
                })
                e.preventDefault();
            })
        })
        </script>
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->

<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>

 