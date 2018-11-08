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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class StorageApi {

	private $basePath = "https://api.groupdocs.com/v2.0";

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

	public static function newInstance($apiClient) {
	  return new self($apiClient);
	}

    public function setBasePath($basePath) {
	  $this->basePath = $basePath;
	}
	  
	public function getBasePath() {
	  $this->basePath;
	}

  /**
	 * CancelFileUpload
	 * Cancel file upload
   * userId, string: User GUID (optional)
   * fileId, string: file Id (optional)
   * filePath, string: File path (optional)
   * @return CancelFileUploadResponse
	 */

   public function CancelFileUpload($userId=null, $fileId=null, $filePath=null) {
      if( $userId === null || $fileId === null || $filePath === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/cancelUpload/{fileId}/{filePath}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId !== null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		if($filePath !== null) {
  			$resourcePath = str_replace("{" . "filePath" . "}",
  			                            $filePath, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'CancelFileUploadResponse');
  	  return $responseObject;
      }
  /**
	 * GetStorageInfo
	 * Get storage info
   * userId, string: User GUID (required)
   * @return StorageInfoResponse
	 */

   public function GetStorageInfo($userId) {
      if( $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'StorageInfoResponse');
  	  return $responseObject;
      }
  /**
	 * ListEntities
	 * List entities
   * userId, string: User GUID (required)
   * path, string: Path (optional)
   * pageIndex, int: Page Index (optional)
   * pageSize, int: Page Size (optional)
   * orderBy, string: Order By (optional)
   * orderAsc, bool: Order Asc (optional)
   * filter, string: Filter (optional)
   * fileTypes, string: File Types (optional)
   * extended, bool: Indicates whether an extended information should be returned (optional)
   * @return ListEntitiesResponse
	 */

   public function ListEntities($userId, $path=null, $pageIndex=null, $pageSize=null, $orderBy=null, $orderAsc=null, $filter=null, $fileTypes=null, $extended=null) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}?page={pageIndex}&count={pageSize}&order_by={orderBy}&order_asc={orderAsc}&filter={filter}&file_types={fileTypes}&extended={extended}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($pageIndex !== null) {
  		  $queryParams['page'] = $this->apiClient->toPathValue($pageIndex);
  		}
  		if($pageSize !== null) {
  		  $queryParams['count'] = $this->apiClient->toPathValue($pageSize);
  		}
  		if($orderBy !== null) {
  		  $queryParams['order_by'] = $this->apiClient->toPathValue($orderBy);
  		}
  		if($orderAsc !== null) {
  		  $queryParams['order_asc'] = $this->apiClient->toPathValue($orderAsc);
  		}
  		if($filter !== null) {
  		  $queryParams['filter'] = $this->apiClient->toPathValue($filter);
  		}
  		if($fileTypes !== null) {
  		  $queryParams['file_types'] = $this->apiClient->toPathValue($fileTypes);
  		}
  		if($extended !== null) {
  		  $queryParams['extended'] = $this->apiClient->toPathValue($extended);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'ListEntitiesResponse');
  	  return $responseObject;
      }
  /**
	 * GetFile
	 * Get file
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return stream
	 */

   public function GetFile($userId, $fileId, FileStream $outFileStream) {
      if( $userId === null || $fileId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/files/{fileId}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId !== null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      return $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams, $outFileStream);
      }
  /**
	 * GetSharedFile
	 * Get shared file
   * userEmail, string: User Email (required)
   * filePath, string: File path (required)
   * @return stream
	 */

   public function GetSharedFile($userEmail, $filePath, FileStream $outFileStream) {
      if( $userEmail === null || $filePath === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/shared/{userEmail}/{*filePath}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userEmail !== null) {
  			$resourcePath = str_replace("{" . "userEmail" . "}",
  			                            $userEmail, $resourcePath);
  		}
  		if($filePath !== null) {
  			$resourcePath = str_replace("{" . "filePath" . "}",
  			                            $filePath, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      return $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams, $outFileStream);
      }
  /**
	 * Upload
	 * Upload
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * description, string: Description (optional)
   * callbackUrl, string: Callback url (optional)
   * overrideMode, int: Override mode (optional)
   * body, stream: Stream (required)
   * @return UploadResponse
	 */

   public function Upload($userId, $path, $description=null, $callbackUrl=null, $overrideMode=null, $body) {
      if( $userId === null || $path === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}?description={description}&callbackUrl={callbackUrl}&overrideMode={overrideMode}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($description !== null) {
  		  $queryParams['description'] = $this->apiClient->toPathValue($description);
  		}
  		if($callbackUrl !== null) {
  		  $queryParams['callbackUrl'] = $this->apiClient->toPathValue($callbackUrl);
  		}
  		if($overrideMode !== null) {
  		  $queryParams['overrideMode'] = $this->apiClient->toPathValue($overrideMode);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'UploadResponse');
  	  return $responseObject;
      }
  /**
	 * Decompress
	 * UploadAndUnzip
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * description, string: Description (optional)
   * archiveType, string: Archive type (optional)
   * body, stream: Stream (required)
   * @return UploadResponse
	 */

   public function Decompress($userId, $path, $description=null, $archiveType=null, $body) {
      if( $userId === null || $path === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/decompress/{*path}?description={description}&archiveType={archiveType}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($description !== null) {
  		  $queryParams['description'] = $this->apiClient->toPathValue($description);
  		}
  		if($archiveType !== null) {
  		  $queryParams['archiveType'] = $this->apiClient->toPathValue($archiveType);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'UploadResponse');
  	  return $responseObject;
      }
  /**
	 * UploadWeb
	 * Upload Web
   * userId, string: User GUID (required)
   * url, string: Url (required)
   * @return UploadResponse
	 */

   public function UploadWeb($userId, $url) {
      if( $userId === null || $url === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/urls?url={url}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($url !== null) {
  		  $queryParams['url'] = $this->apiClient->toPathValue($url);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'UploadResponse');
  	  return $responseObject;
      }
  /**
	 * UploadGoogle
	 * Upload Google
   * userId, string: User GUID (required)
   * path, string: File path (required)
   * fileId, string: File unique identifier (optional)
   * @return UploadResponse
	 */

   public function UploadGoogle($userId, $path, $fileId=null) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/google/files/{*path}?file_id={fileId}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($fileId !== null) {
  		  $queryParams['file_id'] = $this->apiClient->toPathValue($fileId);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'UploadResponse');
  	  return $responseObject;
      }
  /**
	 * Delete
	 * Delete
   * userId, string: User GUID (required)
   * fileId, string: File ID (required)
   * @return DeleteResponse
	 */

   public function Delete($userId, $fileId) {
      if( $userId === null || $fileId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/files/{fileId}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId !== null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  	  return $responseObject;
      }
  /**
	 * DeleteFromFolder
	 * Delete from folder
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return DeleteResponse
	 */

   public function DeleteFromFolder($userId, $path) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  	  return $responseObject;
      }
  /**
	 * MoveFile
	 * Move file
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * mode, string: Mode (optional)
   * Groupdocs_Move, string: File ID (move) (optional)
   * Groupdocs_Copy, string: File ID (copy) (optional)
   * @return FileMoveResponse
	 */

   public function MoveFile($userId, $path, $mode=null, $Groupdocs_Move=null, $Groupdocs_Copy=null) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/files/{*path}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($mode !== null) {
  		  $queryParams['mode'] = $this->apiClient->toPathValue($mode);
  		}
  		if($Groupdocs_Move !== null) {
  		 	$headerParams['Groupdocs-Move'] = $this->apiClient->toPathValue($Groupdocs_Move);
  		}
      if($Groupdocs_Copy !== null) {
  		 	$headerParams['Groupdocs-Copy'] = $this->apiClient->toPathValue($Groupdocs_Copy);
  		}
      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'FileMoveResponse');
  	  return $responseObject;
      }
  /**
	 * MoveFolder
	 * Move folder
   * userId, string: User GUID (required)
   * path, string: Destination Path (required)
   * mode, string: Mode (optional)
   * Groupdocs_Move, string: Source path (move) (optional)
   * Groupdocs_Copy, string: Source path (copy) (optional)
   * @return FolderMoveResponse
	 */

   public function MoveFolder($userId, $path, $mode=null, $Groupdocs_Move=null, $Groupdocs_Copy=null) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}?override_mode={mode}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($mode !== null) {
  		  $queryParams['override_mode'] = $this->apiClient->toPathValue($mode);
  		}
  		if($Groupdocs_Move !== null) {
  		 	$headerParams['Groupdocs-Move'] = $this->apiClient->toPathValue($Groupdocs_Move);
  		}
      if($Groupdocs_Copy !== null) {
  		 	$headerParams['Groupdocs-Copy'] = $this->apiClient->toPathValue($Groupdocs_Copy);
  		}
      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'FolderMoveResponse');
  	  return $responseObject;
      }
  /**
	 * Create
	 * Create
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return CreateFolderResponse
	 */

   public function Create($userId, $path) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/paths/{*path}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'CreateFolderResponse');
  	  return $responseObject;
      }
  /**
	 * Compress
	 * Compress
   * userId, string: User GUID (required)
   * fileId, string: File ID (required)
   * archiveType, string: Archive type (optional)
   * @return CompressResponse
	 */

   public function Compress($userId, $fileId, $archiveType=null) {
      if( $userId === null || $fileId === null || $archiveType === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/files/{fileId}/archive/{archiveType}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId !== null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		if($archiveType !== null) {
  			$resourcePath = str_replace("{" . "archiveType" . "}",
  			                            $archiveType, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'CompressResponse');
  	  return $responseObject;
      }
  /**
	 * CreatePackage
	 * Create Package
   * userId, string: User GUID (required)
   * packageName, string: Package Name (required)
   * storeRelativePath, bool: Store files using relative paths (optional)
   * body, List[string]: Paths (optional)
   * @return CreatePackageResponse
	 */

   public function CreatePackage($userId, $packageName, $storeRelativePath=null, $body=null) {
      if( $userId === null || $packageName === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/packages/{packageName}?storeRelativePath={storeRelativePath}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($storeRelativePath !== null) {
  		  $queryParams['storeRelativePath'] = $this->apiClient->toPathValue($storeRelativePath);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($packageName !== null) {
  			$resourcePath = str_replace("{" . "packageName" . "}",
  			                            $packageName, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'CreatePackageResponse');
  	  return $responseObject;
      }
  /**
	 * MoveToTrash
	 * Move to trash
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return DeleteResponse
	 */

   public function MoveToTrash($userId, $path) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/trash/{*path}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  	  return $responseObject;
      }
  /**
	 * RestoreFromTrash
	 * Restore from trash
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return DeleteResponse
	 */

   public function RestoreFromTrash($userId, $path) {
      if( $userId === null || $path === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/storage/{userId}/trash/{*path}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path !== null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  	  return $responseObject;
      }
  
}

