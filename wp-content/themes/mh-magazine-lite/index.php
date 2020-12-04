<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
	<div id="main-content" class="mh-loop mh-content" role="main">
			<div>
				

				


                         <!--<div class="containerAFP">
                                <div class="r" style="margin-top: 12px;">
                                  <div class="col-10 sizeimg">
                                    <center>
                                            <img class="imgverisure" src="https://pymex.com/wp-content/uploads/2019/12/afp-habitat-1.png" alt="AFP Habitat"  border="0" align="center" />
                                  </center>
                                  </div>
                                </div>
                                <div class="r">
                                  <div class="col-10"> 
                                  <center>
                                  <span class="tualarmaAFP">PARA TI, LA MAYOR</span>
                                  <br>
                                  <span class="descuentoAFP">RENTABILIDAD </span>
                                  <br>
                                  <span class="hastadiciembre">Y MENOR COMISIÓN SOBRE EL SUELDO </span>
                                  </center>
                                  </div>
                                </div>
                                  <div class="r">
                                    <div class="col-10">
                                        <center>
                                          <a href="http://bit.ly/afphabitat2" target="_blank">
                                          <div class="main-content">
                                          <div class="item button-jittery">
                                              <button class="afpbtn">¡Afíliate ya! </button>
                                            </div>
                                            </div>
                                          </a>
                                    </center>
                                    </div>
                                  </div>
                              </div>-->
<!-- PMX-Imagen -->
<!-- PMX-Imagen-Mov -->
<!--FIN PMX-Imagen-Mov -->
 <!--tabla verisure-->
 <!--<div class="hidden-xs hidden-sm">
                              <div class="containerverisure">
                                  <div class="r">
                                      <div class="col-10 sizeimg">
                                          <center>
                                              <img class="imgverisure" src="https://pymex.com/wp-content/uploads/2019/12/logo-verisure-4.png" alt="Verisure Perú"  border="0" align="center" />
                                          </center>
                                      </div>
                                  </div>
                                  <div class="r">
                                  <div class="col-10"> 
                                    <center>
                                        <span class="descuento">40% descuento</span>
                                      <br>
                                        <span class="tualarma">EN TU ALARMA PARA CASA</span>
                                          <br>
                                        <san class="hastadiciembre">HASTA EL 31 DE AGOSTO</span>
                                      </center>
                                  </div>
                                </div>
                                <div class="r">
                                  <div class="col-10 sizeimg">
                                      <center>
                                          <a href="https://www.verisure.pe/lp/calculadora/?camp=emk_pymex&utm_source=pymex_cotizaciones&utm_medium=email&utm_campaign=030820_pymex&utm_content=lead1" target="_blank">
                                          <div class="main-content">
                                              <div class="item button-jittery">
                                                <span class="veribtn">
                                                  <img src="https://pymex.com/wp-content/uploads/2019/12/boton-calcula-1minuto-1-2.png" alt="Alarmas para tu Hogar"/>
                                                </span>
                                              </div>
                                          </div>
                                          </a>
                                      </center>
                                  </div>
                                </div>
                              </div>
                            </div>-->
 <!--Fin tabla verisure-->
				


<!-- PMX-relac-mov -->
<!--FIN PMX-relac-mov -->

<!-- PMX-BotonArriba -->
 <!--<div class="visible-xs visible-sm">
             <div class="banner-veri-mobil">
             <a href="https://www.verisure.pe/lp/calculadora/?camp=emk_pymex&utm_source=pymex_cotizaciones&utm_medium=email&utm_campaign=030820_pymex&utm_content=lead1" target="_blank" style="text-decoration:none;">
             <img class="veri-img" src="https://pymex.com/wp-content/uploads/2020/03/mob.png" alt="">
             </a>
              <p class="titulo-banner-mobil">Visualiza lo que <br> 
              <span class="veri-sub">SUCEDE EN TU HOGAR</span>  
              <br> 
              desde la <span class="veri-app"> App My Verisure</span> 
              </p> 
              <a href="https://www.verisure.pe/lp/calculadora/?camp=emk_pymex&utm_source=pymex_cotizaciones&utm_medium=email&utm_campaign=030820_pymex&utm_content=lead1" target="_blank" style="text-decoration:none;">
              <P class="veri-buttom">C0TIZA TU ALARMA</P>
              </a>
            </div>
          </div>-->
