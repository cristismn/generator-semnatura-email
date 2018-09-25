<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

?>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
<link href="style.css" rel="stylesheet" />

<div style="box-shadow: inset 0 4px 30px rgba(0,0,0,.1); padding-bottom:40px"> 
<div class="container-fluid">
<div class="row">
<div class="col-sm-12  section1" style="text-align:justify; padding-bottom:50px;">
<div style="background-color:#000; height:3px; width:70px;"></div>
<h1 class="titlu" style="padding:40px 0 0 0; color:black; text-align:left; max-width:786px;">Personalizeaza e-mailurile folosind generatorul de semnatura</h1>
</div>
</div>


	<div class="row section1 hidden-xs" style="max-width: 1480px;">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="<?php echo $this->baseurl; ?>/images/personalizeaza-semnatura.svg" width="68" alt="" />
								</div>
								<div class="our-services-text">
									<h4>Personalizeaza</h4>
									<p> Incepe prin a completa campurile de mai jos pentru a creea semnatura. </p>
								</div>
							</div>
						</div>
					</div>
	
	
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="<?php echo $this->baseurl; ?>/images/alegesemnatura.svg" width="68" alt="">
								</div>
								<div class="our-services-text">
									<h4>Alege Semnatura</h4>
									<p>Iti punem la dispozitie un portofoliu de semnaturi special create pentru nevoile tale.   </p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="<?php echo $this->baseurl; ?>/images/download-semnatura.svg" width="68" alt="">
								</div>
								<div class="our-services-text">
									<h4>Descarca</h4>
									<p>Cand ai terminat de personalizat semnatura pentru email, da click pe 'Descarca semnatura'.</p>
								</div>
							</div>
						</div>
					</div>
	</div>


</div>








<div data-ng-app="anwSignature" data-ng-controller="generator">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<div data-ng-controller="SignatureSwitcher">
<div class="container-fluid section1 container-mobil-app" style="max-width:1480px;" data-ng-controller="MainCtrl">
<div class="row row-mobil-app">
<div class="col-md-6 sig-carousel">
<div style="background: #FFF none repeat scroll 0% 0%;box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);">	
<div class="form-header">
<h2>Alege modelul semnaturii</h2>
</div>
<div class="slick">
<div data-ng-click='tog=1'>
<div data-ng-click="model.selected = model.selected=1">
<div class="sig-border"> <img src="<?php echo $this->baseurl; ?>/templates/greenlight/img/semnaturi/semnatura-email1.png" alt="Alege model semnatura email"> </div>
</div>
</div>

<div data-ng-click='tog=1'>
<div data-ng-click="model.selected = model.selected=2">
<div class="sig-border"> <img src="<?php echo $this->baseurl; ?>/templates/greenlight/img/semnaturi/semnatura-email2.png" alt="Alege model semnatura email"> </div>
</div>
</div>


<div data-ng-click='tog=1'>
<div data-ng-click="model.selected = model.selected=3"> 
<div class="sig-border"><img src="<?php echo $this->baseurl; ?>/templates/greenlight/img/semnaturi/semnatura-email3.png" alt="Alege model semnatura email"> </div>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog" role="document">
<div class="modal-content">

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="generator-semnatura">
<div class="modal-header" style="padding: 15px 20px;background: #f5f5f5; color:black">
<h2 class="modal-title" id="exampleModalLabel">Descarca semnatura</h2>
</div>
<div class="modal-body" style="height:150px">
<div class="col-xs-12 col-md-6" style="display:none">
<label for="lastname">Nume</label>
<div class="form-group">
<input type="text" class="form-control-sig" id="lastname" name="lastname" placeholder="Last Name">
</div>
</div>
<div class="col-xs-12 col-md-6" style="display:none">
<label for="firstname">Prenume</label>
<div class="form-group">
<input type="text" class="form-control-sig" id="firstname" name="firstname" placeholder="First Name">
</div>
</div>


<div class="col-xs-12">
<p>Avem nevoie de adresa ta de email pentru a trimite semnatura.</p>
</div>


<div class="col-xs-12 col-md-6">
<div class="form-group">
<input type="text" class="form-control-sig" id="email" name="email" placeholder="Email" required>
</div>
</div>



