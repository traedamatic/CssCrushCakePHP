<?php
/**
 * Csscrush.CsscrushHelper
 *
 * the helper for the CssCrushPlugin
 * 
 * @author Nicolas Traeder <traeder@codebility.com>
 * @package CsscrushPlugin
 * @license MIT
 * @version 0.1
 *
 * 
 */

App::import('Vendor', 'Csscrush.Csscrush/CssCrush');

class CsscrushHelper extends AppHelper {
	
	public $helpers = array('Html');
	
	/**
	 *
	 * create the CssCrushCompiled File
	 *
	 * @author Nicolas Traeder <traeder@codebility.com>
	 * @return string the filename of the create css file
	 *
	 */
	
	public function file($unprocessedCssFile = null,$options = null)  {
		if(!is_null($unprocessedCssFile)) {
			return CssCrush::file($unprocessedCssFile,$options);	
		}		
	}
	
	/**
	 *
	 * analog to the CssCrush:tag functio
	 *
	 * @return string the link tag for the css file
	 * @author Nicolas Traeder <traeder@codebility.com>
	 */
	
	public function tag($unprocessedCssFile = null,$options = null)  {
		if(!is_null($unprocessedCssFile)) {
			return CssCrush::tag($unprocessedCssFile,$options);	
		}
	}
    
}