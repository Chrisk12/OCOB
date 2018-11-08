<?php
/**
 *  Copyright 2012 GroupDocs.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class JobInfo {

  static $swaggerTypes = array(
      'id' => 'float',
      'out_formats' => 'array[string]',
      'actions' => 'string',
      'status' => 'string',
      'email_results' => 'bool',
      'priority' => 'float',
      'url_only' => 'bool',
      'documents' => 'JobDocumentsEntry',
      'requested_time' => 'string',
      'scheduled_time' => 'string',
      'guid' => 'string',
      'name' => 'string',
      'callback_url' => 'string',
      'type' => 'string'

    );

  public $id; // float
  public $out_formats; // array[string]
  public $actions; // string
  public $status; // string
  public $email_results; // bool
  public $priority; // float
  public $url_only; // bool
  public $documents; // JobDocumentsEntry
  public $requested_time; // string
  public $scheduled_time; // string
  public $guid; // string
  public $name; // string
  public $callback_url; // string
  public $type; // string
  }