<input type="checkbox" name="contact_me_by_fax_only" value="1" style="display:none !important" tabindex="-1" autocomplete="off">





<div class="col-xs-12 col-md-6" style="display:none">
<label for="phonenumber">Phone Number</label>
<div class="form-group">
<input type="text" class="form-control-sig" id="phonenumber" name="phonenumber" placeholder="Phone Number">
</div>
</div>
<textarea data-ng-show="exportDocument()" style="display:none;" name="semnaturabody" id="semnaturabody">{{a}}</textarea>
</div> 
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
<input type="submit" class="btn cta-orange" name="submit" value="Trimite">
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-6 margine-mobil"> 
<!-- Nav tabs -->
<div class="card card-signature">
<div class="form">
<div class="form-header accordion">	 
<h2>Date de contact</h2>
</div>
<div class="panel-sig" style="padding:20px">
<div class="row no-gutters">
<div class="col-xs-12 col-md-6">
<label for="firstname">Prenume</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="prenume" name="prenume" placeholder="Prenume" data-ng-model="user.prenume" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label for="lastname">Nume</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="nume" name="nume" placeholder="Nume" data-ng-model="user.nume" required>
</div>
</div>
</div>
<div class="row no-gutters">
<div class="col-xs-12 col-md-6">
<label for="functie">Functie</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="functie" name="functie" placeholder="Functie" data-ng-model="user.job" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label for="companie">Companie</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="companie" name="companie" placeholder="Companie" data-ng-model="user.companie" required>
</div>
</div>
</div>
<div class="row no-gutters">
<div class="col-xs-12 col-md-6">
<label>Telefon mobil</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="telefon" name="telefon" placeholder="Telefon" data-ng-model="user.mobil" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Telefon fix</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="mobil" name="mobil" placeholder="Mobil" data-ng-model="user.telefon" required>
</div>
</div>
</div>
<div class="row no-gutters">
<div class="col-xs-12 col-md-6" style="padding:0 15px;">
<label>Adresa</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="adresa" name="adresa" placeholder="Adresa" data-ng-model="user.adresa" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Website</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="website" name="website" placeholder="Website" data-ng-model="user.website" required>
</div>
</div>
</div>
<div class="row no-gutters">
<div class="col-xs-12 col-md-12">
<label>Fotografie</label>
<p style="color: #bab4b2; font-size: 10pt; line-height: 14pt;">
Incarca fotografia in Dropbox, Google Drive sau un site similar si adauga URL mai jos.</p>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="pozaprofil" name="pozaprofil" placeholder="Profil" data-ng-model="user.poza" required>
</div>
</div>
</div>
</div>
<div class="form-header accordion">	
<h2>Retele sociale</h2>
</div>
<div class="panel-sig" style="padding:20px">
<p style="color: #bab4b2; font-size: 10pt; line-height: 14pt;">
Copiaza linkurile sociale si da paste in campurile de mai jos. Asigura-te ca introduci http:// sau https:// la inceput la fel ca in exemplu.</p>
<div class="row no-gutters">
<div class="col-xs-12 col-md-6">
<label>Facebook</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="facebook" name="facebook" placeholder="Facebook" data-ng-model="user.facebook" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Twitter</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="twitter" name="twitter" placeholder="Twitter" data-ng-model="user.twitter" required>
</div>
</div>
</div>
<div class="row no-gutters">
<div class="col-xs-12 col-md-6">
<label>LinkedIn</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="linkedin" name="linkedin" placeholder="LinkedIn" data-ng-model="user.linkedin" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Instagram</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="instagram" name="instagram" placeholder="Instagram" data-ng-model="user.instagram" required>
</div>
</div>
</div>
</div>
<div class="form-header accordion">	
<h2>Stil</h2>
</div>
<div class="panel-sig" style="padding:20px">
<div class="row no-gutters">
<div class="col-xs-12 col-md-6">
<label>Culoare</label>
<div class="form-group">
<ngjs-color-picker selected-color="selected1" options="customOptions"></ngjs-color-picker> 
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Introduceti cod culoare</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" data-ng-model="selected1"> 
</div>
</div>
</div>
</div>
<div class="form-header accordion">	
<h2>Apel la actiune</h2>
</div>
<div class="panel-sig" style="padding:20px">
<p style="color: #bab4b2; font-size: 10pt; line-height: 14pt;">
Asigura-te ca introduci http:// sau https:// la inceput la fel ca in exemplu.</p>
<div class="row no-gutters">
<div class="col-md-12" style="padding:0 15px;">
<label>Adauga text/ Descriere ALT Banner</label>
<div class="form-group">
<textarea maxlength="150" style="height:55px; resize:none;" onclick="this.select()" class="form-control-sig" name="addtext" placeholder="Adauga text" data-ng-model="user.CTAText" required></textarea>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Text buton</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="textbuton" name="textbuton" placeholder="CTA Text" data-ng-model="user.BTNText" required>
</div>
</div>
<div class="col-xs-12 col-md-6">
<label>Adauga link buton/banner</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="addlinkbtn" name="addlinkbtn" placeholder="Button URL" data-ng-model="user.BTNLink" required>
</div>
</div>

