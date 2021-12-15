<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
@extends('template.navbar')
@section('content')
<div class="form-group ">
    <a class="btn btn-info" onclick="openHealth()">KK</a>
    <a class="btn btn-info" onclick="openCar()">A</a>
    <a class="btn btn-info" onclick="openFinance()">S</a>
    <a class="btn btn-info" onclick="openMore()">S</a>
    <form method="POST" action="{{route('documentform',$id)}}" enctype="multipart/form-data">
        @csrf
        <div style="display: none" id="health">
            <div>
                <label for="">Pre-insurer</label>

                @if(isset($data->preinsurer))
                <a href="{{\Storage::disk('img')->url(substr($data->preinsurer,4))}}" target="_blank">{{$data->preinsurer}}</a>
                <input class="form-control" type="file" id="image" value="{{$data->preinsurer}}" name="preinsurer">
                @else
                <input class="form-control" type="file" id="image" value="" name="preinsurer">
                @endif
            </div>
            <div>
   
                <label>Id necessary</label>
                @if(isset($data->idnecessary))
                <input class="form-control" type="file" value="{{$data->idnecessary}}" name="idnecessary">
                @else
                <input class="form-control" type="file" name="idnecessary">
                @endif
            </div>
            <div>
                <label>Notice By</label>
                @if(isset($data->noticeby))
                <input class="form-control" type="file" value="{{$data->noticeby}}" name="noticeby">
                @else
                <input class="form-control" type="file" name="noticeby">
                @endif
            </div>
            <div>
                <label>Power of attorney</label>
                <input class="form-control" type="file" name="powerofattorney">
            </div>
        </div>

        <br>
        <div style="display: none" id="car">
            <input onclick="openCounterOffer()" class="btn btn-primary" type="button" value="Counter">
            <input onclick="openNewVehicle()" class="btn btn-secondary" type="button" value="New Vehicle">
            <hr>


            <div class="hide" id="counteroffer">
                <input class="form-control" type="file" name="uploadpolice">
                <input type="text" name="comment" placeholder="Comment">
            </div>

            <div class="hide" id="newVehicle">
                <div>
                    <label>Upload vehicle ID</label>
                    <input class="form-control" type="file" name="uploadvehicleid">
                </div>
                <div>
                    <h6>Lesing</h6>

                    <input onclick="openYesCheckBox()" type="radio" name="leasing" id="yes" value="Yes">
                    <label for="yes">Yes</label>

                    <div class="hide" id="leasingname">
                        <input type="text" name="leasingname" placeholder="Lesaing Name">
                    </div>

                    <input type="radio" name="leasing" id="no" value="No">
                    <label for="no">No</label>
                </div>
                <br>

                <hr>

                <h4>Vahicle Information</h4>
                <div>
                    <span>Purchase Year</span>
                    <select name="yearpurchase">
                        @for($i = \Carbon\Carbon::now()->format('Y');$i>=1950;$i--)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label>First Commissioning</label>
                    <input type="date" class="form-control" name="firstcommissioning">
                </div>
                <div>
                    <label>Start Insurance</label>
                    <input type="date" class="form-control" name="startinsurance">
                </div>
                <div>
                    <label>Kanton:</label>
                    <select name="kanton">
                        <option>Zürich</option>
                        <option>Bern / Berne</option>
                        <option>Luzern</option>
                        <option>Uri</option>
                        <option>Schwyz</option>
                        <option>Unterwalden</option>
                        <option>Glarus</option>
                        <option>Zug</option>
                        <option>Freiburg / Fribourg</option>
                        <option>Solothurn</option>
                        <option>Basel</option>
                        <option>Schaffhausen</option>
                        <option>Appenzell</option>
                        <option>Sankt Gallen</option>
                        <option>Graubünden</option>
                        <option>Aargau</option>
                        <option>Thurgau</option>
                        <option>Ticino</option>
                        <option>Vaud</option>
                        <option>Valais / Wallis</option>
                        <option>Neuchâtel</option>
                        <option>Genève</option>
                        <option>Jura</option>
                    </select>
                </div>
                <div>
                    <label>KM-Stand</label>
                    <input class="form-control" type="number" name="kmstand">
                </div>

                <hr>

                <h4>Driver Information</h4>
                <div>
                    <label>Date of issue of driver's license</label>
                    <input class="form-control" type="date" name="dateofissueofdriverslicense">
                </div>
                <div>
                    <label>Nationality: </label>
                    <input class="form-control" type="text" name="nationality">
                </div>
                <div>
                    <label>Lenker? </label>
                    <select name="lenker">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <hr>
                <h4>Desired Coverage</h4>
                <div>
                    <label>Insurance</label>
                    <select name="insurance">
                        <option>300</option>
                        <option>500</option>
                        <option>1000 (drivers under 25 years)</option>
                    </select>
                </div>
                <div>
                    <label>Deduction Part: </label>
                    <select name="deductionpart">
                        @for($i = 1000;$i<=20000;$i+=1000) <option>{{$i}}</option>
                            @endfor
                    </select>
                </div>
                <div>
                    <label>Things Carried: </label>
                    <input type="text" class="form-control" name="thingscarried">
                </div>
                <div>
                    <label>Repair Shop: </label><br>
                    <input type="radio" name="partnergarage" value="Parter Garage">
                    <label for="partnergarage">Partener Garage</label>
                    <input type="radio" name="partnergarage" value="Free Choice">
                    <label for="partnergarage">Free Choice</label>
                </div>
                <div>
                    <label>Accident Coverage: </label><br>
                    <input type="radio" name="accidentcoverage" value="Yes">
                    <label for="accidentcoverage">Yes</label>
                    <input type="radio" name="accidentcoverage" value="No">
                    <label for="accidentcoverage">No</label>
                </div>
                <div>
                    <label>Traffic Rights Protection: </label><br>
                    <input type="radio" name="trafficrightsprotection" value="Yes">
                    <label for="trafficrightsprotection">Yes</label>
                    <input type="radio" name="trafficrightsprotection" value="No">
                    <label for="trafficrightsprotection">No</label>
                </div>
                <div>
                    <label>Gross Negligence Protection: </label><br>
                    <input type="radio" name="grossnegligenceprotection" value="Yes">
                    <label for="grossnegligenceprotection">Yes</label>
                    <input type="radio" name="grossnegligenceprotection" value="No">
                    <label for="grossnegligenceprotection">No</label>
                </div>
                <div>
                    <label>Glass Protection: </label><br>
                    <input type="radio" name="glassprotection" value="Yes">
                    <label for="glassprotection">Yes</label>
                    <input type="radio" name="glassprotection" value="No">
                    <label for="glassprotection">No</label>
                </div>
                <div>
                    <label>Parking Damage: </label><br>
                    <input type="radio" name="parkingdamage" value="Yes">
                    <label for="parkingdamage">Yes</label>
                    <input type="radio" name="parkingdamage" value="No">
                    <label for="parkingdamage">No</label>
                </div>
                <div>
                    <label>24H Roadside Assistance: </label><br>
                    <input type="radio" name="roadsideassistance" value="Yes">
                    <label for="roadsideassistance">Yes</label>
                    <input type="radio" name="roadsideassistance" value="No">
                    <label for="roadsideassistance">No</label>
                </div>
                <div>
                    <label>Car Comment</label>
                    <input type="text" class="form-control" name="carcomment">
                </div>

            </div>

        </div>


        <div style="display: none" id="finance">
            <hr>
            <h4>3a/3b Request</h4>
            <div>
                <label>Nationality</label>
                <select name="nationalityfinance">
                     <option value="{{$data->nationalityfinance}}" selected>{{$data->nationalityfinance}}</option>
                    <option value="afghan">Afghan</option>
                    <option value="albanian">Albanian</option>
                    <option value="algerian">Algerian</option>
                    <option value="american">American</option>
                    <option value="andorran">Andorran</option>
                    <option value="angolan">Angolan</option>
                    <option value="antiguans">Antiguans</option>
                    <option value="argentinean">Argentinean</option>
                    <option value="armenian">Armenian</option>
                    <option value="australian">Australian</option>
                    <option value="austrian">Austrian</option>
                    <option value="azerbaijani">Azerbaijani</option>
                    <option value="bahamian">Bahamian</option>
                    <option value="bahraini">Bahraini</option>
                    <option value="bangladeshi">Bangladeshi</option>
                    <option value="barbadian">Barbadian</option>
                    <option value="barbudans">Barbudans</option>
                    <option value="batswana">Batswana</option>
                    <option value="belarusian">Belarusian</option>
                    <option value="belgian">Belgian</option>
                    <option value="belizean">Belizean</option>
                    <option value="beninese">Beninese</option>
                    <option value="bhutanese">Bhutanese</option>
                    <option value="bolivian">Bolivian</option>
                    <option value="bosnian">Bosnian</option>
                    <option value="brazilian">Brazilian</option>
                    <option value="british">British</option>
                    <option value="bruneian">Bruneian</option>
                    <option value="bulgarian">Bulgarian</option>
                    <option value="burkinabe">Burkinabe</option>
                    <option value="burmese">Burmese</option>
                    <option value="burundian">Burundian</option>
                    <option value="cambodian">Cambodian</option>
                    <option value="cameroonian">Cameroonian</option>
                    <option value="canadian">Canadian</option>
                    <option value="cape verdean">Cape Verdean</option>
                    <option value="central african">Central African</option>
                    <option value="chadian">Chadian</option>
                    <option value="chilean">Chilean</option>
                    <option value="chinese">Chinese</option>
                    <option value="colombian">Colombian</option>
                    <option value="comoran">Comoran</option>
                    <option value="congolese">Congolese</option>
                    <option value="costa rican">Costa Rican</option>
                    <option value="croatian">Croatian</option>
                    <option value="cuban">Cuban</option>
                    <option value="cypriot">Cypriot</option>
                    <option value="czech">Czech</option>
                    <option value="danish">Danish</option>
                    <option value="djibouti">Djibouti</option>
                    <option value="dominican">Dominican</option>
                    <option value="dutch">Dutch</option>
                    <option value="east timorese">East Timorese</option>
                    <option value="ecuadorean">Ecuadorean</option>
                    <option value="egyptian">Egyptian</option>
                    <option value="emirian">Emirian</option>
                    <option value="equatorial guinean">Equatorial Guinean</option>
                    <option value="eritrean">Eritrean</option>
                    <option value="estonian">Estonian</option>
                    <option value="ethiopian">Ethiopian</option>
                    <option value="fijian">Fijian</option>
                    <option value="filipino">Filipino</option>
                    <option value="finnish">Finnish</option>
                    <option value="french">French</option>
                    <option value="gabonese">Gabonese</option>
                    <option value="gambian">Gambian</option>
                    <option value="georgian">Georgian</option>
                    <option value="german">German</option>
                    <option value="ghanaian">Ghanaian</option>
                    <option value="greek">Greek</option>
                    <option value="grenadian">Grenadian</option>
                    <option value="guatemalan">Guatemalan</option>
                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                    <option value="guinean">Guinean</option>
                    <option value="guyanese">Guyanese</option>
                    <option value="haitian">Haitian</option>
                    <option value="herzegovinian">Herzegovinian</option>
                    <option value="honduran">Honduran</option>
                    <option value="hungarian">Hungarian</option>
                    <option value="icelander">Icelander</option>
                    <option value="indian">Indian</option>
                    <option value="indonesian">Indonesian</option>
                    <option value="iranian">Iranian</option>
                    <option value="iraqi">Iraqi</option>
                    <option value="irish">Irish</option>
                    <option value="israeli">Israeli</option>
                    <option value="italian">Italian</option>
                    <option value="ivorian">Ivorian</option>
                    <option value="jamaican">Jamaican</option>
                    <option value="japanese">Japanese</option>
                    <option value="jordanian">Jordanian</option>
                    <option value="kazakhstani">Kazakhstani</option>
                    <option value="kenyan">Kenyan</option>
                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                    <option value="kuwaiti">Kuwaiti</option>
                    <option value="kyrgyz">Kyrgyz</option>
                    <option value="laotian">Laotian</option>
                    <option value="latvian">Latvian</option>
                    <option value="lebanese">Lebanese</option>
                    <option value="liberian">Liberian</option>
                    <option value="libyan">Libyan</option>
                    <option value="liechtensteiner">Liechtensteiner</option>
                    <option value="lithuanian">Lithuanian</option>
                    <option value="luxembourger">Luxembourger</option>
                    <option value="macedonian">Macedonian</option>
                    <option value="malagasy">Malagasy</option>
                    <option value="malawian">Malawian</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="maldivan">Maldivan</option>
                    <option value="malian">Malian</option>
                    <option value="maltese">Maltese</option>
                    <option value="marshallese">Marshallese</option>
                    <option value="mauritanian">Mauritanian</option>
                    <option value="mauritian">Mauritian</option>
                    <option value="mexican">Mexican</option>
                    <option value="micronesian">Micronesian</option>
                    <option value="moldovan">Moldovan</option>
                    <option value="monacan">Monacan</option>
                    <option value="mongolian">Mongolian</option>
                    <option value="moroccan">Moroccan</option>
                    <option value="mosotho">Mosotho</option>
                    <option value="motswana">Motswana</option>
                    <option value="mozambican">Mozambican</option>
                    <option value="namibian">Namibian</option>
                    <option value="nauruan">Nauruan</option>
                    <option value="nepalese">Nepalese</option>
                    <option value="new zealander">New Zealander</option>
                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                    <option value="nicaraguan">Nicaraguan</option>
                    <option value="nigerien">Nigerien</option>
                    <option value="north korean">North Korean</option>
                    <option value="northern irish">Northern Irish</option>
                    <option value="norwegian">Norwegian</option>
                    <option value="omani">Omani</option>
                    <option value="pakistani">Pakistani</option>
                    <option value="palauan">Palauan</option>
                    <option value="panamanian">Panamanian</option>
                    <option value="papua new guinean">Papua New Guinean</option>
                    <option value="paraguayan">Paraguayan</option>
                    <option value="peruvian">Peruvian</option>
                    <option value="polish">Polish</option>
                    <option value="portuguese">Portuguese</option>
                    <option value="qatari">Qatari</option>
                    <option value="romanian">Romanian</option>
                    <option value="russian">Russian</option>
                    <option value="rwandan">Rwandan</option>
                    <option value="saint lucian">Saint Lucian</option>
                    <option value="salvadoran">Salvadoran</option>
                    <option value="samoan">Samoan</option>
                    <option value="san marinese">San Marinese</option>
                    <option value="sao tomean">Sao Tomean</option>
                    <option value="saudi">Saudi</option>
                    <option value="scottish">Scottish</option>
                    <option value="senegalese">Senegalese</option>
                    <option value="serbian">Serbian</option>
                    <option value="seychellois">Seychellois</option>
                    <option value="sierra leonean">Sierra Leonean</option>
                    <option value="singaporean">Singaporean</option>
                    <option value="slovakian">Slovakian</option>
                    <option value="slovenian">Slovenian</option>
                    <option value="solomon islander">Solomon Islander</option>
                    <option value="somali">Somali</option>
                    <option value="south african">South African</option>
                    <option value="south korean">South Korean</option>
                    <option value="spanish">Spanish</option>
                    <option value="sri lankan">Sri Lankan</option>
                    <option value="sudanese">Sudanese</option>
                    <option value="surinamer">Surinamer</option>
                    <option value="swazi">Swazi</option>
                    <option value="swedish">Swedish</option>
                    <option value="swiss">Swiss</option>
                    <option value="syrian">Syrian</option>
                    <option value="taiwanese">Taiwanese</option>
                    <option value="tajik">Tajik</option>
                    <option value="tanzanian">Tanzanian</option>
                    <option value="thai">Thai</option>
                    <option value="togolese">Togolese</option>
                    <option value="tongan">Tongan</option>
                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                    <option value="tunisian">Tunisian</option>
                    <option value="turkish">Turkish</option>
                    <option value="tuvaluan">Tuvaluan</option>
                    <option value="ugandan">Ugandan</option>
                    <option value="ukrainian">Ukrainian</option>
                    <option value="uruguayan">Uruguayan</option>
                    <option value="uzbekistani">Uzbekistani</option>
                    <option value="venezuelan">Venezuelan</option>
                    <option value="vietnamese">Vietnamese</option>
                    <option value="welsh">Welsh</option>
                    <option value="yemenite">Yemenite</option>
                    <option value="zambian">Zambian</option>
                    <option value="zimbabwean">Zimbabwean</option>
                </select>
            </div>
            <div>
                <label>Residence Permit</label>
                <input type="text" class="form-control" name="residencepermit">
            </div>
            <div>
                <label>Phone Number: </label>
                <div class="d-inline">

                    <select name="countryCode">
                        <option data-countryCode="GB" value="44" selected>UK (+44)</option>
                        <option data-countryCode="US" value="1">USA (+1)</option>
                        <optgroup label="Other countries">
                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                            <option data-countryCode="CN" value="86">China (+86)</option>
                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                            <option data-countryCode="FR" value="33">France (+33)</option>
                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                            <option data-countryCode="IN" value="91">India (+91)</option>
                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                            <option data-countryCode="GB" value="44">UK (+44)</option>
                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                            <option data-countryCode="US" value="1">USA (+1)</option>
                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                        </optgroup>
                    </select>
                    <input type="number" name="phonenumber">
                </div>
                <div>
                    <label>Email: </label>
                    <input type="email" name="email" class="form-contorl">
                </div>
                <div>
                    <label>Marital Status</label>
                    <select name="martialstatus">
                        <option>Married</option>
                        <option>Widowed</option>
                        <option>Separated</option>
                        <option>Divorced</option>
                        <option>Single</option>
                    </select>
                </div>
                <div>
                    <label>Employment Relationship: </label>
                    <select name="employmentrelationship">
                        <option>Coworkers</option>
                        <option>Team Members</option>
                        <option>Work Friends</option>
                        <option>Manager/Direct Report</option>
                        <option>Office Spouse</option>
                        <option>Mentor/Mentee</option>
                        <option>Life Friends</option>
                    </select>
                </div>
                <div>
                    <label>Job: </label>
                    <input type="text" name="job" class="form-control">
                </div>
                <div>
                    <label>Payment Rhythm</label>
                    <select name="paymentrhythm">
                        <option>Weekly</option>
                        <option>Mounth</option>
                        <option>Year</option>
                    </select>
                </div>
                <div>
                    <label>Amount Per Month</label>
                    <input type="number" name="amountpermonth" class="form-control">
                </div>
                <div>
                    <label>Share Guarantee/Fund</label>
                    <select>
                        @php
                        $j = 100;
                        @endphp
                        @for($i = 1;$i<=100;$i++) <option>{{$i."/".--$j}}</option>
                            @endfor

                    </select>

                </div>
                <div>
                    <label>Contract Start Date: </label>
                    <input type="date" name="contractstartdate" class="form-control">
                </div>
                <div>
                    <label>Premium Waiver: </label><br>
                    <input type="radio" name="premiumwaiver" value="Yes">
                    <label for="premiumwaiver">Yes</label>
                    <input type="radio" name="premiumwaiver" value="No">
                    <label for="premiumwaiver">No</label>
                </div>
                <div>
                    <label>Eu Pension: </label><br>
                    <input type="radio" name="eupension" value="Yes">
                    <label for="eupension">Yes</label>
                    <input type="radio" name="eupension" value="No">
                    <label for="eupension">No</label>
                </div>
                <div>
                    <label>Death Capital: </label><br>
                    <input type="radio" name="deathcapital" value="Yes">
                    <label for="deathcapital">Yes</label>
                    <input type="radio" name="deathcapital" value="No">
                    <label for="deathcapital">No</label>
                </div>
                <div>
                    <label>Smoker: </label><br>
                    <input type="radio" name="smoker" value="Yes">
                    <label for="smoker">Yes</label>
                    <input type="radio" name="smoker" value="No">
                    <label for="smoker">No</label>
                </div>
                <div>
                    <label>Which Companies Should Make An Offer</label>
                    <input type="text" name="whichcompaniesshouldmakeanoffer" class="form-control">
                </div>

            </div>
        </div>


        <div style="display: none" id="more">
            <h4>Household Contents And Personal Liability</h4>

            <input onclick="openCounteroffered()" type="button" value="Counteroffered" class="btn btn-primary">
            <input onclick="openNewPropertyInsurance()" type="button" value="New Property Insurance" class="btn btn-primary">
            <input onclick="openChoiceSociety()" type="button" value="Choose Society" class="btn btn-primary">

            <div class="hide" id="counteroffered">
                <h4>Counteroffer</h4>
                <div>
                    <label>Upload Police</label>
                    <input type="file" name="uploadpolice2" class="form-control">
                    {{-- Vergleischart--}}
                    <label>Comment At Police: </label>
                    <input type="text" name="commentatpolice">
                </div>
            </div>

            <div class="hide" id="newrequest">
                <h4>New Request</h4>
                <div>
                    <label>Number Of People</label>
                    <select name="numberofpeople">
                        @for($i = 1;$i<=30;$i++) <option>{{$i}}</option>
                            @endfor
                    </select>
                </div>
                <div>
                    <label>Number Of Rooms</label>
                    <select name="numberofrooms">
                        @for($i = 1;$i<=30;$i++) <option>{{$i}}</option>
                            @endfor
                    </select>
                </div>
                <div>
                    <label>Insuranceamount: </label>
                    <input type="number" name="insuranceamount" class="form-control">
                </div>
                <div>
                    <label>Wished Additional Things: </label>
                    <input type="text" name="wishedadditionalthings" class="form-control">
                </div>
                <div>
                    <label>Private Liability: </label><br>
                    <input type="radio" name="privateliability" value="Yes">
                    <label for="privateliability">Yes</label>
                    <input type="radio" name="privateliability" value="No">
                    <label for="privateliability">No</label>
                </div>

            </div>
            <div class="hide" id="choosesociety">
                <div>
                    <h4>Legal Protection Insurance</h4>
                    <div>
                        <label>Society</label>
                        <input type="text" name="society" class="form-control">
                    </div>
                    <div>
                        <label>Number Of People at Insurance</label>
                        <select name="numberofpeopleinsurance">
                            @for($i = 1;$i<=30;$i++) <option>{{$i}}</option>
                                @endfor
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <input type="submit" value="Save">
    </form>
</div>
<script>
    function openHealth() {
        document.getElementById("health").style.display = "block";
        document.getElementById("car").style.display = "none";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "none";
    }

    function openCar() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "block";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "none";

    }

    function openFinance() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "none";
        document.getElementById("finance").style.display = "block";
        document.getElementById("more").style.display = "none";
    }

    function openMore() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "none";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "block";
    }

    function openCounterOffer() {
        document.getElementById('counteroffer').classList.toggle("hide");


    }

    function openNewVehicle() {
        document.getElementById('newVehicle').classList.toggle('hide');

    }

    function openYesCheckBox() {
        document.getElementById('leasingname').classList.toggle('hide');
    }

    function openCounteroffered() {
        document.getElementById('counteroffered').classList.toggle('hide');
    }

    function openNewPropertyInsurance() {
        document.getElementById('newrequest').classList.toggle('hide');
    }

    function openChoiceSociety() {
        document.getElementById('choosesociety').classList.toggle('hide');
    }
</script>
<style>
    .hide {
        display: none;
    }
</style>
@endsection

</html>
