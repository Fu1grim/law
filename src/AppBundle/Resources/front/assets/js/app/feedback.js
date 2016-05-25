"use strict";

import "jquery";
import "jquery-validation";
import "jquery-mask-plugin";
import Menu from "../components/menu";
import Loader from "../components/loader";

new Menu();
new Loader();
$("#feedback-form").validate();
