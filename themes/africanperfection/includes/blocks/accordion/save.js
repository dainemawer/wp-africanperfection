/**
 * See https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-edit-save/#save
 *
 * @returns {null} Dynamic blocks do not save the HTML.
 */
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

const ExampleBlockSave = () => {
	const blockProps = useBlockProps.save();

	return (
		<div {...blockProps}>
			<InnerBlocks.Content />
		</div>
	);
};

export default ExampleBlockSave;
