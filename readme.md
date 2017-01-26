# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

#Project title: 2016 IAC website new modules

this project includes three components developed under LESS (Llaboratuar on Energy systems and sustainability) as below
1) A form that allows for the uploading of 200px X 200px pictures.
2) Dynamic validation form of AIC websites
3) Unit test for above components

------------------------------------------
Componet 1:

Controller :
postImgForm(ImageFormRequest $request): Save the Image in specified directory with the requested format of namespace
there are two directory for image, a function checks if it's the first picture uploaded by the user and decide which
forlder to store the file in

postDocForm(DocFormRequest $request): same procedure as above function, this time for Documents


View:
including 4 files, all the views use Bootstrap ass CSS :
-ImageForm
-DocForm
-SuccessfulImageUploaded (use pear tech for building tables)
-SuccessfulDocUploaded (use pear tech for building tables)

Routes:
4 request related to this component will be routed to correspinding controllers:
-ImgForm
-DocForm
-ImgUpload
-DocUpload

------------------------------------------
Component 2:

Controller :
 getWebTable() : retreive table from database (IAC_Website) and pass it to WebTable page
 postWebForm(Request $request) : post the selected website to be modified in WebUpdateForm
 postWebUpdated(Request $request) : Save the updated table for selected website and return to WebTable
 
View:
including 4 files, all the views use Bootstrap ass CSS :

Routes:
4 request related to this component will be routed to correspinding controllers:
-WebUpdateForm
-WebUpdated
-WebTable

Database:
Includes one table IAC_Website with 8 boolean column each of which is the yes/no answer to corresponding criteria (R1 to R8)
------------------------------------------
Component 3:

includes 4 files that checks for validity of inputs:

InvalidDocTest

validDocTest

validImgTest

validDocTest