<div class="col-xs-12 col-md-6">
<label>Culoare buton</label>
<div class="form-group">
<ngjs-color-picker selected-color="selectcol" options="customOptions"></ngjs-color-picker> 
</div>
</div>

<div class="col-xs-12 col-md-6">
<label>Introduceti cod culoare</label>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" data-ng-model="selectcol"> 
</div>
</div>


<div class="col-xs-12 col-md-12">
<label>Banner</label>
<p style="color: #bab4b2; font-size: 10pt; line-height: 14pt;">
Incarca banner-ul in Dropbox, Google Drive sau un site similar si adauga URL mai jos.</p>
<div class="form-group">
<input type="text" onclick="this.select()" class="form-control-sig" id="banner" name="banner" placeholder="Banner" data-ng-model="user.banner" required>
</div>
</div>
</div>
</div>
<div class="form-header accordion">	
<h2>Informatii</h2>
</div>
<div class="panel-sig" style="padding:20px">
<div class="row no-gutters">
<div class="col-md-12" style="padding:0 15px;">
<label>Adauga informatii suplimentare</label>
<div class="form-group">
<textarea maxlength="350" style="height:215px; resize:none;" onclick="this.select()" class="form-control-sig" name="addtext" placeholder="Adauga text" data-ng-model="user.disclaimer" required></textarea>
</div>
</div>
</div>
</div>
</div>

</div>
</div> <!-- end col md -6 -->

<div class="col-xs-12 col-md-6 mobil-bottom-sig">
<div class="signature-wrapper" id="sig-wrapper-mobile">
<div class="header"><div class="top-bar hidden-xs"><h3>Previzualizare semnatura</h3></div><div class="to-block hidden-xs"><div class="to-label"><label>Catre</label></div><div class="to-field">
                                Andrei Popescu
</div></div><div class="subject-block hidden-xs"><div class="subject-label"><label>Subiect</label></div><div class="subject-field">
Noua mea semnatura
</div></div></div>

<div class="header visible-xs"><div class="top-bar" style="display:flex"><h3>Schimba modelul semnaturii</h3>

<div class="keys">



<div data-ng-click='tog=1'>
		  <button type="button" data-ng-click="model.selected = model.selected-1"  class="slick-prev slick-prev-mobile slick-arrow">Previous</button>
		  </div>
		 
		  
<div data-ng-click='tog=1'>
		  <button type="button" data-ng-click="model.selected = model.selected+1" class="slick-next slick-next-mobile slick-arrow">Next</button>
			
		 

         </div>
        </div>
		
		
		
</div></div>
	
<div class="signature-body hidden-xs"><p>Scrie un email </p><p>---</p></div>
	
<div class="signature-preview noselect" data-ng-switch='model.selected'>		
<!--- Signature 1 Template -->
<div class="signature-template" data-ng-switch-when="1" >
	
<div class="signature-style signature-style-fade" >
   	