<!-- FIN PMX-BotonArriba -->
<!-- Slider -->
<!--<div class="hidden-xs hidden-sm">
<div id="slider">
  <div class="slides">
    <a href="http://bit.ly/verisure5" target="_blank">
    <div class="slider">
      <div class="legend"></div>
      <div class="image">
        <img src="https://pymex.com/wp-content/uploads/2020/02/lead02.png">
      </div>
    </div>
    <div class="slider">
      <div class="legend"></div>
      <div class="image">
        <img src="https://pymex.com/wp-content/uploads/2020/02/lead02-1.png">
      </div>
    </div>
    <div class="slider">
      <div class="legend"></div>
      <div class="image">
        <img src="https://pymex.com/wp-content/uploads/2020/02/lead04-1.png">
      </div>
    </div>
    <div class="slider">
        <div class="legend"></div>
        <div class="image">
          <img src="https://pymex.com/wp-content/uploads/2020/02/lead01.png">
        </div>
      </div>
  </div>
</a>
</div>
</div>-->
<!-- PMX-BotonArriba-Mov -->
<!-- fin PMX-BotonArriba-Mov -->
<!-- PMX-Imagen -->

<!-- PMX-Imagen -->
<!-- PMX-Imagen movil -->
<!-- PMX-Imagen -->

   
  
<!-- inicio PMX-Relac -->
<!-- fin PMX-Relac -->
<!--inicio PMX-relac-mov -->
<!--fin PMX-relac-mov -->
<br>

		<?php
		mh_before_page_content();
		if (have_posts()) {
			if (is_home() && !is_front_page()) { ?>
				<header class="page-header">
					<h1 class="page-title">
						<?php single_post_title(); ?>
					</h1>
				</header>
	<?php
			}
			mh_magazine_lite_loop_layout();
			
			mh_magazine_lite_pagination();
		} else {
			get_template_part('content', 'none');
		} ?>
	</div>
    <!-- AD AQUI -->
    


<!--FIN PMX-BotonAbajo-Mov -->
<!-- PMX-BotonAbajo -->
<!-- PMX-BotonAbajo-Mov -->
<!--FIN PMX-BotonAbajo-Mov -->
 <!--tabla verisure-->
 <!--<div class="hidden-xs hidden-sm">
	<div class="container">
    <div class="r">
      <section class="col-10">
         <center>
             
                <img src="https://pymex.com/wp-content/uploads/2019/12/logo-verisure-4.png" alt="Verisure Perú"  border="0" align="center" />
              
		</center>
      </section>
    </div>
    <div class="r">
      <section class="col-10"> 
		  <center>
         
            <span class="descuento">40% descuento 
            </span><br><span class="tualarma">EN TU ALARMA PARA CASA</span>

           <br>
              <span class="hastadiciembre">HASTA EL 31 DE MARZO</span>
			
			</center>
      </section>
   
    </div>

    <div class="r">
        <section class="col-10">
             <center>
              <a href="http://bit.ly/verisure5" target="_blank">
              <div class="main-content">
                    <div class="item button-jittery">
                      <span class="veribtn">
                        <img src="https://pymex.com/wp-content/uploads/2019/12/boton-calcula-1minuto-1-2.png" alt="Alarmas para tu Hogar"/>
                      </span>
                    </div>
                </div>     
              </a>
			  </center>
         

        </section>
      </div>
      </div>

  </div>-->
<!-- PMX-Relac -->
<!-- FIN PMX-Relac -->
<!-- PMX-relac-mov -->
<!-- FIN PMX-relac-mov -->

</div>
<!--<?php //get_footer(); ?>-->

 <!--<div class="mobileadunit">
    <a href="https://www.verisure.pe/lp/calculadora/?camp=emk_pymex&utm_source=pymex_cotizaciones&utm_medium=email&utm_campaign=030820_pymex&utm_content=lead1" target="_blank">
      <img src="https://pymex.com/wp-content/uploads/2019/12/afp-habitat-1.png" alt="verisure" style="height: 38px;margin-left: 12px;
      margin-top: 5px;">
    
      <span class="btn-footer-ads">¡Afíliate ya!</span>
 
    </a>
</div>-->
<!--<div class="mobileadunit">
    <a href="https://www.verisure.pe/lp/calculadora/?camp=emk_pymex&utm_source=pymex_cotizaciones&utm_medium=email&utm_campaign=030820_pymex&utm_content=lead1" target="_blank">
      <img src="https://pymex.com/wp-content/uploads/2020/07/unnamed-9.png" alt="verisure" style="height: 43px;margin-left: 30px;
      margin-top: 2px;">
    
      <span class="btn-footer-ads">¡Cotiza!</span>
 
    </a>
</div>-->

