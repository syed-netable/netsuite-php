<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-04-10 09:56:55 PM UTC
 */

namespace NetSuite\Classes;

class BomSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableForAllAssemblies;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableForAllLocations;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $legacyBomForAssembly;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $restrictToAssemblies;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $restrictToLocations;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $revisionName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiaryNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useComponentYield;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $usedOnAssembly;
    static $paramtypesmap = array(
        "availableForAllAssemblies" => "SearchColumnBooleanField[]",
        "availableForAllLocations" => "SearchColumnBooleanField[]",
        "createdDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "legacyBomForAssembly" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "restrictToAssemblies" => "SearchColumnSelectField[]",
        "restrictToLocations" => "SearchColumnSelectField[]",
        "revisionName" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
        "useComponentYield" => "SearchColumnBooleanField[]",
        "usedOnAssembly" => "SearchColumnBooleanField[]",
    );
}