<table data-ng-class='{"myclass":tog==1}' cellpadding="0" cellspacing="0" style="FONT-SIZE:10pt;FONT-FAMILY:ARIAL;line-height:17px;width:500px;" class="myclass" >
<tbody>
<tr>
<td data-ng-if="user.poza">
<img data-ng-src="{{user.poza}}" alt="{{(user.prenume + user.nume) || user.companie}} " style="width:150px; height:150px;"> 
</td>
<td style="padding-left:15px;"> 
<strong><span data-ng-style="{'color':{{'selected1'}},'text-transform':'uppercase', 'font-size':'11pt'}">{{user.prenume + " " + user.nume}} </span></strong><br>
<span style="text-transform:uppercase;" data-ng-if="user.job">{{user.job}}</span>
<span style="text-transform:uppercase;" data-ng-if="user.virgula && user.companie">{{user.virgula + user.companie}}<br></span> 
<p data-ng-style="{ 'border':'1px solid','border-color':{{'selected1'}},'display':'block','margin': '4px 0'}"></p>
<span data-ng-if="user.adresa" style="display: inline;"><span style="font-weight:bold;">A: </span><span style="font-size:9pt">{{user.adresa}}</span><br></span> 
<span data-ng-if="user.telefon" style="display: inline;"><span style="font-weight:bold;">T: </span><span style="font-size:9pt">{{user.telefon}}</span><br></span> 
<span data-ng-if="user.mobil" style="display: inline;"><span style="font-weight:bold;">M: </span><span style="font-size:9pt">{{user.mobil}}</span><br></span> 
<span data-ng-if="user.website" style="display: inline;"><span style="font-weight:bold;">W: </span>
<a data-ng-href="{{user.website}}" target="_blank" style="color:black; font-weight: bold; display: inline; text-decoration:none;"><span style="font-size:9pt">{{user.website}}</span></a>
</span> 
</td>
</tr>	
<tr style="height:35px;text-align:left;">
<td colspan="2" data-ng-style="{'background-color':{{'selected1'}}}">
<span data-ng-if="user.facebook" style="display: inline-block; margin-left:15px;">
<a data-ng-href="{{user.facebook}}" target="_blank"><img style="width:15px;" src="https://greenlightweb.ro/img/semnatura/whiteicons/fb.png" alt="Facebook"/></a>  &nbsp; &nbsp; 
</span>
<span data-ng-if="user.twitter" style="display: inline-block;">
<a data-ng-href="{{user.twitter}}" target="_blank"><img style="width:15px;" src="https://greenlightweb.ro/img/semnatura/whiteicons/twitter.png" alt="Twitter" /></a> &nbsp; &nbsp;
</span>
<span data-ng-if="user.linkedin" style="display: inline-block;">
<a data-ng-href="{{user.linkedin}}" target="_blank"><img style="width:15px;" src="https://greenlightweb.ro/img/semnatura/whiteicons/in.png" alt="LinkedIn"/></a>&nbsp; &nbsp;
</span>
<span data-ng-if="user.instagram" style="display: inline-block;">
<a data-ng-href="{{user.instagram}}" target="_blank"><img style="width:15px;" src="https://greenlightweb.ro/img/semnatura/whiteicons/ig.png" alt="Instagram" /></a>
</span>
</td>
</tr>
<tr>
<td colspan="2">
<span data-ng-if="user.banner == null" style="display:inherit; padding-top:45px;">
<span style="line-height: 14pt;padding-bottom:35px">
{{user.CTAText}}</span></span>
<span data-ng-if="user.banner"><a data-ng-href="{{user.BTNLink}}"><img data-ng-src="{{user.banner}}" alt="{{user.CTAText}}" style="margin:45px 0 0 0;"/></a></span>
<span data-ng-if="user.BTNText" style="display: inline; padding-bottom:60px">
<a data-ng-href="{{user.BTNLink}}" target="_blank" data-ng-style="{'background-color':{{'selectcol'}},'text-decoration':'none','border':'none','color': 'white','padding': '9px 15px','text-align': 'center','display':'inline-block','font-size':'15px','margin-top':'10px', 'margin-bottom':'60px','cursor': 'pointer'}">{{user.BTNText}}</a> 
</span>
<span data-ng-if="user.disclaimer" style="display:inherit; padding-bottom:35px;">
<span style="color: #bab4b2; font-size: 9pt; line-height: 14pt;">
{{user.disclaimer}}</span></span>
</td></tr>
</tbody>
</table>

