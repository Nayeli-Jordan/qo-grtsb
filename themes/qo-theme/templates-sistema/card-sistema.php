<div class="col s12 m6 l4 element-item card-brief margin-bottom-large <?php echo $estatus . ' ' . $prioridad . ' '; ?>
<?php 
	$terms = get_the_terms( $post->id, 'responsable' );
	if ( is_array( $terms ) ) {
	    foreach ( $terms as $term ) {
			echo $term->slug . ' ';
		}
	}
	$terms = get_the_terms( $post->id, 'requerimiento' );
	if ( is_array( $terms ) ) {
	    foreach ( $terms as $term ) {
			echo $term->slug . ' ';
		}
	}
?>">
	<div class="shadow relative card-sistema">
		<?php $linkCard = get_permalink(); ?>
		<div class="card-head">
			<a href="<?php echo the_permalink(); ?>#estatus-brief">
				<div class="status shadow-small bg-<?php echo $estatus; ?>">
					<span class="icon-lock-open"></span><span class="etiqueta-text"><?php echo $estatus; ?></span>
				</div>
			</a>
			<h2><a href="<?php echo $linkCard; ?>"><?php the_title(); ?></a></h2>
		</div>
		<div class="bg-gradient-qo hr hr-3"></div>
		<div class="card-body">			
			<span class="etiqueta-prioridad bg-<?php echo $prioridad; ?> shadow-small"><span class="etiqueta-text"><?php echo $prioridad; ?></span></span>
			<?php
				$terms = get_the_terms( $post->id, 'responsable' );
				echo '<p><span class="icon-user icon-size-small"></span>';
				if ( is_array( $terms ) ) {
				    foreach ( $terms as $term ) {
						echo '<span>' . $term->name . ' </span>';
					}
				}
				echo '</p>';
				$terms = get_the_terms( $post->id, 'requerimiento' );
				echo '<p class="font-strong"><span class="icon-tag icon-size-small"></span>';
				if ( is_array( $terms ) ) {
				    foreach ( $terms as $term ) {
						echo "<span>" . $term->name . "<span class='etiqueta-requerimiento bg-" . $term->slug . "'></span> </span>";
					}
				}
				echo '</p>';
			?>
			<div class="hr bg-gradient-qo margin-top-xsmall margin-bottom-xsmall"></div>
			<div class="number-brief"><?php echo get_the_date("y") . get_the_date("m") . post_number_sistema(get_the_ID()); ?></div>
			<div class="content-info-brief">
				<p><span class="uppercase color-purple font-strong">Cliente:</span> <?php echo $cliente; ?></p>
				<p><span class="uppercase color-purple font-strong">Marca:</span> <?php echo $marca ?></p>
				<p><span class="uppercase color-purple font-strong">Proyecto:</span> <?php echo $proyecto; ?></p>
				<p class="margin-top-xsmall"><span class="icon-calendar-inv"></span>Entrega: 
				<?php 
					if( $ent_fecha4_ext  != "" ) : 
						$ent_fecha4_extNew = date('d-m-Y', strtotime($ent_fecha4_ext));
						echo $ent_fecha4_extNew;
					elseif( $ent_fecha3_ext  != "" ) : 
						$ent_fecha3_extNew = date('d-m-Y', strtotime($ent_fecha3_ext));
						echo $ent_fecha3_extNew;
					elseif( $ent_fecha2_ext  != "" ) : 
						$ent_fecha2_extNew = date('d-m-Y', strtotime($ent_fecha2_ext));
						echo $ent_fecha2_extNew;
					elseif( $ent_fecha1_ext  != "" ) : 
						$ent_fecha1_extNew = date('d-m-Y', strtotime($ent_fecha1_ext));
						echo $ent_fecha1_extNew;
					elseif( $fechaEntrega != "" ) : 
						$fechaEntregaNew = date('d-m-Y', strtotime($fechaEntrega));
						echo $fechaEntregaNew;
					endif;
				?></p>				
			</div>

			<?php 
				$todayDate 	= date('Y-m-d');
				//$todayDate	= date('Y-m-d', strtotime($todayDate));
				if( $ent_fecha4_ext != "" ) : 
					$limitFechaEntrega = $ent_fecha4_ext;
				elseif( $ent_fecha3_ext != "" ) : 
					$limitFechaEntrega = $ent_fecha3_ext;
				elseif( $ent_fecha2_ext != "" ) : 
					$limitFechaEntrega = $ent_fecha2_ext;
				elseif( $ent_fecha1_ext != "" ) : 
					$limitFechaEntrega = $ent_fecha1_ext;
				elseif( $fechaEntrega != "" ) : 
					$limitFechaEntrega = $fechaEntrega;
				endif;

				/* Activar alerta antes de la fecha límite*/
				$daysAlertBefore = 0;
				if ($fechaEntregaAlert === '1 día antes') {
					$daysAlertBefore = 1;
				} elseif ($fechaEntregaAlert === '2 días antes') {
					$daysAlertBefore = 2;
				} elseif ($fechaEntregaAlert === '3 días antes') {
					$daysAlertBefore = 3;
				} if ($fechaEntregaAlert === '1 semana antes') {
					$daysAlertBefore = 7;
				}

				$activeAlertDate = date('Y-m-d', strtotime($limitFechaEntrega . '-' . $daysAlertBefore . ' days'));
				/*echo $fechaEntregaAlert . '<br>' . $daysAlertBefore . '<br>' . $activeAlertDate . '<br>' . $todayDate;*/
				if (($todayDate >= $activeAlertDate && $estatus != 'Cerrado' && $fechaEntregaAlert != 'Desactivar alerta')){ ?>
				    <div id="btn-entrega-proxima" class="shadow btn-primary-rounded"><span class="icon-clock"></span><span class="etiqueta-text">Entrega Cercana</span></div>
				<?php } elseif ($limitFechaEntrega <= $todayDate && $estatus != 'Cerrado') {  ?>
					<div id="btn-entrega-proxima" class="shadow btn-primary-rounded"><span class="icon-clock"></span><span class="etiqueta-text">Entrega Cercana</span></div>
				<?php } ?>		
			<a href="<?php echo $linkCard; ?>"><div class="shadow btn-primary-rounded"><span class="icon-eye"></span></div></a>
		</div>							
	</div>
</div>