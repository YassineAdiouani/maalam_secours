<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/register2.css">
    <title>Register</title>
</head>

<body>
    <div class="register-container">
        <div class="register-header">
            <header>worker register</header>
            <div class="register-img">
                <div class="profile-imd">
                    <img class="avatar-image" src="assets/img/avatar.png" alt="avatar" />
                </div>
                <i class="uil uil-edit edit-profile"></i>
                <input type="file" hidden name="profile_image" />
            </div>
        </div>
        <form action="#">
            <!-- ================First Form================ -->
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">First Name</label>
                            <input type="text" placeholder="Enter first name" required />
                        </div>

                        <div class="input-field">
                            <label for="">Last Name</label>
                            <input type="text" placeholder="Enter last name" required />
                        </div>

                        <div class="input-field">
                            <label for="">Gender</label>
                            <select>
                                <option value="Male">Male</option>
                                <option value="Famele">Famele</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Email</label>
                            <input type="email" placeholder="Enter your email" required />
                        </div>

                        <div class="input-field">
                            <label for="">Password</label>
                            <input type="password" placeholder="Enter new password" required />
                        </div>

                        <div class="input-field">
                            <label for="">Confirme password</label>
                            <input type="password" placeholder="Confirme your password" required />
                        </div>

                    </div>
                </div>
                <div class="details ID">

                    <span class="title">Identify Details</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">City</label>
                            <select>
                                <option hidden>Select city</option>
                                <option value="">Rabat</option>
                                <option value="">Casa</option>
                                <option value="">Marakech</option>
                                <option value="">Sale</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Address</label>
                            <input type="text" placeholder="Enter your CIN" required />
                        </div>

                        <div class="input-field">
                            <label for="">Birth Date</label>
                            <input type="date" placeholder="Enter your Birth date" required />
                        </div>

                        <div class="input-field">
                            <label for="">Phone</label>
                            <input type="text" placeholder="Enter your number" required />
                        </div>

                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
            <!-- ================Second Form================ -->
            <div class="form second">
                <div class="details personal">
                    <span class="title">Work Details</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">CIN</label>
                            <input type="text" placeholder="Enter your CIN">
                        </div>

                        <div class="input-field">
                            <label for="">Categorie</label>
                            <select>
                                <option hidden>Select categorie</option>
                                <option>gbas</option>
                                <option>5raz</option>
                                <option>bnay</option>
                                <option>maalam</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Experience</label>
                            <select>
                                <option hidden>Select experience</option>
                                <option>1 ans</option>
                                <option>3 ans</option>
                                <option>5 ans</option>
                                <option>+10 ans </option>
                            </select>
                        </div>

                        <div class="input-field textarea">
                            <label for="">Bio</label>
                            <textarea cols="30" rows="10" placeholder="Enter your description"></textarea>
                        </div>

                    </div>
                </div>
                <div class="details ID">

                    <span class="title">Necessary documents</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">document 1</label>
                            <input type="text" placeholder="Enter your CIN"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 2</label>
                            <input type="text" placeholder="Enter last name"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 3</label>
                            <input type="text" placeholder="Enter last name"  />
                        </div>

                        

                        <div class="input-field">
                            <label for="">Document 1</label>
                            <input type="text" placeholder="Enter your CIN"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 2</label>
                            <input type="text" placeholder="Enter last name"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 3</label>
                            <input type="text" placeholder="Enter your Birth date"  />
                        </div>

                    </div>
                    
                    <div class="accept">
                        <input type="checkbox" id="accept" />
                        <label for="accept" class="terms">By checking the checkbox below, you agree to <span>our Terms of Use</span>, <span>Privacy Statement</span>, and that you are over 18.</label>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script defer src="assets/js/main.js"></script>
    <script>
    /*============= Register SCRIPT =============*/
        const form = document.querySelector('form'),
                nextBtn = document.querySelector('.nextBtn'),
                backBtn = document.querySelector('.backBtn'),
                allInput = document.querySelectorAll('.first input'),
                profileImageBtn = document.querySelector('.edit-profile'),
                input_file = document.querySelector('input[name="profile_image"]'),
                avatar = document.querySelector('.avatar-image');
        
        
        nextBtn.addEventListener('click',() => {
            allInput.forEach(input => {
                if(input.value != ''){
                    form.classList.add('secActive');
                }else{
                    form.classList.remove('secActive');
                }
            })
        })
        
        backBtn.addEventListener('click',() => form.classList.remove('secActive'))
        
        profileImageBtn.addEventListener('click',() => input_file.click())
        
        
        const inputElement = document.querySelector('input[type="file"]');
        const imgElement = document.querySelector('img');
        
        input_file.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const reader = new FileReader();
        
            reader.addEventListener('load', (event) => {
                avatar.src = event.target.result;
            });
        
            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>