
<?php
  session_start();

  $email=$_SESSION['email'];
  $token=$_SESSION['token'];
  $url="confirm.php?email=$email&token=$token";

?>
<!DOCTYPE html>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="shortcut icon" type="image/png" href="logos/favicon-16x16.png"/>
  <title>UNICLAIR - EULA</title>
</head>

<body>
    
  <div id="bannera">
  <div id="languagesdiv">
  	Language:
  	<select id="selectlanguage">
  	<!-- English [US] --><option value="?redirect=soft" selected="selected">English (en)</option>
	</select>
  </div>

  <div id="bannerleft">
  	<a title="Uniclair" href="#">
  		<img id="Uniclair-logo avoid-clicks" src="logos/organization_logo.png"/>
  	</a>
  </div>
    
    <div id="bannercenter"><br/>Unified Platform For Software Engineering</div>
    <div id="bordera-bottom">
  </div>
</div>
<br>
  <div id="announce"><a title="Uniclair-EULA">UNICLAIR - End User License Agreement</a></div>

  <div id="clear"></div>
  
  <div id="content">
<p><strong>END USER LICENSE AGREEMENT</strong></p><br>
<p>	
BY DOWNLOADING, INSTALLING, AND/OR USING THE SOFTWARE PRODUCT NAMED AS 'UNICLAIR', YOU AS THE USER AGREE TO BE BOUND BY THE TERMS OF THIS END USER LICENSE AGREEMENT ( HEREAFTER 'EULA' / 'AGREEMENT' ) WITHOUT ANY EXPRESS SIGNATURE REQUIRED. YOU ACKNOWLEDGE THAT THE CONTENTS OF THIS EULA SHALL BE A LEGALLY BINDING CONTRACT BETWEEN YOU AND THE COMPANY ( DEFINED BELOW ).
IF YOU DO NOT AGREE TO THE TERMS OF THIS AGREEMENT, YOU MUST NOT DOWNLOAD, INSTALL, OR USE UNICLAIR, AND YOU MUST DELETE THE UNUSED SOFTWARE FROM ANY AND ALL SYSTEMS AND DEVICES.</p>
<p>
This Agreement is hereby entered into and agreed upon by You (the User), and the Company, having name IVTREE IT Solutions Private Limited, with its registered office at A32, Aspen, Tata Sherwood, Basavanagar Main Road, Bangalore 560037, India.
<br>
WHEREAS, the Company is in the business of providing IT solutions including software development, web-related services, e-commerce, internet products and IT consultancy and has developed a software product by name UNICLAIR ('Software Product') consisting of a compilation of different open-source software tools, including Tuleap, Testlink, Jenkins, Grafana, CentOS, Maven, SonarQube, Gerrit, Stackstorm, Mattermost, Nginx and Mediawiki ('Tools'), and the User is desirous of utilising the same, on the terms and conditions set out herein below: 
</p>

<p><strong>1. DEFINITIONS AND LICENSE TERMS.</strong>
</p>
	<p style="margin-left: 15px;">
		1.1 Apache means the Apache License 2.0, which is a permissive free software license that allows the user of the software the freedom to use the software for any purpose, to distribute it, to modify it, and to distribute modified versions of the software, under the terms of the license, without concern for royalties.
	Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS"BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
	</p>
	
	<p style="margin-left: 15px;">
	1.2 Computer means hardware, if hardware is that of a single computer system, whether physical or virtual, or means the computer system with which the hardware operates, if the hardware is a computer system component.</p>
	
	<p style="margin-left: 15px;">1.3 Documentation means the user documentation provided by the Company to the User pertaining to the use of the Software. This excludes any installation guide or end user documentation that is provided to the User, but that is not prepared or provided by the Company.</p>

	<p style="margin-left: 15px;">1.4 GNU GPL v1.0 means the GNU GPL Version 1.0, which has provided that distribution can take place as long as the human-readable source code is available under the same licensing terms.</p>

	<p style="margin-left: 15px;">1.5 GNU GPL v2.0 means the GNU General Public License version 2.0, which is an open-source license wherein the source code can be modified, and where the modified source code is made available to the Users.</p>

	<p style="margin-left: 15px;">1.6 LGPL means the GNU Lesser GPL License Version 3 wherein the source code can be modified and used for commercial purposes, but wherein the source code to any extensions of the software made do not have to be opened up.</p>

	<p style="margin-left: 15px;">1.7 MIT License means a permissive free software license where the source code can be changed, and can be distributed commercially. All reuse shall be accompanied by the MIT License Terms, and the copyright notice as follows: </p>
	<p style="margin-left: 15px;">
	"Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
	<p style="margin-left: 15px;">
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE."</p>

