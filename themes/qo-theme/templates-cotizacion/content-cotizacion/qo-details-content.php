<div class="content-cotizacion relative contentCetails"  style="page-break-after: always;">
	<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
	<div class="container container-large">
		<p class="date"><?php echo get_the_date(); ?></p>
		<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">
		<div class="row margin-bottom-xsmall">
			<div class="col col-1_5">
				<div class="item-cotizacion"><p>Modelo</p></div>
				<div class="opt-cotizacion">
					<div class="modelo"><?php if( $modeloA != "" ) : ?><?php echo $modeloA; ?><?php endif; ?></div>
				</div>
			</div>
			<div class="col col-1_5">
				<div class="item-cotizacion"><p>Nota</p></div>
				<div class="opt-cotizacion">
					<div class="nota"><?php if( $notaA != "" ) : ?><?php echo $notaA; ?><?php endif; ?></div>
				</div>
			</div>
			<div class="col col-1_5">
				<div class="item-cotizacion"><p>Piezas</p></div>
				<div class="opt-cotizacion">
					<div><?php if( $piezasA != "" ) : ?><?php echo $piezasA; ?><?php endif; ?></div>
				</div>
			</div>
			<div class="col col-1_5">
				<div class="item-cotizacion"><p>Precio</p></div>
				<div class="opt-cotizacion">
					<div><?php if( $precioA != "" ) : ?>$<?php echo $precioA; ?><?php endif; ?></div>
				</div>
			</div>
			<div class="col col-1_5">
				<div class="item-cotizacion"><p>Total</p></div>
				<div class="opt-cotizacion">
					<div>
						<?php if( $piezasA != "" && $precioA != "") : 
							$total_bruto 	= $piezasA * $precioA;
							$iva 			= $total_bruto * .16;
							$total_neto 	= $total_bruto + $iva;
							?>
							<?php if( $iva_inc == "Sí" ) : ?>
								$<?php echo $total_neto; ?>
							<?php else: ?>
								$<?php echo $total_bruto; ?>
							<?php endif; ?>						
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<div class="item-cotizacion"><p>Detalles</p></div>
				<div class="opt-cotizacion description">					
					<div><?php if( $detalleA != "" ) : ?><?php echo $detalleA; ?><?php endif; ?></div>
				</div>
			</div>
		</div>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
	</div>	
</div> <!-- end content-cotizacion -->