![](https://github.com/gzaprzala/petsh/blob/main/public/img/logo.png)

# petsh

Find new friends and invite them for a first walk!

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

Petsh allows you to easily change background color to whatever you want.

![](https://github.com/gzaprzala/petsh/blob/main/public/img/HomeColor.gif)

Search page (likes and dislikes possible by using fetchAPI GET and POST methods).

![](https://github.com/gzaprzala/petsh/blob/main/public/img/SearchPage.png)

Redirect to chat from search page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/RedirectToChat.gif)

Chat page (refresh possible by using fetchAPI GET method).

![](https://github.com/gzaprzala/petsh/blob/main/public/img/ChatExample.gif)

Login page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/LoginPage.png)

Login captcha not valid

![](https://github.com/gzaprzala/petsh/blob/main/public/img/CaptchaBefore.png)

Login captcha valid

![](https://github.com/gzaprzala/petsh/blob/main/public/img/CaptchaAfter.png)

Register page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/RegisterPage.png)

Register page validation

![](https://github.com/gzaprzala/petsh/blob/main/public/img/RegisterValidation.png)

Person and animal profiles edit

![](https://github.com/gzaprzala/petsh/blob/main/public/img/ProfilePage.png)

![](https://github.com/gzaprzala/petsh/blob/main/public/img/ProfileAnimalPage.png)

# presentation of mobile views

Home page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/HomeMobile.png)

Search page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/SearchMobile.png)

Login page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/LoginMobile.png)

Register page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/RegisterMobile.png)

Profile page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/ProfileMobile.png)

![](https://github.com/gzaprzala/petsh/blob/main/public/img/ProfileAnimalMobile.png)

Chat page

![](https://github.com/gzaprzala/petsh/blob/main/public/img/ChatMobile.png)

# ERD diagram

![](https://github.com/gzaprzala/petsh/blob/main/public/img/PetshERD.png)

# created with

<img align="left" width="30px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/8804286661557996995-512.png" />
<img align="left" width="30px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/632690741557997006-512.png" />
<img align="left" width="35px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/2765419221551942634-512.png" />
<img align="left" width="30px" padding-right="5px" src="https://pics.freeicons.io/uploads/icons/png/21088442871540553614-512.png" />
<img align="left" width="30px" padding-right="5px" src="https://cdn-icons-png.flaticon.com/512/5969/5969059.png" />
