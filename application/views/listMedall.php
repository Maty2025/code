
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	
	<main class="site-main page-spacing">
	
		
		<div class="container contactus-section">
			<div class="row">
				<div class="col-md-12 contactus-left">
				
					
					   <div class="">
                        <!-- HotelBook Section -->
		<div class="container hotelbook-section">
			<div class="section-padding"></div>
				<div class="section-header">
				  <h3>Liste des medecins</h3>
					<span><?php  foreach ($resultTDs as $resultTD): ?>
                             <a href="RechercheMed2?tyid=<?php echo $resultTD->id_tm; ?>">#<?php echo $resultTD->nom_tm; ?> - </a>  
                           <?php  endforeach; ?>
                    </span>
				</div>
				<div class="bookhotel-block">
					<div class="row">
                        <?php  foreach ($results as $result): ?>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<img src="../assets/images/<?php echo $result->img_med; ?>" alt="bookhotel" width="370" height="360"/>
							<div class="bookhotel-content">
								<h3><?php echo $result->prenom_med; ?> <br><?php echo $result->nom_med; ?> 
                                    <span><?php echo $result->nom_tm; ?></span>
                                    <span><?php echo $result->nom_ville; ?></span>
                                </h3>
								<a href="#" title="Book Now">Plus</a>
							</div>
						</div>
						<?php  endforeach; ?>
					</div>
				</div>
			<div class="section-padding"></div>
		</div><!-- HotelBook Section /- -->
                        
                    </div>
				</div>
				<div class="col-md-4 contactus-right">
					
				</div>
			</div>
		<div class="section-padding"></div>
	</div>

	</main>
	