<?php
$skills = get_field('skills_list'); 
?>

   <div class="icon-picker">
   <?php if ( $skills ) : ?> 
			<ul class="skills-list">
				<?php foreach ( $skills as $skill ) : ?>
					<li class="skill-item">
						<?php if (!empty ( $skill['icon'] )) : ?>
							<img src="<?php echo esc_url ( $skill['icon'] ); ?>" 
								 alt="<?php echo esc_attr ( $skill['text'] ); ?>"
								 class="skill-icon">
						<?php endif; ?>
						<?php if (!empty ( $skill['text'] )) : ?>
							<span class="skill-text">
								<?php echo esc_html ( $skill['text'] ); ?>
							</span>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
<?php endif; ?>
	</div>