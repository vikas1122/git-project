<?php

namespace Drupal\bookLiberary\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

 /**
 * Configure example settings for this site.
 */
 
class BookLiberaryForm extends ConfigFormBase 
{
    const SETTINGS = 'book.settings';


   /** 
    * {@inheritdoc}
    */
   public function getFormId() {
     return 'book';
   }
   /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

   /**
    *{@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state) {
      $config = $this->config(static::SETTINGS);


    $form['title'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Title :'),
        '#default_value' => $config->get('title'),
        '#required'    => true,
        '#prefix'      => '<div class="form-group">',
        '#suffix'      => '</div>',
      ]; 
      $form['description'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Description :'),
        '#default_value' => $config->get('description'),
        '#required'    => false,
        '#prefix'      => '<div class="form-group">',
        '#suffix'      => '</div>',
      ]; 
      $form['authors'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Authors :'),
        '#default_value' => $config->get('authors'),
        '#required'    => true,
        '#prefix'      => '<div class="form-group">',
        '#suffix'      => '</div>',
      ]; 
      $form['price'] = [
        '#type' => 'textfield',
        '#title' => $this->t('price :'),
        '#default_value' => $config->get('tags'),
        '#prefix'      => '<div class="form-group">',
        '#suffix'      => '</div>',
      ]; 

      $form['action'] = [
        '#type' => 'submit',
        '#value' => $this->t('submit :'),
        '#prefix'      => '<div class="form-group">',
        '#suffix'      => '</div>',
      ]; 
  
      return parent::buildForm($form, $form_state);

      
   }
   public function submitForm(array $form,FormStateInterface $form_state)
   {
  //   $values = array(
  //     'title' => $form_state->getValue('title'),
  //     'description' => $form_state->getValue('description'),
  //     'authors' => $form_state->getValue('authors'),
  //     'price' => $form_state->getValue('price'),
  // );
  // $insert = db_insert('book_liberary')
  //   ->fields(array(
  //     'title' => $values['title'],
  //     'description' => $values['description'],
  //     'authors' => $values['authors'],
  //     'price' => $values['price'],			
  // ))
  // ->execute();
  
  drupal_set_message($this->t('fields added successfully'));
      parent::submitForm($form, $form_state);
   }
}



