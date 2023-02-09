<div align="center">
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/logo.png" />
</div>

# petsh

Find new friends and invite them for a first walk!

# about app

Petsh is a web application created for pet owners and animal enthusiasts. The platform connects users with similar interests in pets and offers the opportunity to organize walks with their furry friends. Additionally, users can chat with each other. Petsh provides a unique space for pet owners to connect and engage with like-minded individuals while enjoying time with their pets.

# setup

1. Make sure you have Docker installed on your machine. You can download it from the official website https://www.docker.com if you don't have it.

2. Clone this repository using:

```bash
git clone https://github.com/gzaprzala/petsh.git
```

3. Create a config.php file in the root of the cloned repository and set up the necessary database connection details, such as the username, password, host, and database name.

```code
<?php

const USERNAME = '';
const PASSWORD = '';
const HOST = '';
const DATABASE = '';
```

4. Open terminal and run following commands:

```bash
docker compose build
```

```bash
docker compose up
```

5. Access the application via browser by using the URL http://localhost:8080.

# presentation of desktop views

<div align="center">
  <p>Petsh allows you to easily change background color to whatever you want</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/HomeColor.gif" />
</div>

<div align="center">
  <p>Search page (likes and dislikes possible by using fetchAPI GET and POST methods)</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/SearchPage.png" />
</div>

<div align="center">
  <p>Redirect to chat from search page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/RedirectToChat.gif" />
</div>

<div align="center">
  <p>Chat page (refresh possible by using fetchAPI GET method)</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/ChatExample.gif" />
</div>

<div align="center">
  <p>Login page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/LogIn.gif" />
</div>

<div align="center">
  <p>Log out</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/LogOut.gif" />
</div>

<div align="center">
  <p>Login captcha not valid</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/CaptchaBefore.png" />
</div>

<div align="center">
  <p>Login captcha valid</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/CaptchaAfter.png" />
</div>

<div align="center">
  <p>Register page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/RegisterGif.gif" />
</div>

<div align="center">
  <p>Register page validation</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/RegisterValidation.png" />
</div>

<div align="center">
  <p>Person and animal profiles edit</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/PhotoUpload.gif" />
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/ProfileAnimalPage.png" />
</div>

<div align="center">
  <p>Admin dashboard on profile page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/AdminDashboard.gif" />
</div>

# presentation of mobile views

<div align="center">
  <p>Home page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/HomeMobile.png" />
</div>

<div align="center">
  <p>Search page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/SearchMobile.png" />
</div>

<div align="center">
  <p>Login page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/LoginMobile.png" />
</div>

<div align="center">
  <p>Register page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/RegisterMobile.png" />
</div>

<div align="center">
  <p>Profile page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/ProfileMobile.png" />
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/ProfileAnimalMobile.png" />
</div>

<div align="center">
  <p>Chat page</p>
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/ChatMobile.png" />
</div>

# ERD diagram

<div align="center">
  <img src="https://github.com/gzaprzala/petsh/blob/main/public/img/PetshERD.png" />
</div>

# created with

<img align="left" width="30px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/8804286661557996995-512.png" />
<img align="left" width="30px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/632690741557997006-512.png" />
<img align="left" width="35px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/2765419221551942634-512.png" />
<img align="left" width="30px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/21088442871540553614-512.png" />
<img align="left" width="30px" padding-right="5px" src="https://cdn-icons-png.flaticon.com/512/5969/5969059.png" />
