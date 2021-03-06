<?php
/**
 *    Copyright 2011 Microsoft Corporation
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * @category  Microsoft
 * @package   DealOfTheDay
 * @author    Ben Lobaugh <a-beloba@microsoft.com>
 * @copyright 2011 Copyright Microsoft Corporation. All Rights Reserved
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 **/
require_once 'Microsoft/WindowsAzure/Storage/Table.php';

class Product extends Microsoft_WindowsAzure_Storage_TableEntity {
		
	/**
	 * Constructor
	 * 
	 * @param string $partitionKey
	 * @param string $rowKey
	 */
	public function __construct() {
		parent::__construct('Product', rand(0, time()));
	}
	
	/**
	 * @azure Title
	 * @var String
	 **/
	public $Title;
	
	
	/**
	 * @azure Description
	 * @var String
	 **/
	public $Description;
	
	/**
	 * Filename of image in blob storage
	 * @azure Image
	 * @var String
	 **/
	public $Image;
	
	/**
	 * Number of products available to give away
	 * @azure NumProducts
	 * @var Integer
	 **/
	 public $NumProducts;
         
         /**
          *  Day the product becomes available
          *  @azure StartDate
          *  @var Date
          */
         public $StartDate;
         
         /**
          * Last day product is available
          * @azure EndDate
          * @var Date
          */
         public $EndDate;
         
         /**
          * @azure ValidDays
          */
         public $ValidDays;
	
}