</div>
</div>
<!--- Signature 1 Template -->
<!--- Signature 2 Template -->		
<div class="signature-template" data-ng-switch-when="2">
<div class="signature-style signature-style-fade" style="justify-content: center;display: flex;"> 

<table data-ng-class='{"myclass":tog==1}' cellpadding="0" cellspacing="0" style=" FONT-SIZE: 9pt; FONT-FAMILY: ARIAL; max-width:405px;position:relative">
<tbody>
<tr>
<td style="text-align:center;">
<span data-ng-if="user.poza">
<img data-ng-src="{{ user.poza }}"  style="border-radius:50%;margin-bottom:5px;width:125px; height:125px;" alt="Poza"> 
</span><br>
<strong><span data-ng-style="{'color':{{'selected1'}},'text-transform':'uppercase', 'font-size':'11pt'}">{{user.prenume + " " + user.nume}} </span></strong><br>
<span style="text-transform:uppercase;" data-ng-if="user.job">{{user.job}}</span>
<span style="text-transform:uppercase;" data-ng-if="user.virgula && user.companie">{{user.virgula + user.companie}}<br></span>
<p style="border-bottom: 1px solid #e1e1e1; display:block;margin: 4px 0;"></p>
<span data-ng-if="user.adresa" style="display: inline;"><span data-ng-style="{'font-weight':'bold','color':{{'selected1'}}}">A: </span><span style="font-size:9pt">{{user.adresa}}</span><br></span> 
<span data-ng-if="user.telefon" style="display: inline;"><span data-ng-style="{'font-weight':'bold','color':{{'selected1'}}}">T: </span><span style="font-size:9pt">{{user.telefon}}</span><br></span> 
<span data-ng-if="user.mobil" style="display: inline;"><span data-ng-style="{'font-weight':'bold','color':{{'selected1'}}}">M: </span><span style="font-size:9pt">{{user.mobil}}</span><br></span> 
<span data-ng-if="user.website" style="display: inline;">
<a data-ng-href="{{user.website}}" target="_blank" data-ng-style="{'color':{{'selected1'}}, 'font-weight': 'bold', 'display': 'inline', 'text-decoration':'none'}"><span style="font-size:9pt">{{user.website}}</span></a>
</span> 
</td>
</tr>	
<tr style="height:35px; text-align:center;">
<td>
	<span data-ng-if="user.facebook" style="display: inline-block;">
	<a style="color:#333; text-decoration:none;" data-ng-href="{{user.facebook}}" target="_blank"><img src="https://greenlightweb.ro/img/semnatura/2icons/facebook_sig.png" alt="Facebook" /></a>  
	</span>
	<span data-ng-if="user.twitter" style="display: inline-block;">
	<a style="color:#333; text-decoration:none;" data-ng-href="{{user.twitter}}" target="_blank"><img  src="https://greenlightweb.ro/img/semnatura/2icons/twitter_sig.png" alt="Twitter" /></a>
	</span>
	<span data-ng-if="user.linkedin" style="display: inline-block;">
	<a style="color:#333; text-decoration:none;" data-ng-href="{{user.linkedin}}" target="_blank"><img src="https://greenlightweb.ro/img/semnatura/2icons/linkedin_sig.png" alt="LinkedIn" /></a>
	</span>
	<span data-ng-if="user.instagram" style="display: inline-block;">
	<a style="color:#333; text-decoration:none;" data-ng-href="{{user.instagram}}" target="_blank"><img src="https://greenlightweb.ro/img/semnatura/2icons/instagram_sig.png" alt="Instagram"/></a>
	</span>
</td>
</tr>
<tr>




