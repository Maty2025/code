
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	
	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner contactus">
			<div class="container">
				<h3>Liste des medecins </h3>
			</div>
		</div><!-- PageBanner /- -->
		
		<div class="container contactus-section">
			<div class="section-padding"></div>
			<div class="row">
				<div class="col-md-8 contactus-left">
				
					
					   <div class="card">
                       
						<?php  foreach ($resultats as $resultat): ?>
																			
                            <tr>
                              <th scope="row">1</th>
                              <td>	<?php echo $resultat->prenom; ?></td>
                              
                            
                          </tr>
                         		<?php  endforeach; ?>
                      </tbody>
                  </table>
                        </div>
                    </div>
				</div>
				<div class="col-md-4 contactus-right">
					
				</div>
			</div>
		<div class="section-padding"></div>
	</div>

	</main>
	