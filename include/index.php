<?php
    session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Therealworld</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
</head>

<style>
    @media (max-width: 768px){

        form input, 
        form select{
            width: 70%;
        }
        form .checkbox-two input,
        form .checkbox-one input{
            top: 89.5%;
            position: relative;
            left: -30px;
            display: none;
    
            
        }

        form .checkbox-two label {
            font-size: 12px;
        }

        .btn-group {
            gap: 0;
            display: block;
        }
    }

</style>

<body>



    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="home.html"><span>The</span>real world</a></div>

                    <!-- <img class="logo-img" src="./imgs/trw7.png" alt=""> -->

                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Personal<br><span>25 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Contact<br><span>60 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>Security<br><span>30 secs to complete</span></p>
                        </li>

                        <li class="step">
                            <span>4</span>
                            <p>payment<br><span>20 secs to complete</span></p>
                        </li>
                    </ul>

                </div>
                <form action="../include/con_submit.php" method="POST">
                    <div class="form-one form-step active">
                        <div class="bg-svg"><img src="../assets/personal.png"></div>
                        <h2>Personal Information</h2>
                        <p>Enter your personal Information correctly</p>

                        <div>
                            <label>First Name</label>
                            <input type="text" name="frist_name" placeholder="e.g John">
                        </div>

                        <div>
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="e.g Paul">
                        </div>

                        <div class="birth">
                            <label>Date of Birth</label>
                            <div class="grouping">
                                <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31"
                                    placeholder="DD">
                                <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12"
                                    placeholder="MM">
                                <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050"
                                    placeholder="YYYY">
                            </div>
                        </div>

                    </div>

                    <div class="form-two form-step">
                        <div class="bg-svg"><img src="../assets/contact.png"></div>
                        <h2>Contact</h2>

                        <div>
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="+1 xxx xxxx xxx">
                        </div>

                        <div>
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Street Address">
                        </div>

                        <div>
                            <input type="text" name="houses" placeholder="App, Suite, Building">
                        </div>

                        <div>
                            <label>City</label>
                            <input type="text" name="city" placeholder="City">
                        </div>

                        <div>
                            <label>State</label>
                            <input type="text" name="state" placeholder="State/Province">
                        </div>

                        <div>
                            <label>Zip code</label>
                            <input type="number" name="zip" placeholder="Postal/Zip Code">
                        </div>

                        <div>
                            <label>Country</label>
                            <select name="country" id="country">
                                <option value="">Please select</option>
                                <option value="Afganistan">Afganistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo
                                </option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Eswatini (fmr. " Swaziland")">Eswatini (fmr. "Swaziland")</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holy See">Holy See</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Korea">North Korea</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine State">Palestine State</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>


                    </div>


                    <div class="form-three form-step">
                        <div class="bg-svg"><img src="../assets/security.png"></div>

                        <h2>Security</h2>

                        <div>
                            <label>Email</label>
                            <input type="email" name="email" placeholder="your email Address">
                        </div>

                        <div>
                            <label>Username</label>
                            <input type="text" name="username" placeholder="username">
                        </div>

                        <div>
                            <label>Password</label>
                            <input type="password" name="password" placeholder="password">
                        </div>

                        <div>
                            <label>Confrim Password</label>
                            <input type="password" name="cpassword" placeholder="Confirm password">
                        </div>

                        <div class="checkbox-one">
                            <input type="checkbox">
                            <label>Receive our news letter and special offers </label>
                        </div>

                    </div>


                    <div class="form-four form-step">
                        <div class="bg-svg"><img src="../assets/payment.png"></div>

                        <h2>Payment</h2>

                        <div>
                            <label>Card Number</label>
                            <input type="number" name="card_number" placeholder="xxxx xxxx xxxx xxxx">
                        </div>

                        <div>
                            <label>Expiration Date</label>
                            <input type="datetime" name="expdate" placeholder="MM/YY">
                        </div>

                        <div>
                            <label>CVC</label>
                            <input type="password" name="cvc" placeholder="xxx">
                        </div>

                        <div>
                            <label>Billing Address</label>
                            <input type="text" name="biling_add" placeholder="Billing Address">
                        </div>

                        <div>
                            <label>Card Name</label>
                            <input type="text" name="card_name" placeholder="Card Names">
                        </div>

                        <h2 class="payment">$49.99 / weekly</h2>

                        <div class="checkbox-two">
                            <input type="checkbox">
                            <label>I accept the Terms and Conditions and Privacy Policy, and agree to pay $49.99 USD
                                weekly and receive $1,499.99 USD instantly until I cancel. </label>
                        </div>

                    </div>

                    <div class="btn-group" >
                        <button type="button" class="btn-prev" disabled>Back</button>
                        <button type="button" class="btn-next">Next step</button>
                        <button type="sumbit" name="save_submit" class="btn-submit">submit</button>
                    </div>

                    <!-- <div class="btn-group"></div> -->
                </form>
            </div>
        </div>
    </div>


    <script src="../js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>