<td colspan="2" style="text-align: center;">
<span data-ng-if="user.banner == null" style="display:block; padding-top:45px;">
<span style="line-height: 14pt;padding-bottom:35px">
{{user.CTAText}}</span></span>
<span data-ng-if="user.banner"><a data-ng-href="{{user.BTNLink}}"><img data-ng-src="{{user.banner}}" alt="{{user.CTAText}}" style="margin:45px 0 0 0;"/></a></span>
<span data-ng-if="user.BTNText" style="display: inline; padding-bottom:60px">
<a data-ng-href="{{user.BTNLink}}" target="_blank" data-ng-style="{'background-color':{{'selectcol'}},'text-decoration':'none','border':'none','color': 'white','padding': '9px 15px','text-align': 'center','display':'inline-block','font-size':'15px','margin-top':'10px','cursor': 'pointer'}">{{user.BTNText}}</a> 
</span>
<span data-ng-if="user.disclaimer" style="display:block; padding-bottom:35px; padding-top:45px;">
<span style="color: #bab4b2; font-size: 9pt; line-height: 14pt;">
{{user.disclaimer}}</span></span>
</td>













</tr>
</tbody>
</table>

</div>
</div>
<!--- Signature 2 -->
<!--- Signature 3 -->	
<div class="signature-template" data-ng-switch-when="3">
<div class="signature-style signature-style-fade">
<table data-ng-class='{"myclass":tog==1}' cellpadding="0" cellspacing="0" style=" FONT-SIZE: 10pt; FONT-FAMILY: ARIAL; width:500px;" >
<tbody>
<tr>
<td colspan="2" style="padding-bottom:10px;">
<span data-ng-if="user.poza">
<img data-ng-src="{{ user.poza }}" style="width:100px; height:100px;" alt="Poza">
</span></td>
<td colspan="2" style="float:left; margin-top:30px; margin-left:-135px">
<strong><span style="FONT-SIZE: 11pt">{{user.prenume + " " + user.nume}}</span></strong><br>
<span data-ng-if="user.job">{{user.job}}<br></span>
</td>
</tr>
<tr style="border-top:1px solid #e1e1e1;">
<td colspan="2" style="padding-top:10px;"><span data-ng-if="user.adresa">{{user.adresa}}<br></span></td>
<td colspan="2" style="padding-left:45px; padding-top:10px;">
<span data-ng-if="user.website">
<a data-ng-href="{{user.website}}" target="_blank" data-ng-style="{'color': {{'selected1'}}, 'font-weight':'bold', 'display': 'inline', 'text-decoration':'none'}">{{user.website}}</a></span>
</td>
</tr>
<tr>
<td colspan="2">
<span data-ng-if="user.telefon" style="display: inline;"><span data-ng-style="{'color':{{'selected1'}}}">T: </span>{{user.telefon}}</span> &nbsp;<span> | </span> &nbsp;
<span data-ng-if="user.mobil" style="display: inline;"><span data-ng-style="{'color':{{'selected1'}}}">M: </span>{{user.mobil}}</span>
</td>
<td colspan="2" style="padding-left:45px;">
<span data-ng-if="user.facebook" style="display: inline;">
<a style="color:#333; text-decoration:none;" data-ng-href="{{user.facebook}}" target="_blank">Facebook</a>  &nbsp;<span> | </span> &nbsp;</span>
<span data-ng-if="user.twitter" style="display: inline;">
<a style="color:#333; text-decoration:none;" data-ng-href="{{user.twitter}}" target="_blank">Twitter</a> &nbsp;<span> | </span> &nbsp;</span>
<span data-ng-if="user.linkedin" style="display: inline;">
<a style="color:#333; text-decoration:none;" data-ng-href="{{user.linkedin}}" target="_blank">LinkedIn</a>
</span>
</td>
</tr>
<tr>



<td colspan="4">
<span data-ng-if="user.banner == null" style="display:inherit; padding-top:45px;">
<span style="line-height: 14pt;padding-bottom:35px">
{{user.CTAText}}</span></span>
<span data-ng-if="user.banner"><a data-ng-href="{{user.BTNLink}}"><img data-ng-src="{{user.banner}}" alt="{{user.CTAText}}" style="margin:45px 0 0 0;"/></a></span>
<span data-ng-if="user.BTNText" style="display: inline; padding-bottom:60px">
<a data-ng-href="{{user.BTNLink}}" target="_blank" data-ng-style="{'background-color':{{'selectcol'}},'text-decoration':'none','border':'none','color': 'white','padding': '9px 15px','text-align': 'center','display':'inline-block','font-size':'15px','margin-top':'10px', 'margin-bottom':'60px','cursor': 'pointer'}">{{user.BTNText}}</a> 
</span>
<span data-ng-if="user.disclaimer" style="display:inherit; padding-bottom:35px;">
<span style="color: #bab4b2; font-size: 9pt; line-height: 14pt;">
{{user.disclaimer}}</span></span>
</td>


