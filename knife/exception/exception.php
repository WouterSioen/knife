<?php
/**
 * This source file is a part of Fork CMS.
 * More information can be found on http://www.fork-cms.com
 *
 * @package		knife
 * @subpackage	exception
 *
 * @author		Jelmer Snoeck <jelmer.snoeck@netlash.com>
 * @since		0.1
 */

// Redefine the exception handler if we are not running in the command line.
set_exception_handler('knifeExceptionHandler');

/**
 * Prints out the thrown exception in a more readable manner for a person using
 * a web browser.
 *
 * @param	KnifeException $exception
 */
function knifeExceptionHandler(Exception $exception)
{
	// fetch trace stack
	$trace = $exception->getTrace();

	// specific name
	$name = (is_callable(array($exception, 'getName'))) ? $exception->getName() : get_class($exception);

	/*
	 * Print the exception in a readable way
	 */
	echo "---------------------------------------EXCEPTION---------------------------------------\n";
	echo $exception->getMessage();
	echo "\n";
	echo "---------------------------------------EXCEPTION---------------------------------------\n";

	// stop the script
	exit;
}
