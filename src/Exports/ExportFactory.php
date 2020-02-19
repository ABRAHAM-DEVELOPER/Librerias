<?php

namespace CtDesarrollo\Export\Exports;

use CtDesarrollo\Export\Exports\ExportXML;

class ExportFactory {

	/**
     * Method to retun a Export class
     *
     * @param string $type
	 * 
     *
     * @return Class
     */
    public static function Create($type) {

		if ($type=="xml") {

			return new ExportXML();

		}else {

			return null;
		}

	}

}