</tr>
</tbody>
</table>
</div>
</div>
<!--- Signature 3 -->
</div>
</div>
<?php echo $error_message ?>

<button type="button" id="descarca-sig-mobil" class="btn cta-orange descarca-sig-mobil signature-style-fade" data-toggle="modal" data-target="#exampleModal">Descarca semnatura</button>
</div>
</div>
</div>


















</div>
</div>
</div>
<?php
//contact form submission code
//define variables
$email = !empty($_POST['email'])?$_POST['email']:'';
$prenume = !empty($_POST['firstname'])?$_POST['firstname']:'';
$nume = !empty($_POST['lastname'])?$_POST['lastname']:'';
$telefon = !empty($_POST['phonenumber'])?$_POST['phonenumber']:'';
$error_message = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){    

//end
//make input fields required
if (empty($_POST["email"])) {
	$error_message .= "<p>".JText::_( 'ERROR_EMAIL' )."</p>";
  } else {
	$email = test_input($_POST["email"]);
	// check if e-mail address is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $error_message .= "<p>".JText::_( 'ERROR_EMAIL_INVALID' )."</p>"; 
	}
  }	

if (!empty($_POST["lastname"])){ 
    $nume = test_input($_POST["lastname"]);
  } 

  
 if (!empty($_POST["firstname"])){
    $prenume = test_input($_POST["firstname"]);
  } 
  
   if (!empty($_POST["phonenumber"])){
    $telefon = test_input($_POST["phonenumber"]);
  } 
  
 
 
//prepare attachment
$fileatt = "Semnatura_".date("Y-m-d-H-i-s").'.html'; // File name
$content=$_POST['semnaturabody'];
$removeTags = array ('ng-if="user.poza"',
'data-ng-class="{&quot;myclass&quot;:tog==1}"',
'data-ng-if="user.facebook"',
'data-ng-if="user.job"',
'data-ng-if="user.virgula &amp;&amp; user.companie"',
'data-ng-if="user.adresa"',
'data-ng-if="user.telefon"',
'data-ng-if="user.website"',
'data-ng-if="user.facebook"',
'data-ng-if="user.twitter"',
'data-ng-if="user.linkedin"',
'data-ng-if="user.instagram"',
' class="myclass"'
);
$addTags= array ("");
$newcontent = str_replace ($removeTags, $addTags, $content);
$tidy = new Tidy();
$options = array( 'indent' => true, 'output-xhtml'   => true, 'hide-comments' => true, 'drop-empty-paras' => false);
$tidy->parseString($newcontent, $options);
$tidy->cleanRepair();
$newcontent = $tidy;
copy($newcontent,"semnatura/".$fileatt); // Copies the HTML signature form data to a folder named pdfs 
$fileatt = "semnatura/".$fileatt; // Path to the file gives the pdfs folder plus the unique file name we just assigned
//end



//recipient
$to = $_POST['email'];
$to2='dana@greenlightweb.ro';
//sender
$from = 'contact@greenlightweb.ro';
$fromName = 'Greenlight Web Agency';
$from2 = "contact@greenlightweb.ro";
$fromName2 = 'Greenlight Web Agency';

