<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
$languageStrings = array(
<<<<<<< HEAD
	'LayoutEditor' 				   => 'Editor di layout'            ,
	'LBL_FIELDS_AND_LAYOUT_EDITOR' => 'Editor di campi e layout'    ,
	'LBL_CREATE_CUSTOM_FIELD'      => 'Crea campo personalizzato'   ,
	'LBL_DETAILVIEW_LAYOUT'        => 'Layout vista dettagli'       ,
	'LBL_ARRANGE_RELATED_TABS'     => 'Riorganizza liste collegate' ,
	'LBL_ADD_CUSTOM_FIELD'         => 'Aggiungi campo'              ,
	'LBL_ADD_CUSTOM_BLOCK'         => 'Aggiungi blocco'             ,
	'LBL_SAVE_FIELD_SEQUENCE'      => 'Salva ordinamento'           ,
	'LBL_BLOCK_NAME'               => 'Nome blocco'                 ,
	'LBL_ADD_AFTER'                => 'Aggiungi dopo'               ,
	'LBL_ACTIONS'                  => 'Azioni'                      ,
	'LBL_ALWAYS_SHOW'              => 'Mostra sempre'               ,
	'LBL_INACTIVE_FIELDS'          => 'Campo non attivo'            ,
	'LBL_DELETE_CUSTOM_BLOCK'      => 'Cancella blocco'             ,
	'LBL_MANDATORY_FIELD'          => 'Campo obbligatorio'          ,
	'LBL_ACTIVE'                   => 'Attivo'                      , 
	'LBL_QUICK_CREATE'             => 'Creazione veloce'            ,
	'LBL_SUMMARY_FIELD'            => 'Vista riepilogo'             ,
	'LBL_MASS_EDIT'                => 'Modifica multipla'           ,
	'LBL_DEFAULT_VALUE'            => 'Valore predefinito'          ,
	'LBL_SELECT_FIELD_TYPE'        => 'Seleziona tipo di campo'     ,
	'LBL_LABEL_NAME'               => 'Etichetta campo'             ,
	'LBL_LENGTH'                   => 'Lunghezza'                   ,
	'LBL_DECIMALS'                 => 'Decimali'                    , 
	'LBL_ENTER_PICKLIST_VALUES'    => 'Inserisci i valori...'       , 
	'LBL_PICKLIST_VALUES'          => 'Valori picklist'             ,
	'LBL_REACTIVATE'               => 'Riattivare'                  ,
	'LBL_ARRANGE_RELATED_LIST'     => 'Riordina liste collegate'    ,
	'LBL_SELECT_MODULE_TO_ADD'     => 'Selezione il modulo per aggiungere ' ,
	'LBL_NO_RELATED_INFORMATION'   => 'Nessuna informazoine collegata' ,
	'LBL_RELATED_LIST_INFO'        => 'Trascina i moduli per riordinare la lista', 
	'LBL_REMOVE_INFO'              => 'Clicca sull\'icona per rimuovere il modulo dalla lista' ,
	'LBL_ADD_MODULE_INFO'          => 'Seleziona il modulo dalla lista per riabilitarlo' ,
	'LBL_SELECT_MODULE'            => 'Seleziona il modulo..'       , 
	'LBL_DUPLICATES_EXIST'         => 'Il nome blocco esiste già'   ,
	'LBL_NON_ROLE_BASED_PICKLIST'  => 'Picklist non basata sui ruoli' ,
	'LBL_DUPLICATE_FIELD_EXISTS'   => 'Campo esistente'             ,
	'LBL_WRONG_FIELD_TYPE'         => 'Tipo campo sbagliato'        ,
	'LBL_ROLE_BASED_PICKLIST'      => 'Picklist basata sui ruoli'   ,
	'LBL_CLICK_HERE_TO_EDIT' 	   => 'Click here to edit'          ,
	//Field Types
	'Text'							=>'Testo',
	'Decimal'						=>'Decimale',
	'Integer'						=>'Intero',
	'Percent'						=>'Percentuale',
	'Currency'						=>'Valuta',
	'Date'							=>'Data',
	'Email'							=>'Email',
	'Phone'							=>'Telefono',
	'PickList'						=>'Pick List',
	'MultiSelectCombo'				=>'Multi-Select Combo Box',
	'URL' 							=> 'URL',
	'Checkbox' 						=> 'Checkbox',
	'TextArea' 						=> 'Area di testo',
	'Skype'							=>'Skype',
	'Time'							=>'Tempo',
);
$jsLanguageStrings = array(
	'JS_BLOCK_VISIBILITY_SHOW'     => 'Mostra blocchi abilitato'    , 
	'JS_BLOCK_VISIBILITY_HIDE'     => 'Mostra blocchi nascosto'     , 
	'JS_CUSTOM_BLOCK_ADDED'        => 'Nuovo blocco aggiunto'       ,
	'JS_BLOCK_SEQUENCE_UPDATED'    => 'Sequenza blocchi aggiornata' ,
	'JS_SELECTED_FIELDS_REACTIVATED' => 'Campi selezionati riattivati' ,
	'JS_FIELD_DETAILS_SAVED'       => 'Dettagli del campo salvati'  , 
	'JS_CUSTOM_BLOCK_DELETED'      => 'Blocco eliminato'            ,
	'JS_CUSTOM_FIELD_ADDED'        => 'nuovo campo aggiunto'        ,
	'JS_CUSTOM_FIELD_DELETED'      => 'Campo eliminato'             ,
	'JS_LENGTH_SHOULD_BE_LESS_THAN_EQUAL_TO' => 'La lunghezza deve essere minore o uguale a',
	'JS_PLEASE_ENTER_NUMBER_IN_RANGE_2TO5' => 'I decimali devnoo essere compresi tra 2 e 5',
	'JS_SAVE_THE_CHANGES_TO_UPDATE_FIELD_SEQUENCE' => 'Salva per aggiornare l\'ordinamento dei campi',
	'JS_RELATED_INFO_SAVED'        => 'Informazioni salvate'        , 
	'JS_BLOCK_NAME_EXISTS'         => 'Blocco già esistenze'        , 
	'JS_NO_HIDDEN_FIELDS_EXISTS'   => 'Nessun campo nascosto'       , 
	'JS_SPECIAL_CHARACTERS'        => 'Caratteri speciali come'     , 
	'JS_NOT_ALLOWED'               => 'non sono permessi'           , 
	'JS_FIELD_SEQUENCE_UPDATED'    => 'Sequenza campo aggiornata'		,
	'JS_DUPLICATES_VALUES_FOUND'   => 'Trovati valori duplicati'      ,
);
=======
	'LayoutEditor' => 'Layout Editor',
	'LBL_FIELDS_AND_LAYOUT_EDITOR' => 'Fields and Layout Editor'    , // TODO: Review
	'LBL_CREATE_CUSTOM_FIELD'      => 'Create Custom Field'         , // TODO: Review
	'LBL_DETAILVIEW_LAYOUT'        => 'Detail View Layout'          , // TODO: Review
	'LBL_ARRANGE_RELATED_TABS'     => 'Arrange Related Tabs'        , // TODO: Review
	'LBL_ADD_CUSTOM_FIELD'         => 'Add Custom Field'            , // TODO: Review
	'LBL_ADD_CUSTOM_BLOCK'         => 'Add Custom Block'            , // TODO: Review
	'LBL_SAVE_FIELD_SEQUENCE'      => 'Save Field Sequence'         , // TODO: Review
	'LBL_BLOCK_NAME'               => 'Block Name'                  , // TODO: Review
	'LBL_ADD_AFTER'                => 'Add After'                   , // TODO: Review
	'LBL_ACTIONS'                  => 'Actions'                     , // TODO: Review
	'LBL_ALWAYS_SHOW'              => 'Always Show'                 , // TODO: Review
	'LBL_INACTIVE_FIELDS'          => 'Inactive Fields'             , // TODO: Review
	'LBL_DELETE_CUSTOM_BLOCK'      => 'Delete Custom Block'         , // TODO: Review
	'LBL_MANDATORY_FIELD'          => 'Mandatory Field'             , // TODO: Review
	'LBL_ACTIVE'                   => 'Active'                      , // TODO: Review
	'LBL_QUICK_CREATE'             => 'Quick Create'                , // TODO: Review
	'LBL_SUMMARY_FIELD'            => 'Summary View'                , // TODO: Review
	'LBL_MASS_EDIT'                => 'Mass Edit'                   , // TODO: Review
	'LBL_DEFAULT_VALUE'            => 'Default Value'               , // TODO: Review
	'LBL_SELECT_FIELD_TYPE'        => 'Select Field Type'           , // TODO: Review
	'LBL_LABEL_NAME'               => 'Label Name'                  , // TODO: Review
	'LBL_LENGTH'                   => 'Length'                      , // TODO: Review
	'LBL_DECIMALS'                 => 'Decimals'                    , // TODO: Review
	'LBL_ENTER_PICKLIST_VALUES'    => 'Enter Picklist Values..'     , // TODO: Review
	'LBL_PICKLIST_VALUES'          => 'Picklist Values'             , // TODO: Review
	'LBL_REACTIVATE'               => 'Reactivate'                  , // TODO: Review
	'LBL_ARRANGE_RELATED_LIST'     => 'Arrange Related List'        , // TODO: Review
	'LBL_SELECT_MODULE_TO_ADD'     => 'Select Module To Add'        , // TODO: Review
	'LBL_NO_RELATED_INFORMATION'   => 'No Related Information'      , // TODO: Review
	'LBL_RELATED_LIST_INFO'        => 'Drag and drop the module to reorder the list', // TODO: Review
	'LBL_REMOVE_INFO'              => 'Click on the close icon to remove the module from the list', // TODO: Review
	'LBL_ADD_MODULE_INFO'          => 'Select the module from the removed modules to add back to list', // TODO: Review
	'LBL_SELECT_MODULE'            => 'Select Module..'             , // TODO: Review
	'LBL_DUPLICATES_EXIST'         => 'Block Name already exists'   , // TODO: Review
	'LBL_NON_ROLE_BASED_PICKLIST'  => 'Non Role Based Picklist'     , // TODO: Review
	'LBL_DUPLICATE_FIELD_EXISTS'   => 'Duplicate Field Exists'      , // TODO: Review
	'LBL_WRONG_FIELD_TYPE'         => 'Wrong Field Type'            , // TODO: Review
	'LBL_ROLE_BASED_PICKLIST'      => 'Role Based Picklist'         , // TODO: Review
	'LBL_CLICK_HERE_TO_EDIT' => 'Click here to edit',

	//Field Types
	'Text'=>'Text',
	'Decimal'=>'Decimal',
	'Integer'=>'Integer',
	'Percent'=>'Percent',
	'Currency'=>'Currency',
	'Date'=>'Date',
	'Email'=>'Email',
	'Phone'=>'Phone',
	'PickList'=>'Pick List',
	'MultiSelectCombo'=>'Multi-Select Combo Box',
	'URL' => 'URL',
	'Checkbox' => 'Checkbox',
	'TextArea' => 'Text Area',
	'Skype'=>'Skype',
	'Time'=>'Time',
);
$jsLanguageStrings = array(
	'JS_BLOCK_VISIBILITY_SHOW'     => 'Block show enabled'          , // TODO: Review
	'JS_BLOCK_VISIBILITY_HIDE'     => 'Block hide enabled'          , // TODO: Review
	'JS_CUSTOM_BLOCK_ADDED'        => 'New Custom Block added'      , // TODO: Review
	'JS_BLOCK_SEQUENCE_UPDATED'    => 'Blocks Sequence Updated'     , // TODO: Review
	'JS_SELECTED_FIELDS_REACTIVATED' => 'Selected Fields Reactivated' , // TODO: Review
	'JS_FIELD_DETAILS_SAVED'       => 'Field Details Saved'         , // TODO: Review
	'JS_CUSTOM_BLOCK_DELETED'      => 'Custom Block Deleted'        , // TODO: Review
	'JS_CUSTOM_FIELD_ADDED'        => 'New Custom Field Added'      , // TODO: Review
	'JS_CUSTOM_FIELD_DELETED'      => 'Custom Field Deleted'        , // TODO: Review
	'JS_LENGTH_SHOULD_BE_LESS_THAN_EQUAL_TO' => 'Length Should be less than or equal to', // TODO: Review
	'JS_PLEASE_ENTER_NUMBER_IN_RANGE_2TO5' => 'Decimal should be in the range 2 to 5', // TODO: Review
	'JS_SAVE_THE_CHANGES_TO_UPDATE_FIELD_SEQUENCE' => 'Save the changes to update Field sequence', // TODO: Review
	'JS_RELATED_INFO_SAVED'        => 'Related Info Saved'          , // TODO: Review
	'JS_BLOCK_NAME_EXISTS'         => 'Block Name already exists'   , // TODO: Review
	'JS_NO_HIDDEN_FIELDS_EXISTS'   => 'No Inactive Fields'          , // TODO: Review
	'JS_SPECIAL_CHARACTERS'        => 'Special Characters like'     , // TODO: Review
	'JS_NOT_ALLOWED'               => 'are not allowed'             , // TODO: Review
	'JS_FIELD_SEQUENCE_UPDATED' => 'Field Sequence Updated',
	'JS_DUPLICATES_VALUES_FOUND' => 'Duplicate Values found'
);
>>>>>>> fee05a59c15c33339f53892cfaabf02881bd9989