<p><strong>2. GRANT OF LICENSE.</strong></p> 
<p style="margin-left: 15px;">2.1 Upon payment of the applicable fees for the Software and continuous compliance with the terms and conditions of this Agreement, the Company hereby grants You a license to use the source code of the Software and Documentation subject to the terms contained herein: </p>
<p style="margin-left: 30px;">2.1.1 For each of the Tools in the Software Product, You shall comply with the terms of the applicable license of the Tool as mentioned in the Tool, and you shall indemnify the Company from any and all consequences of non-compliance with any of the license terms mentioned in this Agreement and in respect of any Tool.</p>
<p style="margin-left: 30px;">2.1.2 You may: <ol type="i"><li style="margin-left: 45px;">use the Software on any single Computer, unless the Documentation clearly indicates otherwise; and </li><li style="margin-left: 45px;"> copy the Software for back-up and archival purposes, provided any copy complies with all the license terms applicable to the Tools in the Software Product.</li></ol></p> 

<p style="margin-left: 30px;">2.1.3 For any Tool governed by proprietary software, You shall not be authorised to view the source code, copy, attempt to modify or distribute the said Tool on a standalone basis or as part of the Software Product, or a modified Product as may be developed by you, without express permission from the owner of the said proprietary software.</p>

<p style="margin-left: 15px;">2.2 Notwithstanding any other provision contained herein, Software Product is provided to You "AS IS" without indemnification, support, or warranty of any kind, explicit or implied. </p>

<p><strong>3. LICENSE RESTRICTIONS.</strong></p>
<p style="margin-left: 15px;">The Software Product consists of several Tools, as mentioned herein and the restrictions on usage of source code, copying, modification, distribution and use of the components of the Software Product shall be governed by the individual license terms as defined hereinabove. The Tools are governed by licenses as follows:</p>
<p style="margin-left: 30px;">3.1 TULEAP - Governed by <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0-standalone.html">GNU GPL v.2.0</a></p>
<p style="margin-left: 30px;">3.2 Testlink - Governed by <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0-standalone.html">GNU GPL v.2.0</a></p>
<p style="margin-left: 30px;">3.3 Jenkins - Governed by <a href="https://jenkins.io/license/">MIT License</a></p>
<p style="margin-left: 30px;">3.4 Grafana - Governed by <a href="https://github.com/grafana/grafana/blob/master/LICENSE.md">Apache</a></p>
<p style="margin-left: 30px;">3.5 CentOS - Governed by <a href="https://www.gnu.org/licenses/old-licenses/gpl-1.0-standalone.html">GNU GPL v1.0</a></p>
<p style="margin-left: 30px;">3.6 Maven - Governed by <a href="http://maven.apache.org/ref/3.0/license.html">Apache</a></p>
<p style="margin-left: 30px;">3.7 SonarQube - Governed by <a href="https://www.sonarqube.org/downloads/license/">LGPL</a></p>
<p style="margin-left: 30px;">3.8 Gerrit - Governed by <a href="https://github.com/brigade/gerrit/blob/master/LICENSE.md">Apache</a></p>
<p style="margin-left: 30px;">3.9 Slackstorm - Governed by <a href="https://github.com/StackStorm/st2/blob/master/LICENSE">Apache</a></p>
<p style="margin-left: 30px;">3.10 Mattermost - Governed by <a href="https://www.mattermost.org/licensing/">Apache v.2.0</a></p>
<p style="margin-left: 30px;">3.11 Nginx - Governed by <a href="http://nginx.org/LICENSE">FreeBSD</a></p>
<p style="margin-left: 30px;">3.12 Mediawiki - Governed by <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0-standalone.html">GNU GPL v.2.0</a></p>

<p><strong> 4. COMPLIANCE WITH LAWS.</strong></p> 
<p style="margin-left: 15px;">You agree that You shall use the Software Product solely in a manner that complies with all applicable laws in the jurisdictions in which You use the Software Product, 
including, but not limited to, any applicable restrictions concerning copyright and other intellectual property rights, and in respect of any and all legal or illegal purposes of use of software.</p>

<p><strong>5. RIGHTS RESERVED AND LICENSING VERSUS SALE.</strong></p> 
<p style="margin-left: 15px;">5.1 This Agreement does not grant You any rights, title, or interest in the Software, trademarks, trade secrets, or any intellectual property (including without limitation any images, photographs, animations, video, audio, music, and text incorporated into the Software Product, or any accompanying printed materials) of the Company, and all rights, title, and interest in the Software Product, and corresponding intellectual property shall remain the property of the Company, or is publicly available and therefore not open for claim by You.</p>
<p style="margin-left: 15px;">5.2 All results, data and information (including without limitation, computer software, computer database, software libraries, computer software documentation, specifications, design drawings, reports, etc.) generated by the Software Product from Your proprietary data and information shall be and remain Your sole property.</p>
<p style="margin-left: 15px;">5.3 All rights not expressly granted under this Agreement are reserved by the Company, or third parties who may hold all title, rights, and interest in and to content, which may be accessed through the Software Product.</p>
<p style="margin-left: 15px;">5.4 Except as expressly stated in this Agreement, the Company is providing and licensing the software to You "as is" without warranty of any kind, either explicit or implied, including, but not limited to, the implied warranties of merchantability, title, non-infringement, and fitness for a particular purpose.</p>