//email subject
$subject = 'Semnatura ta personalizata.'; 
$subject2= 'Utilizatorul cu numele '.$nume.' '.$prenume.' a descarcat semnatura';
//email body content
$htmlContent = "
<p>Buna, ".$prenume."</p>
<p>Acest email contine semnatura ta personalizata pentru email. Aceasta este configurata conform datelor selectate de tine. Pentru a o putea adauga in Gmail poti selecta direct semnatura din campul de mai jos si apoi sa urmezi pasii prezentati aici: <a href='https://greenlightweb.ro/blog/proceduri/configurarea-semnaturii-electronice-in-gmail'>Configurarea semnaturii electronice in Gmail</a></p>
<p>Pentru a adauga semnatura de email in Outlook, Thunderbird sau clientul de email pentru iPhone, descarca semnatura de email din atasament si urmeaza pasii prezentati in articolele corespunzatoare.</p>
<a href='https://greenlightweb.ro/blog/proceduri/configurarrea-semnaturii-electronice-in-microsoft-outlook'>Configurarea semnaturii electronice in Microsoft Outlook</a><br>
<a href='https://greenlightweb.ro/blog/proceduri/configurarea-semnaturii-electronice-in-mozilla-thunderbird'>Configurarea semnaturii electronice in Mozilla Thunderbird</a><br>
<a href='https://greenlightweb.ro/blog/proceduri/configurarea-semnaturii-electronice-in-clientul-de-email-pe-iphone'>Configurarea semnaturii electronice pe iPhone</a>
<p>O zi frumoasa in continuare!</p>
<a href='https://greenlightweb.ro'><img src='https://greenlightweb.ro/glw1.png'></a>" ;

 $textmsg = " 	<h2>Detalii de contact</h2>		
                <p>Nume: ".$nume."</p>
                <p>Prenume: ".$prenume."</p>
                <p>Telefon: ".$telefon."</p>
                <p>Email: ".$email."</p>
                <p>EmailTest: ".$test."</p>
                
                

			";
      
//header for sender info
$headers = "From: $fromName"." <".$from.">";

$headers2  = "From: " . $_POST['email'] . "\r\n" .
  "X-Mailer: php\r\n";
$headers2 .= "Bcc: cristi@greenlightweb.ro\r\n";


//boundary 
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: multipart/mixed; \r\n" . " boundary=\"{$mime_boundary}\"" ;


//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
$message2 = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $textmsg . "\n\n"; 


//preparing attachment

$message .= "--{$mime_boundary}\n";
$message2 .= "--{$mime_boundary}\n";
$fp =    @fopen($fileatt,"a");
@fwrite($fp, $newcontent);
$data =  @fread($fp,filesize($fileatt));
@fclose($fp);		
$data = chunk_split(base64_encode(file_get_contents($fileatt)));
$message .= "Content-Type: application/octet-stream; name=\"".basename($fileatt)."\"\n" . 
"Content-Description: ".basename($files[$i])."\n" .
"Content-Disposition: attachment;\n" . " filename=\"".basename($fileatt)."\"; size=".filesize($fileatt).";\n" . 
"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

$message2 .= "Content-Type: application/octet-stream; name=\"".basename($fileatt)."\"\n" . 
 "Content-Description: ".basename($files[$i])."\n" .
  "Content-Disposition: attachment;\n" . " filename=\"".basename($fileatt)."\"; size=".filesize($fileatt).";\n" . 
 "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

$message .= "--{$mime_boundary}--";
$message2 .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath); 
$mail2 = @mail($to2, $subject2, $message2, $headers2, $returnpath); 

$succMsg ="".JText::_( 'SUCC_MESSAGE' ).""; 			
}

}

//input data validation
function test_input($data) {
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data);
return $data;
}
//end
?>	

<script src="app.js"></script>
<script src="slick-carousel.js"></script>
<script>
testExp = new RegExp('Android|webOS|iPhone|iPad|' +
    		       'BlackBerry|Windows Phone|'  +
    		       'Opera Mini|IEMobile|Mobile' , 
    		      'i');
  
  if (testExp.test(navigator.userAgent)){


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
  }




var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 330) {$("#sig-wrapper-mobile").fadeIn(500);}
	else {$("#sig-wrapper-mobile").fadeOut(500);}
	  
	if (y >= 330) {$("#descarca-sig-mobil").fadeIn(500);}
	else {$("#descarca-sig-mobil").fadeOut(500);}
};
window.addEventListener("scroll", myScrollFunc);

  }
  
  else {


// Tawk_API exclus de pe mobil  

	  
	  
  }

</script>



<script>
$('#prenume').change(function() {
    $('#firstname').val($(this).val());
});

$('#nume').change(function() {
    $('#lastname').val($(this).val());
});

$('#telefon').change(function() {
    $('#phonenumber').val($(this).val());
});
</script>

