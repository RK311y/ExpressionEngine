<?php
namespace EllisLab\ExpressionEngine\Module\Channel\Model;

use EllisLab\ExpressionEngine\Model\Model;
use EllisLab\ExpressionEngine\Model\Interfaces\Field\FieldStructure;
use EllisLab\ExpressoinEngine\Model\Interfaces\Field\FieldContent;

class ChannelFieldStructure 
	extends Model 
		implements FieldStructure {

	protected static $_meta = array(
		'primary_key' => 'field_id',
		'gateway_names' => array('ChannelFieldGateway'),
		'key_map' => array(
			'field_id' => 'ChannelFieldGateway',
			'site_id' => 'ChannelFieldGateway',
			'group_id' => 'ChannelFieldGateway'
		)
	);	

	// Properties	
	protected $field_id;
	protected $site_id;
	protected $group_id;
	protected $field_name;
	protected $field_label;
	protected $field_instructions;
	protected $field_type;
	protected $field_list_items;
	protected $field_pre_populate;
	protected $field_pre_channel_id;
	protected $field_pre_field_id;
	protected $field_ta_rows;
	protected $field_maxl;
	protected $field_required;
	protected $field_text_direction;
	protected $field_search;
	protected $field_is_hidden;
	protected $field_fmt;
	protected $field_show_fmt;
	protected $field_order;
	protected $field_content_type;
	protected $field_settings;

	/**
     * Display the settings form for this field
	 *
	 * @return	string|View		Either the HTML string of the form partial, or 
	 * 							a view object representing it.
	 */
	public function getForm()
	{}

    /**
	 * Get the form that defines this field.  Takes a FieldContent object to populate
	 * the form in the case of an edit.
     *
     * @param FieldContent   $field_content   An object implementing the FieldContent interface
     * @return String   HTML for the entry / edit form
     */
    public function getPublishForm($field_content = NULL)
	{}

	
}
