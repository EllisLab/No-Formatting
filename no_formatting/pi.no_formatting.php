<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Copyright (C) 2007 - 2011 EllisLab, Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
ELLISLAB, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Except as contained in this notice, the name of EllisLab, Inc. shall not be
used in advertising or otherwise to promote the sale, use or other dealings
in this Software without prior written authorization from EllisLab, Inc.
*/

$plugin_info = array(
						'pi_name'			=> 'No Formatting',
						'pi_version'		=> '1.1',
						'pi_author'			=> 'Derek Jones',
						'pi_author_url'		=> 'http://expressionengine.com/',
						'pi_description'	=> 'Applies no formatting to text!',
						'pi_usage'			=> No_formatting::usage()
					);

/**
 * No_formatting Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			ExpressionEngine Dev Team
 * @copyright		Copyright (c) 2007 - 2011, EllisLab, Inc.
 * @link			http://expressionengine.com/downloads/details/no_formatting/
 */

class No_formatting {

    var $return_data;

    
	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */

    function No_formatting($str = '')
    {
	    $this->EE =& get_instance();

        $str = ($str == '') ? $this->EE->TMPL->tagdata : $str;
                
 		$this->return_data = $str;
    }
    /* END */

	// --------------------------------------------------------------------
	
	/**
	 * Usage
	 *
	 * Plugin Usage
	 *
	 * @access	public
	 * @return	string
	 */
	function usage()
	{
		
		ob_start(); 
		?>
		This plugin would be very silly to use in a template because
		it simply returns the string unmodified.

		It is more useful when selected as a formatting plugin for
		modules or extensions that allow formatting selections and
		do not include an option for "no formatting"

		But if you insist...

		{exp:no_formatting}

		text you want to do absolutely nothing to

		{/exp:no_formatting}
	
	Version 1.1
	******************
	- Updated plugin to be 2.0 compatible	

		<?php
		$buffer = ob_get_contents();
	
		ob_end_clean(); 

		return $buffer;
	}

	// --------------------------------------------------------------------
	
}
// END CLASS

/* End of file pi.no_formatting.php */
/* Location: ./system/expressionengine/third_party/no_formatting/pi.no_formatting.php */