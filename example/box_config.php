<?

/**
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
* 
* http://www.apache.org/licenses/LICENSE-2.0
* 
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
* See the License for the specific language governing permissions and 
* limitations under the License. 
*/

// Make sure that your callback URL is properly configured.


// Set your API Key.

$api_key = 'kyohzbxf2dp334t5inngrg8slb8bmv9u';
	 
	 
// Configure your auth_token retrieval


$auth_token = '';

require_once 'boxlibphp5.php';




$box =& new boxclient($api_key, $auth_token);


// Get Ticket to Proceed

$ticket_return = $box->getTicket ();

if ($box->isError()) {
echo $box->getErrorMsg();
} else {
	
$ticket = $ticket_return['ticket'];
	 
}
		
	

		
// If no auth_token has been previously stored, user must login.
		
if ($ticket && ($auth_token == '') && ($_REQUEST['auth_token'])) {
	
	
$auth_token = $_REQUEST['auth_token'];





}elseif ($ticket && ($auth_token == '')) {


$box->getAuthToken($ticket);

	
	}else{}
		

$box =& new boxclient($api_key, $auth_token);
	

 ?>
	 
	 