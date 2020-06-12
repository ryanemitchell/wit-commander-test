import assign from 'lodash.assign';

const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.editor;
const { PanelBody, SelectControl } = wp.components;
const { addFilter } = wp.hooks;
const { __ } = wp.i18n;

// Enable button control on the following blocks
const enableButtonControlOnBlocks = [
  "core/button"
];

// Available button control options
const buttonControlOptions = [
  {
    label: __( '1' ),
    value: '1',
  },
  {
    label: __( '2' ),
    value: '2',
  },
  {
    label: __( '3' ),
    value: '3',
  },
  {
    label: __( '4' ),
    value: '4',
  },
];

/**
 * Add button control attribute to block.
 *
 * @param {object} settings Current block settings.
 * @param {string} name Name of block.
 *
 * @returns {object} Modified block settings.
 */
const addButtonControlAttribute = ( settings, name ) => {
  // Do nothing if it's another block than our defined ones.
  if ( ! enableButtonControlOnBlocks.includes( name ) ) {
    return settings;
  }

  // Use Lodash's assign to gracefully handle if attributes are undefined
  settings.attributes = assign( settings.attributes, {
    button: {
      type: 'string',
      default: buttonControlOptions[ 0 ].value,
    },
    mobileButton: {
      type: 'string',
      default: buttonControlOptions[ 0 ].value,
    },
  } );

  return settings;
};

addFilter( 'blocks.registerBlockType', 'extend-block-example/attribute/button', addButtonControlAttribute );

/**
 * Create HOC to add button control to inspector controls of block.
 */
const withButtonControl = createHigherOrderComponent( ( BlockEdit ) => {
  return ( props ) => {
    // Do nothing if it's another block than our defined ones.
    if ( ! enableButtonControlOnBlocks.includes( props.name ) ) {
      return (
        <BlockEdit { ...props } />
      );
    }

    const { button, mobileButton } = props.attributes;

    // add has-button-xy class to block
    if ( button ) {
      props.attributes.className = `has-cols-${ button }`;
    }

    if ( mobileButton ) {
      props.attributes.className = props.attributes.className+` has-cols-mobile-${ mobileButton }` ;
    }

    return (
      <Fragment>
        <BlockEdit { ...props } />
        <InspectorControls>
          <PanelBody
            title={ __( 'My Button Control' ) }
            initialOpen={ true }
          >
            <SelectControl
              label={ __( 'Button' ) }
              value={ button }
              options={ buttonControlOptions }
              onChange={ ( selectedButtonOption ) => {
                props.setAttributes( {
                  button: selectedButtonOption,
                } );
              } }
            />
            <SelectControl
              label={ __( 'Mobile Button' ) }
              value={ mobileButton }
              options={ buttonControlOptions }
              onChange={ ( selectedButtonOption ) => {
                props.setAttributes( {
                  mobileButton: selectedButtonOption,
                } );
              } }
            />
          </PanelBody>
        </InspectorControls>
      </Fragment>
    );
  };
}, 'withButtonControl' );

addFilter( 'editor.BlockEdit', 'extend-block-example/with-button-control', withButtonControl );

/**
 * Add margin style attribute to save element of block.
 *
 * @param {object} saveElementProps Props of save element.
 * @param {Object} blockType Block type information.
 * @param {Object} attributes Attributes of block.
 *
 * @returns {object} Modified props of save element.
 */
const addButtonExtraProps = ( saveElementProps, blockType, attributes ) => {
  // Do nothing if it's another block than our defined ones.
  if ( ! enableButtonControlOnBlocks.includes( blockType.name ) ) {
    return saveElementProps;
  }

  const margins = {
    1: '1',
    2: '2',
    3: '3',
    4: '4',
  };

  if ( attributes.button in margins ) {
    // Use Lodash's assign to gracefully handle if attributes are undefined
    assign( saveElementProps, { style: { 'button-count': margins[ attributes.button ] } } );
  }

  return saveElementProps;
};

addFilter( 'blocks.getSaveContent.extraProps', 'extend-block-example/get-save-content/extra-props', addButtonExtraProps );
