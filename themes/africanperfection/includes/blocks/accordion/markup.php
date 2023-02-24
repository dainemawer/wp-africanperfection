<?php
/**
 * Example block markup
 *
 * @package TenUpTheme\Blocks\Example
 *
 * @var array    $attributes         Block attributes.
 * @var string   $content            Block content.
 * @var WP_Block $block              Block instance.
 * @var array    $context            Block context.
 */

?>
<div <?php echo get_block_wrapper_attributes(); // phpcs:ignore
?>
		>
	<div class="accordion-block">
		<details>
			<summary><?php echo wp_kses_post( $attributes['title'] ); ?></summary>
			<div class=" wp-block-tenup-example__content">
				<?php
					$inner_blocks_html = '';
				foreach ( $block->inner_blocks as $inner_block ) {
					$inner_blocks_html .= $inner_block->render();
				}

					echo wp_kses_post( $inner_blocks_html );
				?>
			</div>
		</details>
	</div>
</div>
