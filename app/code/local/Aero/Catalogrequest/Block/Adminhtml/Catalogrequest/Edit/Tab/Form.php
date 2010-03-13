<?php

class Aero_Catalogrequest_Block_Adminhtml_Catalogrequest_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('catalogrequest_form', array('legend'=>Mage::helper('catalogrequest')->__('Item information')));
     
      $fieldset->addField('fname', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('First Name'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'fname',
      ));

      $fieldset->addField('lname', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('Last Name'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'lname',
      ));

      $fieldset->addField('address1', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('Address'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'address1',
      ));

      $fieldset->addField('address2', 'text', array(
          'name'      => 'address2',
      ));

      $fieldset->addField('city', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('City'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'city',
      ));

      $fieldset->addField('state', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('State'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'state',
      ));

      $fieldset->addField('zip', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('Zip'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'zip',
      ));

      $fieldset->addField('country', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('Country'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'country',
      ));

      $fieldset->addField('phone', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('Phone'),
          'name'      => 'phone',
      ));

      $fieldset->addField('email', 'text', array(
          'label'     => Mage::helper('catalogrequest')->__('Email'),
          'name'      => 'email',
      ));


		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('catalogrequest')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('catalogrequest')->__('Pending'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('catalogrequest')->__('Processed'),
              ),
          ),
      ));



     
      if ( Mage::getSingleton('adminhtml/session')->getCatalogrequestData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getCatalogrequestData());
          Mage::getSingleton('adminhtml/session')->setCatalogrequestData(null);
      } elseif ( Mage::registry('catalogrequest_data') ) {
          $form->setValues(Mage::registry('catalogrequest_data')->getData());
      }
      return parent::_prepareForm();
  }
}