<p><strong>6. INTELLECTUAL PROPERTY INDEMNIFICATION.</strong></p> 
<p style="margin-left: 15px;">You will indemnify and hold the Company harmless from any third party claim brought against the Company claiming that the Software Product infringes or misappropriates patent, copyright, trademark, trade secret, or other intellectual property rights of a third party due to modifications or usage by You, or due to any breach of this Agreement or due to breach of any license terms by You.</p>

<p><strong>7. DISPUTE RESOLUTION.</strong></p> 
<p style="margin-left: 15px;">In the event that there is a dispute under the terms of this Agreement and the Parties are unable to arrive at a resolution within 60 days, the Parties agree that they will submit to a binding confidential arbitration to be held in Bangalore, India and conducted by a sole arbitrator, jointly appointed by the Parties. The Parties agree and acknowledge that all provisions of this Agreement, 
including confidentiality provisions, shall be binding up through the end of this arbitration process. Costs of the arbitration shall be borne equally by all Parties to the arbitration.</p>

<p><strong>8. CHOICE OF LAW AND VENUE.</strong></p> 
<p style="margin-left: 15px;">This Agreement shall be governed by the laws of India. You hereby consent to jurisdiction of the courts of Bangalore, India. </p>

<p><strong>9. COMPLETE AGREEMENT.</strong></p> 
<p style="margin-left: 15px;">This EULA (including any addendum or amendment to this EULA) is the entire agreement between you and the Company relating to the Software Product and it supersedes all prior or contemporaneous oral or written communications with respect to the Software Product or any other subject matter covered by this EULA.</p> 

<p><strong> 10. SEVERABILITY.</strong></p> 
<p style="margin-left: 15px;">If any provision of this Agreement or any part thereof shall for any reason be held to be invalid or unenforceable in any respect, then such invalid or unenforceable provision or part shall be severable and severed from this Agreement and the other provisions of this Agreement shall remain in effect.</p>

<p><strong>11. AMENDMENT.</strong></p> 
<p style="margin-left: 15px;">No amendment, supplement or modification of this Agreement is binding after use of the Software Product unless approved by all Parties hereto in writing, and any amendment, supplement, modification, or approval so approved shall be binding upon each of the Parties.</p>

<p><strong>12. WAIVER.</strong></p> 
<p style="margin-left: 15px;">Any waiver of any breach or default under this Agreement shall only be effective if in writing signed by the party against whom the waiver is sought to be enforced, and no waiver shall be implied by any other act or conduct or by any indulgence, delay or omission. Any waiver shall only apply to the specific matter waived and only in the specific instance in which it is waived.</p>
<br>
<p>© 2018 IVTREE IT Solutions Private Ltd. All rights reserved.</p>
  </div><br>

<form action="eula.php" method="post">
<p style="margin-left: 320px;"><input id="field_terms" type="checkbox" required name="terms">
<label for="field_terms">I accept the <u>Terms and Conditions</u></label></p>
<button id="submit" type="submit" class="btn btn-primary mb-2" style="margin-left: 320px; background-color: #054978">Submit</button>
</form>

  <div id="footera">
    <div id="poweredbya">
      <p style="margin-top: 15px; float: right;">
        <a href="http://www.ivtree.com">
		<img src="logos/ivtree_logo.png" alt="ivtree" height="50" width="150"/>
        </a>
      </p>
    </div>
    <div id="copyrighta">
      <address><i class="fa fa-envelope" style="font-size:20px"> Contact:</i> For support or any Questions, email us at <a href="mailto: support@ivtree.com">support@ivtree.com</a>
      </address>
      <p style="float: left; padding-top: 10px; font-size: 15px;">
        Uniclair and the Ivtree logo are trademarks of Ivtree IT Solutions Private Ltd.
        Other names appearing on the site are trademarks of their respective owners.
      </p>
    </div>
  </div>


<script>
</script>
<!--checkbox style-->
<style type="text/css">

  input[type="checkbox"]:required:invalid + label { color: red; }
  input[type="checkbox"]:required:valid + label { color: green; }

</style>
</body>
</html>