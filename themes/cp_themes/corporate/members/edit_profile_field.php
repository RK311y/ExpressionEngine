<?php
if ($EE_view_disable !== TRUE)
{
	$this->load->view('_shared/header');
	$this->load->view('_shared/main_menu');
	$this->load->view('_shared/sidebar');
	$this->load->view('_shared/breadcrumbs');
}
?>

<div id="mainContent"<?=$maincontent_state?>>
	<?php $this->load->view('_shared/right_nav')?>
		<div class="contents">

		<div class="heading"><h2><?=lang($cp_page_title)?></h2></div>
		
		<div class="pageContents">

    			<?=form_open('C=members'.AMP.'M=update_profile_fields'.AMP.'U=1', '', $hidden_form_fields)?>
                <?php 

                $notice = '<span class="notice">*</span> ';

    		    $this->table->set_template($cp_table_template);
    		    $this->table->set_heading(
                    array('data' => lang('preference'), 'style' => 'width:50%;'),
    				lang('setting')
    			);

	    // Field Name
        $this->table->add_row(array(
                '<strong>'.$notice.form_label(lang('fieldname'), 'm_field_name').'</strong>'.'<br />'.lang('fieldname_cont').form_error('m_field_name'),
				form_input('m_field_name', set_value('m_field_name', $m_field_name), 'class="fullfield"')
            )
        );
        
        // Field Label
        $this->table->add_row(array(
                 '<strong>'.$notice.form_label(lang('fieldlabel'), 'm_field_label').'</strong>'.'<br />'.lang('for_profile_page').form_error('m_field_label'),
				form_input('m_field_label', set_value('m_field_label', $m_field_label), 'class="fullfield"')
            )
        );
        
        // Field Description
        $this->table->add_row(array(
                 '<strong>'.form_label(lang('field_description'), 'm_field_description').'</strong>'.'<br />'.lang('field_description_info'),
				form_input('m_field_description', set_value('m_field_description', $m_field_description), 'class="fullfield" id="m_field_description"')               
            )
        );
        
        // Field Order
        $this->table->add_row(array(
                '<strong>'. form_label(lang('field_order'), 'm_field_order').'</strong>',
				form_input('m_field_order', set_value('m_field_order', $m_field_order), 'class="fullfield" id="m_field_order"')               
            )
        );
        
        // Field Width
        $this->table->add_row(array(
                '<strong>'. form_label(lang('field_width'), 'm_field_width').'</strong>',
				form_input('m_field_width', set_value('m_field_width', $m_field_width), 'style="width:100px" id="m_field_width"')               
            )
        );
        
        //Field Type
        
        // Left Side:
        $left_side = form_label(lang('field_type'), 'm_field_type').'<br />'.
			 form_dropdown('m_field_type', $m_field_type_options, set_value('m_field_type', $m_field_type), "onchange='showhide_element(this.options[this.selectedIndex].value);'");
        
        // Select Block
        $right_side = '<p id="select_block" style="display: '.$select_js.'">'.
                        '<strong>'.form_label(lang('pull_down_items'), 'm_field_list_items').'</strong>'.
                       form_textarea(array(
                           'id'    => 'm_field_list_items',
                           'name'  => 'm_field_list_items',
                           'cols'  => 90,
                           'rows'  => 10,
                           'class' =>'fullfield',
                           'value' => set_value('m_field_list_items', $m_field_list_items))).
                       '</p>';
        
        // Text Block
        $right_side .= '<p id="text_block" style="display: '.$text_js.';">'.
                        '<strong>'. lang('m_max_length', 'm_field_maxl').'</strong>'.
						form_input('m_field_maxl', set_value('m_field_maxl', $m_field_maxl), 'class="field" id="m_field_maxl"').
                        '</p>';
        
        // Textarea Block
        $right_side .= '<p id="textarea_block" style="display: '.$textarea_js.';">'.
                        '<strong>'. lang('text_area_rows', 'm_field_ta_rows').'</strong>'.
                        form_input(array(
                            'id'    => 'm_field_ta_rows',
                            'name'  => 'm_field_ta_rows',
                            'class' => 'field',
                            'value' => set_value('m_field_ta_rows', $m_field_ta_rows))).
                        '</p>';
        
        $this->table->add_row(
        	array('data' => $left_side, 'style' => 'vertical-align:top;'),
        	array('data' => $right_side, 'class' => 'shift')
            
        );

        // Text Formatting
        $this->table->add_row(array(
                 '<strong>'.lang('field_format', 'm_field_fmt').'</strong><br />'.
                lang('text_area_rows_cont'),
				form_dropdown('m_field_fmt', $m_field_fmt_options, set_value('m_field_fmt', $m_field_fmt), 'style="width:150px"')
            )
        );

        // Required Field?
        $this->table->add_row(array(
                 '<strong>'.lang('is_field_required', 'm_field_required').'</strong>',
				form_dropdown('m_field_required', $m_field_required_options, set_value('m_field_required', $m_field_required), 'style="width:100px"')
            )
        );

        // Visible in Public Profiles?
        $this->table->add_row(array(
                 '<strong>'.lang('is_field_public', 'm_field_reg').'</strong><br />'.
                lang('is_field_public_cont'),
				form_dropdown('m_field_public', $m_field_public_options, set_value('m_field_public', $m_field_public), 'style="width:100px"')
             )
        );

        // Visible in Registration Page?
        $this->table->add_row(array(
               '<strong>'. lang('is_field_reg', 'm_field_reg').'</strong><br />'.
               lang('is_field_public_cont'),
				form_dropdown('m_field_reg', $m_field_reg_options, set_value('m_field_reg', $m_field_reg), 'style="width:100px"')
            )
        );
            echo $this->table->generate();
    			?>

    			<p><span class="notice">*</span> <?=lang('required_fields')?></p>

    			<p class="centerSubmit"><?=form_submit('', $submit_label, 'class="submit"')?></p>

    			<?=form_close()?>

			</div> <!-- pageContents -->
		</div> <!-- contents -->
</div> <!-- mainContent -->

<?php
if ($EE_view_disable !== TRUE)
{
	$this->load->view('_shared/accessories');
	$this->load->view('_shared/footer');
}

/* End of file edit_custom_profile_field.php */
/* Location: ./themes/cp_themes/corporate/members/edit_custom_profile_field.php */