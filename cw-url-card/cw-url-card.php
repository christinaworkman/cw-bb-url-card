<?php
/**
 * @class FMyUrlCard
 */
 
class MyUrlCard extends FLBuilderModule {

	public function __construct() {
			parent::__construct(array(
					'name'            => __( 'URL Card', 'fl-builder' ),
					'description'     => __( 'Card layout for urls module!', 'fl-builder' ),
					'category'        => __( 'CW Modules', 'fl-builder' ),
					'dir'             => MY_MODULES_DIR . 'cw-url-card/',
					'url'             => MY_MODULES_URL . 'cw-url-card/',
					'icon'            => 'cover-image.svg',
					'editor_export'   => true, // Defaults to true and can be omitted.
					'enabled'         => true, // Defaults to true and can be omitted.
					'partial_refresh' => false, // Defaults to false and can be omitted.
			));
	}
}

/**
 * Register the module and its form settings.
 */

FLBuilder::register_module( 'MyModuleClass', array(
  'general'      => array( //First Tab
      'title'         => __( 'General', 'fl-builder' ),
      'sections'      => array(
        'url'  => array(
          'title'            => __( 'url', 'fl-builder' ),
          'fields'           => array(
            'cw-link-field'     => array(
            'type'          => 'link',
            'label'         => __( 'Link Field', 'fl-builder' ),
          )
          )
        )
    )
  )
) );
