<?php

require 'model/cats.php';


$cats = get_cats();
include 'views/list.php';
