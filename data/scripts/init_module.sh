#!/bin/bash

read -p "Bitte Module angeben: " module

cd ../../module

mkdir $module
mkdir $module/config
mkdir $module/src
mkdir $module/test
mkdir $module/view

touch $module/config/module.config.php

mkdir $module/src/Controller
touch $module/src/Module.php
touch $module/src/Controller/IndexController.php

exit 0



